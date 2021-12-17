<?php

// include 'configDB.php';

//source-pic
$image = imagecreatefromjpeg("dir/image.jpg");

//font-color-rgb
$color1 = imagecolorallocate($image, 0, 0, 0);
$color2 = imagecolorallocate($image, 128, 128, 128);

//text-u-want

function validation($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$text = validation($_GET['name']);

// 1 word name
if (strlen($text) == 3) {
    $fontSize = 120;
    $xPosition = 1682;
    $yPosition = 142;

    $shadowX = 1680;
    $shadowY = 140;
}

// 2 word name
elseif (strlen($text) == 6) {
    $fontSize = 110;
    $xPosition = 1622;
    $yPosition = 142;

    $shadowX = 1620;
    $shadowY = 140;
}

// 3 word name
elseif (strlen($text) == 9) {
    $fontSize = 100;
    $xPosition = 1572;
    $yPosition = 132;

    $shadowX = 1570;
    $shadowY = 130;
}

// 4 word name
elseif (strlen($text) == 12) {
    $fontSize = 80;
    $xPosition = 1562;
    $yPosition = 132;

    $shadowX = 1560;
    $shadowY = 130;
}

else{
    $fontSize = 100;
    $xPosition = 1572;
    $yPosition = 132;

    $shadowX = 1570;
    $shadowY = 130;
}


$codeAfter = $_GET['code'];

$show = "NO. {$codeAfter}";

// $codeBefore += 1;


//font-family
$font1 = getcwd() . '/font/newfont.ttf';
$font2 = getcwd() . '/font/chinese.stxinwei.ttf';


// english name waiting for doneeeeeee


//source_pic, font-size, font-rotate, x-position, y-position, font-color, font-family, text-u-want
imagettftext($image, $fontSize, 0, $xPosition, $yPosition, $color2, $font1, $text);
imagettftext($image, $fontSize, 0, $shadowX, $shadowY, $color1, $font1, $text);

imagettftext($image, 50, 0, 1637, 622, $color2, $font2, $show);
imagettftext($image, 50, 0, 1635, 620, $color1, $font2, $show);



header('Content-Type: image/jpeg');

//output
echo imagejpeg($image);

imagedestroy($image);
