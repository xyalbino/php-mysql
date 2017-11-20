<?php
// 创键空白图像并添加一些文本
$im  =  imagecreatefrompng ("tuya.png");
$string="hello again";
$textcolor=imagecolorallocate($im,0,0,0);

// 设置内容类型标头 —— 这个例子里是 image/jpeg
header ( 'Content-Type: image/png' );
imagestring($im,5,0,0,$string,$textcolor);
// 输出图像
imagepng ( $im);

// 释放内存
imagedestroy ( $im );
?> 

	 