<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class FormController extends Controller
{
    /**
     * @Route("/nuevo/producto")
     */
    public function newProductAction (Request $request)
    {
        /** PRODUCTO EJEMPLO PA COMPROBAR FORMULARIO
         * $product = new Product();
         * $product->setName('GHB Sades Auriculares Gaming Cascos con Microfono SA-901 Sonido Envolvente 7.1 con USB para PC Ordenador Portátil Azul y Negro');
         * $product->setPrice(21.99); */
        $product = new Product();

        //Crea el formulario
        $form= $this->createFormBuilder($product)
            ->add('Nombre: ',TextType::class)
            ->add('Precio: ',NumberType::class)
            ->add('save', SubmitType::class, array('label' => 'Guardar'))
            ->getForm();

        //Gestionar respueta
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $product = $form->getData();

            // Se guardan los datos en la base de datos
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            return $this->redirectToRoute('form_success');
        }

        return $this->render('default/form.html.twig', array(
            'form' => $form->createView(),));
    }
}
