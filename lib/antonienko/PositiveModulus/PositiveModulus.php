<?php
/**
 * True Modulus
 *
 * @author Antonio Manuel Hernández Sánchez
 * @copyright Copyright (c) 2015 Antonio Manuel Hernández Sánchez
 * @license MIT
 * @link http://opensource.org/licenses/MIT
 */

namespace antonienko\PositiveModulus;

class PositiveModulus
{
    /**
     * @param int $a
     * @param int $b
     * @returns int
     */
    public static function calc($a, $b)
    {
        if ($b == 0) {
            throw new \InvalidArgumentException("Divisor cannot be 0");
        }
        $r = $a % $b;
        if ($r < 0)
        {
            $r += abs($b);
        }
        return $r;
    }
}