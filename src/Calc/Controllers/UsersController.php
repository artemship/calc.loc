<?php

namespace Calc\Controllers;

use Calc\Exceptions\ForbiddenException;
use Calc\Exceptions\InvalidArgumentException;
use Calc\Exceptions\UnauthorizedException;
use Calc\Models\Users\User;
use Calc\Models\Users\UserActivationService;
use Calc\Services\EmailSender;
use Calc\Services\UsersAuthService;

class UsersController extends AbstractController
{
    public function logout()
    {
        UsersAuthService::deleteCookie();
        header('Location: /');
    }

    public function login()
    {
        if ($this->user !== null) {
            header('Location: /');
            exit;
        }

        if (!empty($_POST)) {
            try {
                $user = User::login($_POST);
                UsersAuthService::saveCookie($user);
                header('Location: /');
                exit();
            } catch (InvalidArgumentException $e) {
                $this->view->renderHtml('users/login.php', ['error' => $e->getMessage()]);
                return;
            }
        }
        $this->view->renderHtml('users/login.php');
    }

    public function signUp()
    {
        if ($this->user === null) {
            throw new UnauthorizedException();
        }

        if ($this->user->getRole() != 'admin') {
            throw new ForbiddenException();
        }

        if (!empty($_POST)) {
            try {
                $user = User::signUp($_POST);
            } catch (InvalidArgumentException $e) {
                $this->view->renderHtml('users/signUp.php', ['error' => $e->getMessage()]);
                return;
            }

            if ($user instanceof User) {
                $this->view->renderHtml('users/signUpSuccessful.php');
                return;
            }
        }

        $this->view->renderHtml('users/signUp.php');
    }

    public function addUser()
    {
        if ($this->user === null) {
            throw new UnauthorizedException();
        }
        if (($this->user->getRole() != 'admin')) {
            throw new ForbiddenException();
        }

        if (!empty($_POST)) {
            try {
                $data = User::addUser($_POST);
                $user = $data['user'];
                $password = $data['password'];
            } catch (InvalidArgumentException $e) {
                $this->view->renderHtml('cabinet/cabinet.php', [
                        'tabName' => 'addUser',
                        'title' => 'Пользователи',
                        'error' => $e->getMessage()]
                );
                return;
            }
            if ($user instanceof User) {

                $code = UserActivationService::createActivationCode($user);

                EmailSender::send($user, 'Регистрация в системе', 'userActivation.php', [
                    'userId' => $user->getId(),
                    'code' => $code,
                    'userLogin' => $user->getLogin(),
                    'userPassword' => $password
                ]);

                $this->view->renderHtml('cabinet/cabinet.php', [
                    'tabName' => 'addUser',
                    'title' => 'Пользователи',
                    'successful' => 'Пользователь успешно зарегистрирован в системе'
                ]);
                return;
            }
        }

        $this->view->renderHtml('cabinet/cabinet.php', [
                'tabName' => 'addUser',
                'title' => 'Пользователи']
        );
    }

    public function activate(int $userId, string $activationCode)
    {
        $user = User::getById($userId);
        $isCodeValid = UserActivationService::checkActivationCode($user, $activationCode);
        if ($isCodeValid) {
            $user->activate();
            header('Location: /');
            exit;
            echo 'OK!';
        }
    }


}