<?php
namespace Features\Bootstrap;

use Behat\Behat\Context\Context;
use PHPUnit\Framework\Assert;
use App\FizzBuzz;

class FeatureContext implements Context
{
    private int $number;
    private string $result;

    /** @Given the number is :number */
    public function theNumberIs($number): void
    {
        $this->number = (int)$number;
    }

    /** @When I ask for the fizzbuzz result */
    public function iAskForTheFizzbuzzResult(): void
    {
        $this->result = (new FizzBuzz())->get($this->number);
    }

    /** @Then I should see :expected */
    public function iShouldSee(string $expected): void
    {
        Assert::assertSame($expected, $this->result);
    }
}