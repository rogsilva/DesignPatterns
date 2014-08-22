<?php
/**
 * Created by PhpStorm.
 * User: rogerio
 * Date: 21/08/14
 * Time: 23:06
 */

namespace CODE\Form\Elements;


class Submit extends AbstractElement
{
    public function __construct($name, $value = null)
    {
        parent::__construct("submit", $name, $value);

    }
} 