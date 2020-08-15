<?php

namespace Calc\Controllers;

use Calc\Exceptions\ForbiddenException;
use Calc\Exceptions\InvalidArgumentException;
use Calc\Exceptions\UnauthorizedException;
use Calc\Functions\Pagination;
use Calc\Functions\SQL;
use Calc\Models\Partners\Partner;
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

    public function cabinetUserProfile()
    {
        if (!$this->user->isAdmin()) {
            return;
        }
        if (empty($_POST['userLogin'])) {
            die(json_encode('Wrong userLogin'));
        }

        $userLogin = $_POST['userLogin'];
        $user = User::findOneByColumn('login', $userLogin);
        $this->view->renderHtml('cabinet/cabinet.php', [
            'title' => 'Личные данные',
            'user' => $user
        ]);

    }

    public function provideAccess()
    {
        if (empty($_POST['userId'])) {
            die (json_encode('Wrong userId'));
        }
        if (!isset($_POST['isAccessed'])) {
            die (json_encode('Wrong isAccessed'));
        }
        $userId = (int)$_POST['userId'];
        $isAccessed = $_POST['isAccessed'] === 'true' ? 1 : 0;
        $user = User::getById($userId);
        try {
            User::switchAccess($user, $isAccessed);
        } catch (InvalidArgumentException $e) {
            echo json_encode(0);
            return;
        }
        echo json_encode(1);
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

    public function cabinetPartners()
    {
        if ($this->user === null) {
            throw new UnauthorizedException();
        }
        if (($this->user->getRole() != 'admin')) {
            throw new ForbiddenException();
        }

        $this->view->renderHtml('cabinet/cabinet.php', [
                'tabName' => 'partners',
                'title' => 'Партнеры']
        );
    }

    public function getUsers()
    {
        $arrayUsers = User::findAll();
        echo json_encode($arrayUsers);
    }

    public function getPartners()
    {
        $arrayPartners = Partner::getAllPartners();
        echo json_encode($arrayPartners);
    }


}