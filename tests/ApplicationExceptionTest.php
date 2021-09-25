<?php
/** @noinspection NonAsciiCharacters */
/** @noinspection PhpUnhandledExceptionInspection */
/** @noinspection PhpDocMissingThrowsInspection */
/** @noinspection PhpPrivateFieldCanBeLocalVariableInspection */
/** @noinspection PhpExpressionResultUnusedInspection */
/** @noinspection PhpStaticAsDynamicMethodCallInspection */

declare(strict_types=1);

namespace Tests;

use ApplicationExceptions\ApplicationException;
use ApplicationExceptions\ApplicationExceptionInterface;
use PHPUnit\Framework\TestCase;

class ApplicationExceptionTest extends TestCase
{
    public function test_construct()
    {
        $exception = new ApplicationException();
        self::assertInstanceOf(ApplicationException::class, $exception);
        self::assertInstanceOf(ApplicationExceptionInterface::class, $exception);
    }
}
