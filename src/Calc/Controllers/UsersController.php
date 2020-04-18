<?php

namespace Calc\Controllers;

use Calc\Exceptions\ForbiddenException;
use Calc\Exceptions\InvalidArgumentException;
use Calc\Exceptions\UnauthorizedException;
use Calc\Models\Users\User;
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


}