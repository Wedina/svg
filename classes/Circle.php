<?php

class circle {

	public $x = 0;
	public $y = 0;

	public $color;

	public $r;

	public $opacity;

	public function __construct($r) {
		
		$this->color = 'black';
		$this->r = $r;
		$this->opacity = 0.5;

	}

	public function draw() {
		$svg = <<<TXT
	
		<circle cx="{$this->x}" cy="{$this->y}" fill="{$this->color}" r="{$this->r}" opacity="{$this->opacity}"/>
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