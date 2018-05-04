<?php

/**
 * @Author: Jerry Yang
 * @Date:   2018-05-04 14:38:52
 * @Last Modified by:   Jerry Yang
 * @Last Modified time: 2018-05-04 14:46:32
 */

namespace Composer\Test;

class Hello
{
      private $thing = "eat";
      public function __construct($thing)
      {
      	$this->thing = $thing;
      }	

      public static function hello()
      {
      	echo "231312";
      }
}