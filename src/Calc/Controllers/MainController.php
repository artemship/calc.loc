<?php

namespace Calc\Controllers;


use Calc\Models\Cars\Mark;
use Calc\Services\Db;

class MainController extends AbstractController
{
    public function main()
    {
        $marks = Mark::getColumn('mark_name', true);
        $this->view->renderHtml('main.php', ['marks' => $marks]);
    }

}