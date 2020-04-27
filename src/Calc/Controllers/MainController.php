<?php

namespace Calc\Controllers;

use Calc\Exceptions\UnauthorizedException;
use Calc\Functions\SQL;
use Calc\View\View;

class MainController extends AbstractController
{

    public function main()
    {
        if ($this->user === null) {
            header('Location: /login');
            exit;
        }

        header('Location: /calculation');
        exit;

    }

    public function policy()
    {
        if ($this->user === null) {
            throw new UnauthorizedException();
        }
        $mark = $_POST['mark'];
        $model = $_POST['model'];
        $carAge = $_POST['carAge'];
        $autoNumber = $_POST['autoNumber'];
        $enginePower = $_POST['enginePower'];
        $engineVolume = $_POST['engineVolume'];
        $vinId = $_POST['vinId'];
        $keysAmount = $_POST['keysAmount'];
        $vehicleCategory = $_POST['vehicleCategory'];
        $permissibleMaxWeight = $_POST['permissibleMaxWeight'];
        $ptsSerialNumber = $_POST['ptsSerialNumber'];
        $stsSerialNumber = $_POST['stsSerialNumber'];
        $this->view->renderHtml('policy.php', [
            'mark' => $mark,
            'model' => $model,
            'carAge' => $carAge,
            'autoNumber' => $autoNumber,
            'enginePower' => $enginePower,
            'engineVolume' => $engineVolume,
            'vinId' => $vinId,
            'keysAmount' => $keysAmount,
            'vehicleCategory' => $vehicleCategory,
            'permissibleMaxWeight' => $permissibleMaxWeight,
            'ptsSerialNumber' => $ptsSerialNumber,
            'stsSerialNumber' => $stsSerialNumber,

        ], 200);
    }


}