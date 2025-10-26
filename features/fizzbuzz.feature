Feature: FizzBuzz
  To avoid silly mistakes
  As a developer
  I want the system to return Fizz/Buzz/FizzBuzz for multiples

  Scenario Outline: Returning correct FizzBuzz value
    Given the number is <number>
    When I ask for the fizzbuzz result
    Then I should see "<result>"

    Examples:
      | number | result   |
      | 1      | 1        |
      | 3      | Fizz     |
      | 5      | Buzz     |
      | 15     | FizzBuzz |
