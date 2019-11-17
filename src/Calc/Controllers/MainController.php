<?php

namespace Calc\Controllers;


class MainController
{
    public function main()
    {
        $articles = Article::findAll();
        $this->view->renderHtml('main/main.php', ['articles' => $articles]);
    }
}