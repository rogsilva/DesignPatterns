<?php
/**
 * Created by PhpStorm.
 * User: rogerio
 * Date: 01/09/14
 * Time: 20:41
 */

namespace CODE\Form\Validator;

use CODE\Form\Interfaces\ValidatorInterface;
use CODE\Request\Interfaces\RequestInterface;

class Validator implements ValidatorInterface
{

    private $request;

    public function __construct(RequestInterface $request)
    {
        $this->request = $request;
    }

} 