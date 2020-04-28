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
        $contractStartHour = $_POST['contractStartHour'];
        $contractStartMinute = $_POST['contractStartMinute'];
        $contractStartDate = $_POST['contractStartDate'];
        $contractEndDate = $_POST['contractEndDate'];
        $policyholderName = $_POST['policyholderName'];
        $policyholderRegion = $_POST['policyholderRegion'];
        $policyholderAddress = $_POST['policyholderAddress'];
        $policyholderPassport = $_POST['policyholderPassport'];
        $policyholderCitizenship = $_POST['policyholderCitizenship'];
        $policyholderDateOfBirth = $_POST['policyholderDateOfBirth'];
        $policyholderPhoneNumber = $_POST['policyholderPhoneNumber'];
        $policyholderEmail = $_POST['policyholderEmail'];
        $policyholderINN = $_POST['policyholderINN'];


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
            'contractStartHour' => $contractStartHour,
            'contractStartMinute' => $contractStartMinute,
            'contractStartDate' => $contractStartDate,
            'contractEndDate' => $contractEndDate,
            'policyholderName' => $policyholderName,
            'policyholderRegion' => $policyholderRegion,
            'policyholderAddress' => $policyholderAddress,
            'policyholderPassport' => $policyholderPassport,
            'policyholderCitizenship' => $policyholderCitizenship,
            'policyholderDateOfBirth' => $policyholderDateOfBirth,
            'policyholderPhoneNumber' => $policyholderPhoneNumber,
            'policyholderEmail' => $policyholderEmail,
            'policyholderINN' => $policyholderINN,


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