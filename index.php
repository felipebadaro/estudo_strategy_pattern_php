<?php
require __DIR__ . '/vendor/autoload.php';

use DesignPattern\Strategy\DeveloperJavascript as DeveloperJavascript;
use DesignPattern\Strategy\DeveloperPython as DeveloperPython;

$developerJS = new DeveloperJavascript();
$developerJS->executeCode();
$developerJS->executeDebug();
$developerJS->executeTest();

$developerPython = new DeveloperPython();
$developerPython->executeCode();
$developerPython->executeDebug();
$developerPython->executeTest();

?>