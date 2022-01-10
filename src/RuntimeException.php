<?php
declare(strict_types=1);

namespace TaroHida\ApplicationExceptions;

abstract class RuntimeException extends \RuntimeException
{
    protected $debug_params;

    public function getLoggingMessage(): string
    {
        if (is_null($this->debug_params)) {
            return 'debug param not set';
        }
        return print_r($this->debug_params, true);
    }

    protected function getDebugParamNotSetMessage(): string
    {
        return 'debug params not set';
    }
}