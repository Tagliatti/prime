<?php

if (!function_exists('is_prime')) {
    function is_prime(int $number): bool
    {
        if ($number == 1) {
            return true;
        }
        if ($number < 1) {
            throw new \InvalidArgumentException('Number must be greater than 0');
        }

        for ($i = 2; $i < $number; $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }

        return true;
    }
}
