<?php

namespace CODE\Form;

use CODE\Form\Elements\AbstractElement;
use CODE\Form\Interfaces\FormInterface;

use CODE\Form\Validator\Validator;

class Form implements FormInterface
{
    private $attributes;
    private $elements = [];
    private $validator;

    public function __construct(Validator $validator, $attributes = array())
    {
        $this->attributes = $attributes;
        $this->validator = $validator;
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
        $this->elements[$element->getName()] = $element;
    }

    public function render()
    {
        if(count($this->elements > 0)){
            $elementList = "";
            foreach($this->elements as $element){
                $elementList.= $element->mount();
            }
            return $elementList;
        }

        return false;
    }


    public function createField($name)
    {
        return $this->elements[$name]->mount();
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

    /**
     * @param mixed $elements
     */
    public function setElements(array $elements)
    {
        $this->elements = $elements;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getElements()
    {
        return $this->elements;
    }


}