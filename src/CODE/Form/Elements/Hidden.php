<?php

namespace CODE\Form\Elements;


class Hidden extends AbstractElement
{
    public function __construct($name, $value = null)
    {
        parent::__construct("hidden", $name, $value);

    }

    public function add(AbstractElement $element){
        throw new \InvalidArgumentException('Não é possível adicionar elementos neste tipo de elemento!');
    }
} 