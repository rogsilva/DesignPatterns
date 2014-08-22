<?php


namespace CODE\Form\Elements;


class Text extends AbstractElement
{

    public function __construct($name, $value = null)
    {
        parent::__construct("text", $name, $value);

    }

} 