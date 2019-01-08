<?php

namespace App\Exceptions;

use Exception;

class BadCredentialsApi extends Exception
{
    public function __construct($message = 'Bad Credentials')
    {
        parent::__construct($message);
    }

    public function render(){
        return response()->json(['message' => $this->message], 401);
    }

}
