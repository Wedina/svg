<?php
class polygone {

	public $x;
	public $y;
	public $points;
	public $color;

	public function __construct($point) {
		$this->x = 0;
		$this->y = 0;
		$this->points = $points;
		$this->color = 'black';

		
	}

	public function draw() {
		$svg = <<<TXT
	
		<polygon  points="{$this->200,10 250,190 160,210}"   x="{$this->x}" y="{$this->y}" 
  		fill="{$this->color}" />
  		
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