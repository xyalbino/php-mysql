
<?php

$link=mysql_connect('localhost','root','root');
if($link) echo "success<br>";
else echo "faield";

mysql_select_db('bookstore',$link) or die('不能选择bookstore:'.mysql_error());
mysql_query("SET NAMES 'UTF8'"); //设置数据库字符集
$result=mysql_query("select * from book1");
$rows=mysql_num_rows($result);
echo "$rows<br>";
$cols=mysql_num_fields($result);
echo $cols;
echo'<table align="center" width="80%" border="1">';
while($row=mysql_fetch_row($result)){
echo'<tr>';
foreach($row as $data){
	echo '<td>'.$data.'</td>';
}
echo'</tr>';

}
echo '</table>';
?>
