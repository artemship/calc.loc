<?php

namespace Calc\Controllers;

use Calc\Exceptions\InvalidArgumentException;
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

    public function profile()
    {
        $this->view->renderHtml('users/profile.php');
    }

}