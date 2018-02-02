<?php

namespace AppBundle\Validator\Constraints;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * @Annotation
 */

class IsInDBValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        $result=$this->getDoctrine()->getManager()
            ->createQuery(
                'SELECT *
                FROM AppBundle:Product p
                WHERE p.name = :name 
                ORDER BY p.name ASC')
            ->setParameter('name',$value)
            ->getResult();

        if ($result) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ name }}', $value)
                ->addViolation();
        }
    }
}