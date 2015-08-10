<?php

namespace DH\DownHoleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
	return $this->render('DHDownHoleBundle:Default:index.html.twig');
    }
}
