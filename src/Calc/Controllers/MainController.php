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

        $insuranceRisks['damage'] = 'Ущерб';
        $insuranceRisks['full'] = 'Ущерб + Хищение';

        $franchises = Franchise::getColumn('value', true);


        $this->view->renderHtml('main.php', [
            'cars' => $cars,
            'carsAge' => $carsAge,
            'insuranceRisks' => $insuranceRisks,
            'franchises' => $franchises
        ]);
    }


}