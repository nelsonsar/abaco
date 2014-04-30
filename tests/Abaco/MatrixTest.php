<?php

namespace Abaco;

class MatrixTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Matrix lines cannot be empty
     */
    public function testShouldThrowAnExceptionWhenLinesArrayIsEmpty()
    {
        $matrix = new Matrix(array());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Matrix only supports integer elements
     * @dataProvider invalidLineElementsDataProvider
     */
    public function testShouldThrowAnExceptionWhenOneElementFromLineValueIsNotInteger($invalidLine)
    {
        $lines = array(
            $invalidLine
        );

        $matrix = new Matrix($lines);
    }

    public function invalidLineElementsDataProvider()
    {
        return array(
            array(array(1, 2, 'a')),
            array(array(1, '2.35', 0x7))
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Matrix line must be an array
     */
    public function testShouldThrowAnExceptionWhenLineIsNotAnArray()
    {
        $matrix = new Matrix(array(1, 2, 3));
    }
}
