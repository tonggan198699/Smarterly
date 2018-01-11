<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FizzBuzz extends Model
{

  public $val;

  public function run($val)
  {
      $fizzbuzz = ($val % 3 == 0 && $val % 5 == 0);
      $fizz = ($val % 3 == 0);
      $buzz = ($val % 5 == 0);

          if ($fizzbuzz) {
              return "fizzbuzz";
          }elseif ($fizz) {
              return "fizz";
          }elseif ($buzz) {
              return "buzz";
          }else {
              return $val;
          }
  }

  public function runList($val)
  {
      $output = [];

      foreach (range(1, $val) as $i)
      {
          $output[] = $this->run($i);
      }

      return $output;
  }
}

$fizzbuzzer = new FizzBuzz();
$fizzbuzzer->runList(100);
