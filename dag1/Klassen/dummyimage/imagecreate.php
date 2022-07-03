<?php
header("Content-Type: image/png");
$im = @imagecreate(500, 500)
    or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im, 33, 33, 33);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 10, 50, 50,  "TEXT", $text_color);
imagepng($im);
imagedestroy($im);
?>