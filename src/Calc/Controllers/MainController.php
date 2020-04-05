<?php

namespace Calc\Controllers;

use Calc\Functions\SQL;
use Calc\View\View;

class MainController extends AbstractController
{
    public function policy()
    {
        $mark = $_POST['mark'];
        $model = $_POST['model'];
        $this->view->renderHtml('policy.php', [
            'mark' => $mark,
            'model' => $model
        ], 200);
    }

}