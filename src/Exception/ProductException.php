<?php

namespace Yokithaiii\CatalogSbisBitrix\Exception;

class ProductException extends SbisBitrixException
{
    public function __construct($message = "", $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}