<?php

namespace Calc\Controllers;

use Calc\Functions\SQL;

class MainController extends AbstractController
{
    public function main()
    {
        $marks = SQL::getValues(TABLE_NAME_MARKS, 'mark', true);
        $franchises = SQL::getValues(TABLE_NAME_FRANCHISES, 'value', true);

        $options = (require __DIR__ . '/../../settings.php')['calculation'];
        foreach ($options['insurance'] as $key => $option) {
            $insurances[$key] = $option;
        }
//        foreach ($options['franchise'] as $option) {
//            $franchises[] = $option;
//        }

        for ($i = 0; $i <= 6; $i++) {
            $carsAge[$i] = (string)((int)(date('Y') - $i));
        }

        $this->view->renderHtml('main.php', [
            'marks' => $marks,
            'carsAge' => $carsAge,
            'insurances' => $insurances,
            'franchises' => $franchises
        ]);
    }


}