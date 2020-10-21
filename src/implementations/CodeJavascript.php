<?php  

namespace DesignPattern\Strategy\Implementations;

use DesignPattern\Strategy\Interfaces\CodeInterface as CodeInterface;

class CodeJavascript implements CodeInterface{

	public function code(){
		echo "Hello world da CodificaJavascript <br>";
		echo "alert('Bla bla bla');<br><br>";
	}
}

?>