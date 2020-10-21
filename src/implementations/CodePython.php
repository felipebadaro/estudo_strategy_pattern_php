<?php  

namespace DesignPattern\Strategy\Implementations;

use DesignPattern\Strategy\Interfaces\CodeInterface as CodeInterface;

class CodePython implements CodeInterface{

	public function code(){
		echo "Hello world da CodificaPython <br>";
		echo "print('Bla Bla Bla')<br><br>";
	}
}

?>