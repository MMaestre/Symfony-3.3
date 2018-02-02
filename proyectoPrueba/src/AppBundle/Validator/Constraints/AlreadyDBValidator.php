<?php
/**
 * Created by PhpStorm.
 * User: MMaestre
 * Date: 2/02/18
 * Time: 9:51
 */

namespace AppBundle\Validator\Constraints;

use AppBundle\Entity\Product;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class AlreadyDBValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        $result=$this->getDoctrine()
            ->getRepository(Product::class)
            ->findByName($value);

        if ($result) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ name }}', $value)
                ->addViolation();
        }
    }
}
