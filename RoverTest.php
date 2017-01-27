<?php


use PHPUnit\Framework\TestCase;


class RoverTest extends TestCase {


	public function testTurnLeft(){
		$rover = new Rover(0,0,"nord");
		$rover->left();
		$this->assertEquals(
			"ouest",
			$rover->direction
			);
		$rover->left();
		$this->assertEquals(
			"sud",
			$rover->direction
			);
		$rover->left();
		$this->assertEquals(
			"est",
			$rover->direction
			);
		$rover->left();
		$this->assertEquals(
			"nord",
			$rover->direction
			);
	}

	public function testTurnRight(){
		$rover = new Rover(0,0,"nord");
		$rover->right();
		$this->assertEquals(
			"est",
			$rover->direction
			);
		$rover->right();
		$this->assertEquals(
			"sud",
			$rover->direction
			);
		$rover->right();
		$this->assertEquals(
			"ouest",
			$rover->direction
			);
		$rover->right();
		$this->assertEquals(
			"nord",
			$rover->direction
			);
	}

	public function testForward(){
		$rover = new Rover(0,0,"sud");
		$rover->forward();
		$rover->forward();
		$this->assertEquals(
			2,
			$rover->y
			);

	}

	public function testBackward(){
		$rover = new Rover(0,0,"sud");
		$rover->backward();
		$rover->backward();
		$this->assertEquals(
			-2,
			$rover->y
			);

	}


	public function testNewRoverMove(){
		$rover = New Rover(3,4,"sud");

		$rover->forward();
		$this->assertEquals(
			5,
			$rover->y
			);

		$rover->left();
		$this->assertEquals(
			"est",
			$rover->direction
			);

		$rover->backward();
		$this->assertEquals(
			2,
			$rover->x
			);

		$rover->left();
		$this->assertEquals(
			"nord",
			$rover->direction
			);

		$rover->forward();
		$this->assertEquals(
			4,
			$rover->y
			);

		$rover->right();
		$rover->right();
		$this->assertEquals(
			"sud",
			$rover->direction
			);

		$rover->forward();
		$this->assertEquals(
			5,
			$rover->y
			);

		$rover->forward();
		$this->assertEquals(
			6,
			$rover->y
			);
		$rover->left();
		$this->assertEquals(
			"est",
			$rover->direction
			);
		$rover->backward();
		$this->assertEquals(
			1,
			$rover->x
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
