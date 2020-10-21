<?php  

namespace DesignPattern\Strategy\Implementations;

use DesignPattern\Strategy\Interfaces\TestInterface as TestInterface;

class TestJavascript implements TestInterface{

	public function test(){
		echo "Dentro da TestJavascript <br>";
		echo "jest <br><br>";
	}
}

?>