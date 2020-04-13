<?php

namespace Calc\Controllers;

use Calc\Exceptions\UnauthorizedException;
use Calc\Functions\SQL;
use Calc\View\View;

class MainController extends AbstractController
{

    public function main()
    {
        if ($this->user === null) {
            header('Location: /login');
            exit;
        }

        header('Location: /calculation');
        exit;

    }

    public function policy()
    {
        if ($this->user === null) {
            throw new UnauthorizedException();
        }
        $mark = $_POST['mark'];
        $model = $_POST['model'];
        $this->view->renderHtml('policy.php', [
            'mark' => $mark,
            'model' => $model
        ], 200);
    }


}