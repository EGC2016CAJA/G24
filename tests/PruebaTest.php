<?php

class PruebaTest extends PHPUnit_Framework_TestCase
{
	
	public function testAssert()
	{
		$a = 1;
		$b = 1;
		$this->assertEquals($a, $b);
	}
	
}

?>