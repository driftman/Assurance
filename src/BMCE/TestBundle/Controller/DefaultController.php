<?php

namespace BMCE\TestBundle\Controller;

use BMCE\TestBundle\Dao\AssuranceDAOImpl;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $metier = $this->get('bmce.metier');
        $message = $metier->addClient();
        return $this->render('BMCETestBundle:Default:index.html.twig', array('name' => $message));
    }
}
