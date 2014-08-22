<?php
/**
 * Created by PhpStorm.
 * User: rogerio
 * Date: 21/08/14
 * Time: 22:31
 */

namespace CODE\Form\Elements;


class Password extends AbstractElement
{
    public function __construct($name, $value = null)
    {
        parent::__construct("password", $name, $value);

    }
} 