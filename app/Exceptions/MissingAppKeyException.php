<?php

namespace App\Exceptions;

use Exception;

class MissingAppKeyException extends Exception
{
    protected $message = 'Application key is missing.';
}
