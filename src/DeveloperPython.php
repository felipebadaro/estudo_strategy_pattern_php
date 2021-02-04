<?php 
namespace DesignPattern\Strategy;

use DesignPattern\Strategy\Developer as Developer;
use DesignPattern\Strategy\Implementations\CodePython as CodePython;
use DesignPattern\Strategy\Implementations\DebugPython as DebugPython;
use DesignPattern\Strategy\Implementations\TestPython as TestPython;

class DeveloperPython extends Developer{
	
	public function __construct(){
		$this->codeInterface = new CodePython();
		$this->debugInterface = new DebugPython();
		$this->testInterface = new TestPython();
	}
}

?>