<?php

namespace BionicUniversity\HRBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BionicUniversityHRBundle:Default:index.html.twig');
    }
}
