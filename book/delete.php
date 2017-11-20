<?php 
$id = $_GET['id'];
$delete="delete from book1 where id=".$id;

$link=mysql_connect('localhost','root','root');
mysql_select_db('bookstore',$link);
mysql_query("set names utf8",$link);
$result=mysql_query($delete,$link);
$num = mysql_affected_rows($link);
if($num) echo "delete success";
else echo "delete failed";
?>