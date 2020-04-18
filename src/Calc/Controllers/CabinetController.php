<?php

namespace Calc\Controllers;

use Calc\Exceptions\ForbiddenException;
use Calc\Exceptions\InvalidArgumentException;
use Calc\Exceptions\UnauthorizedException;
use Calc\Models\Users\User;

class CabinetController extends AbstractController
{
    public function cabinetProfile()
    {
        if ($this->user === null) {
            throw new UnauthorizedException();
        }
//        $user = $this->user;
//        if (!empty($_POST['password'])) {
//            try {
//                $user = User::changePassword($user, $_POST['password'], $_POST['confirmPassword']);
//            } catch (InvalidArgumentException $e) {
//                $this->view->renderHtml('cabinet/cabinet.php', [
//                        'title' => 'Личные данные',
//                        'error' => $e->getMessage()]
//                );
//                return;
//            }
//            $this->view->renderHtml('cabinet/cabinet.php', [
//                'title' => 'Личные данные',
//                'successful' => 'Пароль изменен успешно'
//            ]);
//            return;
//        }

        if (!empty($_POST)) {
            try {
                $this->user->updateFromArray($_POST);
            } catch (InvalidArgumentException $e) {
                $this->view->renderHtml('cabinet/cabinet.php', [
                        'title' => 'Личные данные',
                        'error' => $e->getMessage()]
                );
                return;
            }
            $this->view->renderHtml('cabinet/cabinet.php', [
                'title' => 'Личные данные',
                'successful' => 'Данные успешно обновлены'
            ]);
            return;
        }

        $this->view->renderHtml('cabinet/cabinet.php', ['title' => 'Личные данные']);
    }

    public function cabinetUsers()
    {
        if ($this->user === null) {
            throw new UnauthorizedException();
        }
        if (($this->user->getRole() != 'admin')) {
            throw new ForbiddenException();
        }

        $this->view->renderHtml('cabinet/cabinet.php', [
                'tabName' => 'users',
                'title' => 'Пользователи']
        );
    }


}