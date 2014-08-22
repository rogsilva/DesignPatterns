<?php

namespace CODE\Form;

use CODE\Form\Elements\AbstractElement;
use CODE\Form\Interfaces\FormInterface;

class Form implements FormInterface
{
    private $attributes;
    private $elements;

    public function __construct($attributes = array())
    {
        $this->attributes = $attributes;
    }

    public function openTag()
    {
        $tag = "<form";

        if(count($this->attributes) > 0){

            foreach($this->attributes as $prop => $value){

                $tag.= " {$prop}=\"{$value}\"";

            }

        }
        $tag.=">\n";

        return $tag;
    }

    public function closeTag()
    {
        return "</form>\n";
    }

    public function add(AbstractElement $element)
    {
        $this->elements[] = $element->mount();
    }

    public function render()
    {
        if(count($this->elements > 0)){
            $elementList = "";
            foreach($this->elements as $element){
                $elementList.= $element;
            }
            return $elementList;
        }

        return false;
    }


    /**
     * @param array $attributes
     */
    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

} 