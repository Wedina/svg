<?php
class polygon {

	public $x;
	public $y;
	public $s1;
	public $s2;
	public $s3;
	public $s4;
	public $s5;
	public $s6;
	public $points;
	public $color;

	public function __construct($s1,$s2, $s3,$s4, $s5,$s6) {
		$this->x = 0;
		$this->y = 0;
	    $this->points="$s1,$s2 $s3,$s4 $s5,$s6";
		$this->color = 'black';

		
	}

	public function draw() {
		$svg = <<<TXT
	
		<polygon  points="{$this->points}"  x="{$this->x}" y="{$this->y}" fill="{$this->color}" />
  		
TXT;

		return $svg;
	}

	function setPosition($x, $y) {
		$this->x = $x;
		$this->y = $y;
	}

	function setColor($color) {
		$this->color = $color;
	}

}