<?php
namespace antonienko\TrueMod\tests;

use antonienko\PositiveModulus\PositiveModulus;

class PositiveModulusTest extends \PHPUnit_Framework_TestCase
{
    /**
     * method calc
     * when called
     * should returnProperResult
     * @dataProvider getValues
     */
    public function test_calc_called_returnProperResult($a, $b, $expected)
    {
        $actual = PositiveModulus::calc($a, $b);
        $this->assertEquals($expected, $actual);
    }

    /**
     * method calc
     * when calledWithZeroDivisor
     * should throw
     */
    public function test_calc_calledWithZeroDivisor_throw()
    {
        $this->setExpectedException('\InvalidArgumentException');
        PositiveModulus::calc(38,0);
    }

    public function getValues()
    {
        return array(
            array(-1, 7, 6),
            array(-13, 64, 51),
            array(10, 7, 3),
            array(2, 8, 2),
            array(4, -6, 4),
            array(-4, -6, 2),
            array(4, -10, 4),
        );
    }
}