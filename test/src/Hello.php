<?php

/**
 * @Author: Jerry Yang
 * @Date:   2018-05-03 15:35:43
 * @Last Modified by:   Jerry Yang
 * @Last Modified time: 2018-05-03 15:37:39
 */

namespace test;
class Hello 
{
      private $name = "name";

      public function __consttruct($name = "Word")
      {
      	$this->name = $name;
      }

      public function getName()
      {
      	return $this->name;
      }
}