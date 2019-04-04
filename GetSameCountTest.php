<?php
declare(strict_types=1);

namespace test;

use PHPUnit\Framework\TestCase;

/**
 * Class GetTest
 */
class GetSameCountTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        require_once __DIR__ . '/16.php';
    }

    /**
     * @dataProvider dataProvider
     *
     * getSameCount([], []); // => 0
     * getSameCount([1, 10, 3], [10, 100, 35, 1]); // => 2
     * getSameCount([1, 3, 2, 2], [3, 1, 1, 2]); // => 3
     *
     * @param       $array1
     * @param       $array2
     * @param       $expected
     */
    public function testGetFunctionality($array1, $array2, $expected): void
    {

        $this::assertSame($expected, getSameCount($array1, $array2));
    }

    /** data provider
     *
     * @return array
     */
    public function dataProvider(): array
    {
        return [
            [[], [], 0],
            [[1, 10, 3], [10, 100, 35, 1], 2],
            [[1, 3, 2, 2], [3, 1, 1, 2], 3],
        ];
    }
}
