<?php
$link=mysql_connect('localhost','root','root');
        mysql_select_db('bookstore',$link);
        mysql_query("set names utf8",$link);
		$a='wo';
	    $add="insert into book1 values (4315,'".$a."','de','ma',1,null)";
		$result=mysql_query($add,$link);
		?>