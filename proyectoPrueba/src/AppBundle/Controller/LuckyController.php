<?php
/**
 * Created by PhpStorm.
 * User: MMaestre
 * Date: 31/01/18
 * Time: 12:43
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
        // mt_rand = número aleatorio
        $number = mt_rand(0,10);

        /** RETURN SIMPLE
         * return new Response(
         * '<html><body>Lucky number: '.$number.'</body></html>'
         * );
         */

        return $this->render('lucky/number.html.twig',array('number'=>$number,));
    }
}