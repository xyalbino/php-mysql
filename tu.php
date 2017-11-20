<?php
error_reporting(0);
$img = '/2B.jpg';
list($width,$height,$type,$attr)=getimagesize("/2B.jpg");
echo '<img src="/.jpg" '.$attr.'>';
//echo '<img src="'.$img.'" alt="ͼƬ" />';
?>