<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
   $link =mysql_connect('localhost','root','root');
   if(!$link){
	   die('连接失败：'.mysql_error());
   }
   
   echo"连接成功：<br>";
?>