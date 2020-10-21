<?php  

namespace DesignPattern\Strategy\Implementations;

use DesignPattern\Strategy\Interfaces\DebugInterface as DebugInterface;

class DebugPython implements DebugInterface{

	public function debug(){
		echo "Dentro da DebugaPython <br>";
		echo "print('Bla bla bla');<br><br>";
	}
}

?>