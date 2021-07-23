<?php

//source-pic
$image = imagecreatefromjpeg("source.jpeg");

//font-color-rgb
$color1 = imagecolorallocate($image, 255, 255, 255);
$color2 = imagecolorallocate($image, 45, 42, 46);

//text-u-want
$text = $_GET['name'];

//font-family
$font = getcwd() . '/font/sample3.ttf';


//source_pic, font-size, font-rotate, x-position, y-position, font-color, font-family, text-u-want
imagettftext($image, 100, 0, 285, 1005, $color1, $font, $text);

header('Content-Type: image/jpeg');

//output
echo imagejpeg($image);

imagedestroy($image);
?>