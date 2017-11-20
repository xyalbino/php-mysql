<?php
   
   
   function thumb($filename,$width=200,$height=200){
        list($width_orig,$height_orig)=getimagesize($filename);
		
		if($width&&($width_orig<$height_orig)){
		    $width=($height/$height_orig)*$width_orig;
			}
			else{
			$height=($width/$width_orig)*$height_orig;
			}
			
			$image_p=imagecreatetruecolor($width,$height);
			$image=imagecreatefromjpeg($filename);
			
			imagecopyresampled($image_p,$image,0,0,0,0,$width,$height,$width_orig,$height_orig);
			
			imagejpeg($image,$filename,100);//100,最佳质量，文件最大
  
      imagedestroy($image_p);
      imagedestroy($image);
      }
	  
	  thumb("2B.jpg",500,500);
	  
	  ?>