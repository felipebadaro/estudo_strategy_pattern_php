<?php  

namespace DesignPattern\Strategy\Implementations;

use DesignPattern\Strategy\Interfaces\TestInterface as TestInterface;

class TestPython implements TestInterface{

	public function test(){
		echo "Dentro da TestPython <br>";
		echo "unittest <br><br>";
	}
}

?>