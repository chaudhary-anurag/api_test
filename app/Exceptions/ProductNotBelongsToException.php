<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToException extends Exception
{
    public function render()
    {
     return ['error'=>'product not belongs to user'];
    }
}
