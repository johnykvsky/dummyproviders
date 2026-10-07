<?php

declare(strict_types = 1);

namespace DummyGenerator\Provider\Languages\pt_BR;

class CheckDigit
{
    /**
     * Calculates one MOD 11 check digit based on customary Brazilian algorithms.
     */
    public static function check(int|string $numbers): int
    {
        $numbers = (string) $numbers;
        $length = strlen($numbers);
        $secondAlgorithm = $length >= 12;
        $verifier = 0;

        for ($i = 1; $i <= $length; ++$i) {
            if (!$secondAlgorithm) {
                $multiplier = $i + 1;
            } else {
                $multiplier = ($i >= 9) ? $i - 7 : $i + 1;
            }

            $verifier += ((int) $numbers[$length - $i]) * $multiplier;
        }

        $verifier = 11 - ($verifier % 11);

        if ($verifier >= 10) {
            $verifier = 0;
        }

        return $verifier;
    }

    /**
     * Calculates one MOD 11 check digit based on customary Brazilian algorithms for alphanumeric strings (A–Z map to 17–42).
     */
    public static function checkAlpha(string $str): int
    {
        $str = strtoupper($str);
        $length = strlen($str);
        $secondAlgorithm = $length >= 12;
        $verifier = 0;

        for ($i = 1; $i <= $length; ++$i) {
            $c = $str[$length - $i];
            $val = ord($c) - 48;
            $multiplier = $secondAlgorithm ? ($i >= 9 ? $i - 7 : $i + 1) : $i + 1;
            $verifier += $val * $multiplier;
        }

        $verifier = 11 - ($verifier % 11);

        return $verifier >= 10 ? 0 : $verifier;
    }
}
