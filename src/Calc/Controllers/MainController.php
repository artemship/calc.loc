<?php

namespace Calc\Controllers;


use Calc\Models\Cars\Mark;
use Calc\Services\Db;

class MainController extends AbstractController
{
    public function main()
    {
//        $articles = Article::findAll();
//        $this->view->renderHtml('main/main.php', ['articles' => $articles]);
        $marks = Mark::findAll();
//        var_dump($marks);
        $db = Db::getInstance();
        $marks = $db->query(
            'SELECT DISTINCT `mark_name` FROM `marks`');
        var_dump($marks);
        $this->view->renderHtml('main.php', ['marks' => $marks]);

    }
}