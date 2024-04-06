<?php

namespace Tagliatti\Prime\Tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class PrimeTest extends TestCase
{
    const array PRIMES     = [
        1,
        2,
        3,
        5,
        7,
        11,
        13,
        17,
        19,
        23,
        29,
        31,
        37,
        41,
        43,
        47,
        53,
        59,
        61,
        67,
        71,
        73,
        79,
        83,
        89,
        97,
    ];
    const array NON_PRIMES = [
        4,
        6,
        8,
        9,
        10,
        12,
        14,
        15,
        16,
        18,
        20,
        21,
        22,
        24,
        25,
        26,
        27,
        28,
        30,
        32,
        33,
        34,
        35,
        36,
        38,
        39,
        40,
        42,
        44,
        45,
        46,
        48,
        49,
        50,
        51,
        52,
        54,
        55,
        56,
        57,
        58,
        60,
        62,
        63,
        64,
        65,
        66,
        68,
        69,
        70,
    ];

    private static function generateDataProvider(array $data, int $cases): array
    {
        $dataSet = [];

        for ($i = 1; $i <= $cases; $i++) {
            $dataSet['data set ' . $i] = [$data[array_rand($data)]];
        }

        return $dataSet;
    }

    public static function trueCasesDataProvider(): array
    {
        return self::generateDataProvider(self::PRIMES, 10);
    }

    public static function falseCasesDataProvider(): array
    {
        return self::generateDataProvider(self::NON_PRIMES, 10);
    }

    #[Test]
    #[DataProvider('trueCasesDataProvider')]
    public function trueCase(int $number): void
    {
        $this->assertTrue(is_prime($number), "$number should be prime");
    }

    #[Test]
    #[DataProvider('falseCasesDataProvider')]
    public function falseCase(int $number): void
    {
        $this->assertFalse(is_prime($number), "$number should not be prime");
    }

    #[Test]
    public function zeroThrowInvalidArgumentException(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        is_prime(0);
    }

    #[Test]
    public function lessThenZeroThrowInvalidArgumentException(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        is_prime(rand(-1000, -1));
    }
}
