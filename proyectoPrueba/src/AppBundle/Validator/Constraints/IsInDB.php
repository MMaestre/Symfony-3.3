<?php

namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */

class IsInDB extends Constraint {
    public $message = 'El artículo {{ name }} ya se encuentra en la base de datos.';
}