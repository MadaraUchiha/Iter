<?php
/**
 * @author Dor Tchizik <dor@tchizik.com>
 */

require "autoloader.php";

$loader = new Autoloader("/home/madara/www/Reti/src", "Reti");
$loader->register();

new \Reti\Core\Route("test", "test", function(){});