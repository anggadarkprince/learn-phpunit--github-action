<?php

namespace Anggadarkprince\LearnTestingGithubAction;

use PHPUnit\Framework\TestCase;

/**
 * Use `./vendor/bin/phpunit --generate-configuration` to generate phpunit.xml configuration.
 *
 * Class CalculatorTest
 */
class CalculatorTest extends TestCase
{
    /**
     * @covers \Anggadarkprince\LearnTestingGithubAction\Calculator
     */
    public function testAddOperation(): void
    {
        $adder = new Calculator("add");
        $value = $adder->evaluate(2, 3);
        $this->assertEquals(5, $value);
    }

    /**
     * @covers \Anggadarkprince\LearnTestingGithubAction\Calculator
     */
    public function testSubtractOperation(): void
    {
        $adder = new Calculator("subtract");
        $value = $adder->evaluate(2, 3);
        $this->assertEquals(-1, $value);
    }

    /**
     * @covers \Anggadarkprince\LearnTestingGithubAction\Calculator
     */
    public function testMultiplyOperation(): void
    {
        $adder = new Calculator("multiply");
        $value = $adder->evaluate(3, 4);
        $this->assertEquals(12, $value);
    }
}