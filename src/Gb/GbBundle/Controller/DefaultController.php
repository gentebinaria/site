<?php
namespace Gb\GbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('GbBundle:Default:index.html.twig');
    }

}
