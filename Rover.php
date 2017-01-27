<?php


class Rover {
	public $x=0;
	public $y=0;
	public $direction = "nord";
	
	public function __construct($x,$y,$dir){
		// $this->getPosition($x,$y);
		$this->x = $x;
		$this->y = $y;
		$this->direction = $dir;
	}
	// public function getPosition(){
	// 	return  [$this->x,$this->y];
	// }

	public function forward($moveUp){
		if ($this->direction === "nord" ) {
			return $this->y -=$moveUp;
		}
		if ($this->direction === "sud") {
			return $this->y +=$moveUp;
		}
		if ($this->direction === "est") {
			return $this->x +=$moveUp;
		}
		if ($this->direction === "ouest") {
			return $this->x -=$moveUp;
		}

	}
	
	public function backward($moveBack){
		if ($this->direction === "nord" ) {
			return $this->y  -=$moveBack;
		}
		if ($this->direction ===  "sud") {
			return $this->y +=$moveBack;
		}
		if ($this->direction === "est") {
			return $this->x +=$moveBack;
		}
		if ($this->direction === "ouest") {
			return $this->x -=$moveBack;
		}
	}


	public function left(){
		if ($this->direction == "nord") {
			return $this->direction = "est";
		}
		if ($this->direction == "ouest") {
			return $this->direction = "nord";
		}
		if ($this->direction == "sud") {
			return $this->direction = "ouest";
		}
		if ($this->direction == "est") {
			return $this->direction = "sud";
		}
	}

	public function right(){
		if ($this->direction == "ouest") {
			return $this->direction = "nord";
		}
		if ($this->direction == 'nord') {
			return $this->direction = "est";
		}
		if ($this->direction == 'est') {
			return $this->direction = "sud";
		}
		if ($this->direction == 'sud') {
			return $this->direction = "ouest";
		}
	}

}


