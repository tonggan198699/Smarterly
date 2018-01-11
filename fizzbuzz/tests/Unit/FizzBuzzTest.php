<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\FizzBuzz;
// use Illuminate\Foundation\Testing\RefreshDatabase;

class FizzBuzzTest extends TestCase
{
  /** @test */
  public function it_will_return_one_if_the_input_is_one()
  {
      $fizzbuzzer = new FizzBuzz();

      $this->assertEquals(1, $fizzbuzzer->run(1));
  }

  /** @test */
  public function it_will_return_fizz_if_the_input_is_divisible_by_3()
  {
      $fizzbuzzer = new FizzBuzz();

      $this->assertEquals("fizz", $fizzbuzzer->run(3));
      $this->assertEquals("fizz", $fizzbuzzer->run(9));
  }

  /** @test */
  public function it_will_return_buzz_if_the_input_is_divisible_by_5()
  {
      $fizzbuzzer = new FizzBuzz();

      $this->assertEquals("buzz", $fizzbuzzer->run(5));
      $this->assertEquals("buzz", $fizzbuzzer->run(10));
  }

  /** @test */
  public function it_will_return_fizzbuzz_if_the_input_is_divisible_by_3_and_5()
  {
      $fizzbuzzer = new FizzBuzz();

      $this->assertEquals("fizzbuzz", $fizzbuzzer->run(15));
      $this->assertEquals("fizzbuzz", $fizzbuzzer->run(30));
  }

  /** @test */
  public function it_will_return_a_list_of_arrays_from_1_to_15()
  {
      $fizzbuzzer = new FizzBuzz();

      $this->assertEquals([1,2,"fizz",4,"buzz","fizz",7,8,"fizz","buzz",11,"fizz",13,14,"fizzbuzz"], $fizzbuzzer->runList(15));
  }


}
