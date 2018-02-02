<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends Controller
{
    /**
     * @Route("/lista/productos")
     */
    public function indexAction()
    {
        $results=$this->getDoctrine()
            ->getRepository(Product::class)
            ->findAll();

        return $this->render('default/result.html.twig', array(
            'lista' => $results,));
    }
}
