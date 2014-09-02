<?php
/**
 * Created by PhpStorm.
 * User: rogerio
 * Date: 01/09/14
 * Time: 20:41
 */

namespace CODE\Form\Validator;

use CODE\Request\Request;

class Validator
{

    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

} 