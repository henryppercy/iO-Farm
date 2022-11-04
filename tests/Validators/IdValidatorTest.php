<?php

namespace FarmAPI\Validators;
use PHPUnit\Framework\TestCase;

class IdValidatorTest extends Testcase
{
    public function testValid_GivenOneReturnTrue()
    {
        // Arrange
        // Act
        $actual = IdValidator::valid(1);
        // Assert
        $this->assertEquals(true, $actual);
    }

    public function testValid_GivenNegativeOneReturnFalse()
    {
        // Arrange
        // Act
        $actual = IdValidator::valid(-1);
        // Assert
        $this->assertEquals(false, $actual);
    }
}