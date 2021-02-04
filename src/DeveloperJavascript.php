<?php 
namespace DesignPattern\Strategy;

use DesignPattern\Strategy\Developer as Developer;
use DesignPattern\Strategy\Implementations\CodeJavascript as CodeJavascript;
use DesignPattern\Strategy\Implementations\DebugJavascript as DebugJavascript;
use DesignPattern\Strategy\Implementations\TestJavascript as TestJavascript;

class DeveloperJavascript extends Developer{
	
	public function __construct(){
		$this->codeInterface = new CodeJavascript();
		$this->debugInterface = new DebugJavascript();
		$this->testInterface = new TestJavascript();
	}

	// public function debug(){
	// 	echo "Definindo o debugar no DeveloperJavascript";
	// }

	// public function test(){
	// 	echo "Definindo o testar no DeveloperJavascript";
	// }
}

?>