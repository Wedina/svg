<?php
include 'classes/Rectangle.php';
include 'classes/Circle.php';
include 'classes/Ellipse.php';
include 'classes/polygon.php';
include 'classes/etoile.php';

$rect = new Rectangle(100, 50);
$rect->setPosition(300, 20);
$rect->setColor('tomato');

$rect3 = new Rectangle(100, 50);
$rect3->setPosition(310, 25);
$rect3->setColor('DARKCYAN');

$rect4 = new Rectangle(100, 50);
$rect4->setPosition(320, 30);
$rect4->setColor('LIGHTSEAGREEN');

$rect5 = new Rectangle(100, 50);
$rect5->setPosition(325, 35);
$rect5->setColor('DARKSEAGREEN');

$rect6 = new Rectangle(200,200);
$rect6->setPosition(425, 70);
$rect6->setColor('LIGHTCYAN');


$rect2 = new Rectangle(60, 90);
$rect2->setPosition(50, 100);
$rect2->setColor('LIGHTSALMON');

$circle = new circle(40);
$circle->setPosition(100, 20);
$circle->setColor('green');
$circle->setOpacity(0.8);

$circle2 = new circle(40);
$circle2->setPosition(160, 40);
$circle2->setColor('LIGHTGREEN');
$circle2->setOpacity(0.8);

$ellipse = new ellipse(40, 70);
$ellipse->setPosition(300, 80);
$ellipse->setColor('yellow');
$ellipse->setOpacity(0.4);

$ellipse2 = new ellipse(40, 70);
$ellipse2->setPosition(250, 80);
$ellipse2->setColor('SADDLEBROWN');
$ellipse2->setOpacity(0.3);

$polygon = new polygon(200,10, 250,190, 160,210);
$polygon->setPosition(250, 80);

$etoile = new etoile(100,10, 40,198, 190,78, 10,78, 160,198);
$etoile->setPosition(250, 80)

?>

<!DOCTYPE html>
<html>
<!-- <head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	<h1>Painter</h1>
	 
	<svg style="border: 1px solid grey" width="800" height="260">
  		<?= $rect->draw() ?>
  		<?= $rect2->draw() ?>
  		<?= $rect3->draw() ?>
  		<?= $rect4->draw() ?>
  		<?= $rect5->draw() ?>
  		<?= $rect6->draw() ?>
		<?= $circle->draw() ?>
		<?= $circle2->draw() ?>
		<?= $ellipse->draw() ?>
		<?= $ellipse2->draw() ?>
		<?= $polygon->draw() ?>
		<?= $etoile->draw() ?>

	</svg> 

</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Document</title>
</head>
<body>
	<header>
		<a href="#">About-me</a> 
		<a href="#">contact</a>
	</header>
	<main>
		<div class="fixe">
			<nav>
				<a href="#">navigation</a>
				<a href="#">navigation</a>
				<a href="#">navigation</a>
				<a href="#">navigation</a>
			</nav>

		</div>
		<div class="clear"></div>
		<footer>
			<a href="#">About me</a> 
			<a href="#">Contact</a>
		</footer>
		
	</main>
</body>
</html>