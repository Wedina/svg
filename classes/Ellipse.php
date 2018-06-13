<?php

class ellipse{

	public $x = 0;
	public $y = 0;



	public $color;

	public $ry;
	public $rx;



	public $opacity;

	public function __construct($rx, $ry) {
		
		$this->color = 'black';
		$this->ry = $ry;
		$this->rx = $rx;
		$this->opacity = 0.5;

	}

	public function draw() {
		$svg = <<<TXT
	
		<ellipse cx="{$this->x}" cy="{$this->y}" fill="{$this->color}" ry="{$this->ry}" rx="{$this->rx}"  opacity="{$this->opacity}"/>
		 
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


	function setOpacity($opacity) {
		$this->opacity = $opacity;
	}

	

}