<?php

namespace CODE\Form\Elements;


class Hidden extends AbstractElement
{
    public function __construct($name, $value = null)
    {
        parent::__construct("hidden", $name, $value);

    }
} 