<?php
/**
 * Created by PhpStorm.
 * User: MMaestre
 * Date: 2/02/18
 * Time: 9:51
 */

namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class AlreadyDB extends Constraint
{
    public $message = 'El producto {{ name }} ya se encuentra en la base de datos.';
}
