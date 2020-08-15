<?php


namespace Calc\Controllers;


use Calc\Exceptions\ForbiddenException;
use Calc\Exceptions\UnauthorizedException;

class PartnersController extends AbstractController
{
    public function addPartner()
    {
        if ($this->user === null) {
            throw new UnauthorizedException();
        }
        if (($this->user->getRole() != 'admin')) {
            throw new ForbiddenException();
        }

        $this->view->renderHtml('cabinet/cabinet.php', [
                'tabName' => 'addPartner',
                'title' => 'Партнеры']
        );
    }
}