<?php
session_start();
if(!isset($_SESSION['username'])){
	exit("尚未登录，没有权限!");
}
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
  <title>商品列表</title>
  <style>
    #stable { position:absolute;top:150px;left:300px;width:800px; }
    #search { width:150px; }
    a { text-decoration:none; }
    tr th { width:100px;height:70px; }
    tr td { width:100px;height:70px; }
  </style>
  <script type="text/javascript">
	function check(v){
		if(confirm("确定删除吗?")){
			window.location = "http://localhost/book/delete.php?id="+v;
		}else{
			return false;
		}
			
	}
	
	
  </script>
</head>
<body>

<?php

$link=mysql_connect('localhost','root','root');
mysql_select_db('bookstore',$link);
mysql_query("set names utf8",$link);//不要忘记设置

if(isset($_POST['submit'])){
	$keywords = $_POST['search'];
	$sql = "select * from book1 where bookname like '%".$keywords."%'";
	$result = mysql_query($sql);
}else{
	$select ="select * from book1";
	$result=mysql_query($select);
}
?>
  <center>
    <h1>图书管理后台</h1>
    <form action = "admin.php" method="post">
      搜索图书:
      &nbsp;&nbsp;&nbsp;
      <input type="text" name="search" id = "search"/>
      &nbsp;&nbsp;&nbsp;
              <input type="submit" value="搜索" name = "submit">
      &nbsp;&nbsp;&nbsp;
      <a href="http://localhost/book/add.php">添加图书</a>
      <a href="signout.php">退出登陆</a>
    </form>
    <table border="1" cellpadding="0" cellspacing="0" id="stable">
      <tr>
        <th>图书编号</th>
        <th>图书名称</th>
        <th>图书出版商</th>
		<th>作者</th>
        <th>图书价格</th>
        <th>图书库存</th>
        <th>操作</th>
      </tr>
	  <?php while($v = mysql_fetch_assoc($result)){?>
      <tr align="center">
        <td><?php echo $v['id'];?></td>
        <td><?php echo $v['bookname'];?></td>
        <td><?php echo $v['publisher'];?></td>
		<td><?php echo $v['author'];?></td>
        <td><?php echo $v['price'];?></td>
        <td><?php echo $v['total'];?></td>
        <td>
          <a href="http://localhost/book/edit.php?id=<?php echo $v['id']; ?>">修改</a>
          <a href="javascript:;" onclick='check(<?php echo $v['id'];?>)'>删除</a>
        </td>
      </tr>
	  <?php } ?>
      
    </table>
  </center>
</body>
</html>
