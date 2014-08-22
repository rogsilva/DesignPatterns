<?php
/**
 * Created by PhpStorm.
 * User: rogerio
 * Date: 21/08/14
 * Time: 21:03
 */

namespace CODE\Form\Elements;


class Email extends AbstractElement
{
    public function __construct($name, $value = null)
    {
        parent::__construct("email", $name, $value);

    }
} 