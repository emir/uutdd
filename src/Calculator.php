<?php
declare(strict_types=1);

namespace App;

use InvalidArgumentException;

class Calculator
{
    const MAX_NUMBER_ALLOWED = 1000;

    /**
     * @param string $numbers
     * @return int
     */
    public function add(string $numbers): int
    {
        $numbers = $this->parseNumbers($numbers);

        $result = 0;

        foreach ($numbers as $number) {

            $this->guardAgainstInvalidNumber($number);

            if ($number >= self::MAX_NUMBER_ALLOWED) {
                continue;
            }

            $result += $number;
        }

        return $result;
    }

    /**
     * @param string $numbers
     * @return int
     */
    public function divide(string $numbers): int
    {
        return 0;
    }

    /**
     * @param int $number
     * @return int
     */
    private function guardAgainstInvalidNumber(int $number): int
    {
        if ($number < 0) {
            throw new InvalidArgumentException('Invalid number');
        }

        return $number;
    }

    /**
     * @param string $numbers
     * @return array|string
     */
    private function parseNumbers(string $numbers)
    {
        $numbers = array_map('intval', explode(',', $numbers));
        return $numbers;
    }
}