<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function newProduct (Request $request)
    {
        //Crea un nuevo producto
        $product = new Product();
        $product->setName('GHB Sades Auriculares Gaming Cascos con Microfono SA-901 Sonido Envolvente 7.1 con USB para PC Ordenador Portátil Azul y Negro');
        $product->setPrice(21.99);

        //Crea el formulario
        $form= $this->createFormBuilder($product)
            ->add('name',TextType::class)
            ->add('price',NumberType::class)
            ->add('save', SubmitType::class, array('label' => 'Guardar'))
            ->getForm();

        return $this->render('default/form.html.twig', array('form'=>$form->createView(),));
    }
}
