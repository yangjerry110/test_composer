<?php

/**
 * @Author: Jerry Yang
 * @Date:   2018-05-03 15:47:22
 * @Last Modified by:   Jerry Yang
 * @Last Modified time: 2018-05-03 15:48:48
 */

require_once "vendor/autoload.php";

$test = new test\Hello();
echo $test->getName();

echo "结束";
