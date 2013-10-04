<?php

namespace Cauchemars\SheetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SheetController extends Controller
{
    public function viewAction()
    {
        return $this->render('CauchemarsSheetBundle:Sheet:view.html.twig');
    }
}
