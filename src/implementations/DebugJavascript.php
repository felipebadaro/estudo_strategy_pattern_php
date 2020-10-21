<?php  

namespace DesignPattern\Strategy\Implementations;

use DesignPattern\Strategy\Interfaces\DebugInterface as DebugInterface;

class DebugJavascript implements DebugInterface{

	public function debug(){
		echo "Dentro da DebugaJavascript <br>";
		echo "console.log('Bla bla bla');<br><br>";
	}
}

?>