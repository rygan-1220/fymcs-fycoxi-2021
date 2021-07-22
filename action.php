<?php

//source-pic
$image = imagecreatefromjpeg("source.jpeg");

//font-color-rgb
$color1 = imagecolorallocate($image, 255, 255, 255);
$color2 = imagecolorallocate($image, 45, 42, 46);

//text-u-want
$text = $_POST['name'];

//font-family
$font = 'C:\wamp64\www\MCS\font\sample3.ttf';


//source_pic, font-size, font-rotate, x-position, y-position, font-color, font-family, text-u-want
imagettftext($image, 100, 0, 285, 1005, $color1, $font, $text);

//output
imagejpeg($image,'./pic/' . $text . '-file.jpeg');

$url = './pic/' . $text . '-file.jpeg';
header('Location:' .$url);

imagedestroy($image);
imagedestroy($url);
?>