<?php

namespace App\Mixine;


class StrMixine
{
      public function prefix()
      {
            return function ($prefix, $part) {
                  return $prefix . '-' . $part;
            };
      }
      public function sumOfTwoNumbes()
      {
            return function ($num1, $num2) {
                  return $num1 + $num2;
            };
      }
}
