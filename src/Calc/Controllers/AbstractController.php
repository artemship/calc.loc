<?php

namespace Calc\Controllers;

use Calc\View\View;

abstract class AbstractController
{
    /** @var View */
    protected $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }

}