<?php

namespace BionicUniversity\HRManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('HRBundle:Default:index.html.twig', array('name' => $name));
    }
}
