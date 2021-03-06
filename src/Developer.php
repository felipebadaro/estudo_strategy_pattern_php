<?php  
namespace DesignPattern\Strategy;

use DesignPattern\Strategy\Interfaces\CodeInterface as CodeInterface;
use DesignPattern\Strategy\Interfaces\DebugInterface as DebugInterface;
use DesignPattern\Strategy\Interfaces\TestInterface as TestInterface;

abstract class Developer{
	protected $codeInterface;
	protected $debugInterface;
	protected $testInterface;

	public function executeCode(){
		$this->codeInterface->code();
	}

	public function executeDebug(){
		$this->debugInterface->debug();
	}

	public function executeTest(){
		$this->testInterface->test();
	}
}

?>