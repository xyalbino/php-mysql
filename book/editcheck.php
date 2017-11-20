<?php
      if(isset($_POST["sub"])){
		$id = $_GET['id'];
		$link=mysql_connect('localhost','root','root');
        mysql_select_db('bookstore',$link);
        mysql_query("set names utf8",$link);
        
		$books_num=$_POST["books_num"]; 
		$books_name=$_POST["books_name"];  
		$books_pub=$_POST["books_publisher"];
		$books_author=$_POST["books_author"];
		$books_price=$_POST["books_price"];
        $books_total=$_POST["books_total"];
		
		$edit="update book1 set id='".$books_num."',bookname='".$books_name."',publisher='".$books_pub."',author='".$books_author."',price=".$books_price.",total=".$books_total." where id=".$id;
		//echo $edit;
			
		
		$result=mysql_query($edit,$link);
		$num = mysql_affected_rows($link);
		 
		
		if($num) echo "edit success";
        else echo "edit failed";
	
	}
	
  ?>