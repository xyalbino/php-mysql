<?php
      if(isset($_POST["sub"])){
		$link=mysql_connect('localhost','root','root');
        mysql_select_db('bookstore',$link);
        mysql_query("set names utf8",$link);
        
		$books_num=$_POST["books_num"]; 
		$books_name=$_POST["books_name"];  
		$books_pub=$_POST["books_pub"];
		$books_author=$_POST["books_author"];
		$books_price=$_POST["books_price"];
        $books_total=$_POST["books_total"];
		
		$add="insert into book1 values (".$books_num.",'".$books_name."','".$books_pub."','".$books_author."',".$books_price.",".$books_total.")";
		
		//echo $add;
		//$add="insert into book1 values ('80','cao','de','ma',1,null)";
		$result=mysql_query($add,$link);
		$num = mysql_affected_rows($link);
		 
		
		if($num) echo "add success";
        else echo "add failed";
	
	}
	
  ?>