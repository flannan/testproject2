<?php
declare(strict_types=1);

namespace test;

use PHPUnit\Framework\TestCase;

/**
 * Class GetTest
 */
class GetTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        require_once __DIR__ . '/06.php';
    }

    /**
     * @dataProvider getProvider
     *
     * @param       $expected
     * @param array $arguments
     */
    public function testGetFunctionality($expected, ...$arguments): void
    {
        if (count($arguments) === 3) {
            $result = get($arguments[0], $arguments[1], $arguments[2]);
        } else {
            $result = get($arguments[0], $arguments[1]);
        }
        $this::assertSame($expected, $result);
    }

    /** data provider
     *
     * @return array
     */
    public function getProvider(): array
    {
        $cities = ['moscow', 'london', 'berlin', 'porto'];
        return [
            ['london', $cities, 1, 'default city'],
            [null, $cities, 4],
            ['paris', $cities, 10, 'paris'],
        ];
    }
}
