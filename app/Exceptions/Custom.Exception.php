<?php

namespace App\Exceptions;

use Exception;

class CustomException extends Exception
{
    public function render($request)
    {
        return response()->json([
            'error' => 'A custom error occurred',
            'message' => $this->getMessage()
        ], 400);
    }
}

throw new CustomException("Invalid request");

