<?php

/**
 * @Author: Jerry Yang
 * @Date:   2018-05-04 14:43:14
 * @Last Modified by:   Jerry Yang
 * @Last Modified time: 2018-05-04 15:16:19
 */

require 'vendor/autoload.php';
use Composer\Test;

echo Composer\Test\Hello::hello();

echo "\r\n"."<br/>";

$Hello = new Composer\Test\Hello("say hello");
echo $Hello->sayHello();