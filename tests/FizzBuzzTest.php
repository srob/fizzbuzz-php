<?php

use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

require_once __DIR__ . '/../src/FizzBuzz.php';

class FizzBuzzTest extends TestCase
{
    public function testNormalNumbers()
    {
        $fb = new FizzBuzz();
        $this->assertEquals('1', $fb->get(1));
        $this->assertEquals('2', $fb->get(2));
    }

    public function testFizz()
    {
        $fb = new FizzBuzz();
        $this->assertEquals('Fizz', $fb->get(3));
    }

    public function testBuzz()
    {
        $fb = new FizzBuzz();
        $this->assertEquals('Buzz', $fb->get(5));
    }

    public function testFizzBuzz()
    {
        $fb = new FizzBuzz();
        $this->assertEquals('FizzBuzz', $fb->get(15));
    }
}
