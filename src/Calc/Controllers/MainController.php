<?php

namespace Calc\Controllers;

use Calc\Models\Cars\Car;

class MainController extends AbstractController
{
    public function main()
    {
        $cars = Car::getColumn('mark', true);
        $this->view->renderHtml('main.php', ['cars' => $cars]);
    }

}