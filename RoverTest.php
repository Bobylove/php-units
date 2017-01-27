<?php


use PHPUnit\Framework\TestCase;


class RoverTest extends TestCase {

	public function testRoverMove(){
		$rover = new Rover(0,0,"nord");
		$rover->right();
		$this->assertEquals(
			"est",
			$rover->direction 
			);

		$rover->forward(5);
		$this->assertEquals(
			5,
			$rover->x 
			);

		$rover->right();
		$this->assertEquals(
			"sud",
			$rover->direction
			);

		$rover->forward(7);
		$this->assertEquals(
			7,
			$rover->y
			);

		$rover->left();
		$this->assertEquals(
			"ouest",
			$rover->direction
			);

		$rover->backward(4);
		$this->assertEquals(
			1,
			$rover->x
			);

		$rover->left();
		$this->assertEquals(
			'nord',
			$rover->direction
			);

		$rover->forward(3);
		$this->assertEquals(
			4,
			$rover->y
			);
	}

	public function testNewRoverMove(){
		$rover = New Rover(3,4,"sud");
		$rover->forward(3);
		$this->assertEquals(
			7,
			$rover->y
			);

	}



		// $rover->backward();
		// $rover->backward();
		// $rover->backward();
		// $this->assertEquals(
		// 	0,
		// 	$rover->y
		// 	);
		// $rover->left();
		// $rover->left();
		// $this->assertEquals(
		// 	"sud",
		// 	$rover->direction
		// 	);
		// $rover->right();
		// $this->assertEquals(
		// 	"ouest",
		// 	$rover->direction
		// 	);

		// $rover->forward();
		// $this->assertEquals(
		// 	1,
		// 	$rover->x
		// 	);
		// $rover->left();
		// $this->assertEquals(
		// 	"nord",
		// 	$rover->direction
		// 	);
		// $rover->forward();
		// $this->assertEquals(
		// 	1,
		// 	$rover->y
		// 	);
		// $rover->right();
		// $this->assertEquals(
		// 	"est",
		// 	$rover->direction
		// 	);
		// $rover->forward();
		// $rover->forward();
		// $rover->forward();
		// $rover->forward();
		// $this->assertEquals(
		// 	5,
		// 	$rover->x
		// 	);
		// $rover->getPosition();
		// $this->assertEquals(
		// 	0,
		// 	$rover->y
		// 	);
		// $this->assertEquals(
		// 	1,
		// 	$rover->x
		// 	);


}
