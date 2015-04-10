<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\HotelExpress;
use AppBundle\Entity\Chambre;

class AdminController extends Controller {
    
    /**
     * @Route("/admin/", name="admin")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:admin:administration.html.twig');       
    }
   
}