<?php
   function watermark($filename,$water){
	   list($b_w,$b_h)=getimagesize($filename);
	   list($w_w,$w_h)=getimagesize($water);
	   $posX=rand(0,($b_w-$w_w));
	   $posY=rand(0,($b_h-$w_h));
	   $back=imagecreatefromjpeg($filename);
	   $water=imagecreatefrompng($water);
	   imagecopy($back,$water,$posX,$posY,0,0,$w_w,$w_h);
	   imagejpeg($back,$filename);
	   imagedestroy($back);
	   imagedestroy($water);
   }
   
   watermark("2B.jpg","100.png");
   
   ?>
   