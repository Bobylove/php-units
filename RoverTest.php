<?php


use PHPUnit\Framework\TestCase;


class RoverTest extends TestCase {

	public function testRoverMove(){
		$rover = new Rover();
		$rover->forward();
		$rover->forward();
		$rover->forward();
		$this->assertEquals(
			3,
			$rover->y 
			);
		$rover->backward();
		$rover->backward();
		$rover->backward();
		$this->assertEquals(
			0,
			$rover->y
			);
		$rover->left();
		$rover->left();
		$this->assertEquals(
			"sud",
			$rover->direction
			);
	}

	
}
