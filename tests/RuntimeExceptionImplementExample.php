<?php
declare(strict_types=1);

namespace Tests;

use ApplicationExceptions\RuntimeException;
use Throwable;

class RuntimeExceptionImplementExample extends RuntimeException
{
    public function __construct($message = "", $code = 0, Throwable $previous = null, array $debug_params=null)
    {
        parent::__construct($message, $code, $previous);
        $this->debug_params = $debug_params;
    }
}