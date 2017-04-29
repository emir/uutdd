<?php
declare(strict_types=1);

use App\Calculator;
use PHPUnit\Framework\TestCase;

/**
 * @covers Calculator
 */
class CalculatorTest extends TestCase
{
    /**
     * @var Calculator
     */
    protected $calculator;

    protected function setUp()
    {
        $this->calculator = new Calculator();
    }

    /**
     * @test
     */
    public function it_translates_an_empty_string_into_zero()
    {
        $this->assertEquals(0, $this->calculator->add(''));
    }

    /**
     * @test
     */
    public function it_finds_the_sum_of_one_number()
    {
        $this->assertEquals(5, $this->calculator->add('5'));
    }

    /**
     * @test
     */
    public function it_finds_the_sum_of_two_numbers()
    {
        $this->assertEquals(3, $this->calculator->add('1,2'));
    }

    /**
     * @test
     */
    public function it_finds_the_sum_of_any_amount_of_numbers()
    {
        $this->assertEquals(15, $this->calculator->add('1,2,3,4,5'));
    }

    /**
     * @test
     */
    public function it_disallows_negative_numbers()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid number');

        $this->calculator->add('3,-2');
    }

    /**
     * @test
     */
    public function it_ignores_any_number_that_is_one_thousand_or_greater()
    {
        $this->assertEquals(5, $this->calculator->add('3,2,1000'));
    }

    /**
     * @test
     */
    public function divide_always_return_zero()
    {
        $this->assertEquals(0, $this->calculator->divide('1,2'));
    }
}