<?php

use PHPUnit\Framework\TestCase;

class IdValidatorTest extends Testcase
{
    public function testValid_GivenOneReturnTrue()
    {
        // Arrange
        // Act
        $actual = FarmAPI\Validators\IdValidator::valid(1);
        // Assert
        $this->assertEquals(true, $actual);
    }
}