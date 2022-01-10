<?php
/** @noinspection NonAsciiCharacters */
/** @noinspection PhpUnhandledExceptionInspection */
/** @noinspection PhpDocMissingThrowsInspection */
/** @noinspection PhpPrivateFieldCanBeLocalVariableInspection */
/** @noinspection PhpExpressionResultUnusedInspection */
/** @noinspection PhpStaticAsDynamicMethodCallInspection */

declare(strict_types=1);

namespace Tests;

use TaroHida\ApplicationExceptions\RuntimeException;
use PHPUnit\Framework\TestCase;

class RuntimeExceptionTest extends TestCase
{
    public function test_debug_params()
    {
        $pdo_fetchAll_result_example = [
            0 => [
                0 => 1,
                'id' => 1,
                1 => 'data',
                'data' => 'data'
            ],
            [
                0 => 2,
                'id' => 2,
                1 => 'example data',
                'data' => 'example data'
            ]
        ];
        $expected = <<<EOT
Array
(
    [0] => Array
        (
            [0] => 1
            [id] => 1
            [1] => data
            [data] => data
        )

    [1] => Array
        (
            [0] => 2
            [id] => 2
            [1] => example data
            [data] => example data
        )

)

EOT;

        try {
            throw new RuntimeExceptionImplementExample('', 0, null, $pdo_fetchAll_result_example);
        } catch (RuntimeException $e) {
            self::assertSame($expected, $e->getLoggingMessage());
        }
    }
}
