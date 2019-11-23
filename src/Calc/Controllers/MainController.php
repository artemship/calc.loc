<?php

namespace Calc\Controllers;

use Calc\Models\Cars\Car;

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


        $this->view->renderHtml('main.php', [
            'cars' => $cars,
            'carsAge' => $carsAge,
            'insuranceRisks' => $insuranceRisks
        ]);
    }


}