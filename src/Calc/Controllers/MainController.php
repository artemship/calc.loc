<?php

namespace Calc\Controllers;

use Calc\Models\Calculation\Car;
use Calc\Models\Calculation\Franchise;

class MainController extends AbstractController
{
    public function main()
    {
        $cars = Car::getColumn('mark', true);

        for ($i = 0; $i <= 6; $i++) {
            $carsAge[$i] = (string)((int)(date('Y') - $i));
        }

        $insurances['damage'] = 'Ущерб';
        $insurances['full'] = 'Ущерб + Хищение';

        $franchises = Franchise::getColumn('value', true);


        $this->view->renderHtml('main.php', [
            'cars' => $cars,
            'carsAge' => $carsAge,
            'insurances' => $insurances,
            'franchises' => $franchises
        ]);
    }


}