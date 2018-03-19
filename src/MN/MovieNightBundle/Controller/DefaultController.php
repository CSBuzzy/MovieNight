<?php

namespace MN\MovieNightBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MNMovieNightBundle:Default:index.html.twig');
    }
}
