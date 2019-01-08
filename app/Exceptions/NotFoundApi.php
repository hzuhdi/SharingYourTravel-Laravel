<?php

namespace App\Exceptions;

use Exception;

class NotFoundApi extends Exception
{
    protected $resource_type;

    public function __construct($message = 'resource not found', $resource_type)
    {
        parent::__construct($message);
        $this->resource_type = $resource_type;
    }

    public function render(){
        return response()->json(['message' => $this->resource_type . " with id " . $this->message . " not found"], 404);
    }

}
