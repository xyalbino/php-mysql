<?php
$im=imagecreate(150,150);
$bg=imagecolorallocate($im,255,255,255);
$string="abcdefg";
$black=imagecolorallocate($im,0,0,0);
imagestringup($im,3,28,70,$string,$black);
header('Content-type:image/png');
imagepng($im);
imagedestroy($im);
?>