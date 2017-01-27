<?php


class Rover {

	public $x=0;
	public $y=0;
	public $direction;
	
	public function __construct($x,$y,$dir){
		
		$this->x = $x;
		$this->y = $y;
		$this->direction = $dir;
	}
	

	public function forward(){

		if ($this->direction === "nord" ) {
			return $this->y -= 1;
		}
		if ($this->direction === "sud") {
			return $this->y += 1;
		}
		if ($this->direction === "est") {
			return $this->x += 1;
		}
		if ($this->direction === "ouest") {
			return $this->x -= 1;
		}

	}
	
	public function backward(){

		if ($this->direction === "nord" ) {
			return $this->y  +=1;
		}
		if ($this->direction ===  "sud") {
			return $this->y -=1;
		}
		if ($this->direction === "est") {
			return $this->x -=1;
		}
		if ($this->direction === "ouest") {
			return $this->x +=1;
		}
	}


	public function left(){

		if ($this->direction === "nord") {
			return $this->direction = "ouest";
		}
		if ($this->direction === "ouest") {
			return $this->direction = "sud";
		}
		if ($this->direction === "sud") {
			return $this->direction = "est";
		}
		if ($this->direction === "est") {
			return $this->direction = "nord";
		}
	}

	public function right(){

		if ($this->direction === "ouest") {
			return $this->direction = "nord";
		}
		if ($this->direction === 'nord') {
			return $this->direction = "est";
		}
		if ($this->direction === 'est') {
			return $this->direction = "sud";
		}
		if ($this->direction === 'sud') {
			return $this->direction = "ouest";
		}
	}

}


