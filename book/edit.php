<?php
session_start();
if(!isset($_SESSION['username'])){
	exit("尚未登录，没有权限!");
}?>
<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
  <title>编辑商品</title>
  <style>
    #form_data { position:absolute;left:480px;top:130px;width:400px;height:400px;background:white }
    .content { width:170px;height:20px; }
    #goods_item1 { position:absolute;left:50px;top:20px; }
    #goods_item2 { position:absolute;left:50px;top:70px; }
    #goods_item3 { position:absolute;left:50px;top:120px; }
    #goods_item4 { position:absolute;left:50px;top:170px; }
    #goods_item5 { position:absolute;left:50px;top:220px; }
    #goods_item6 { position:absolute;left:50px;top:270px; }
    #commit_btn { position:absolute;left:150px;top:330px; }
  </style>
</head>
<body>
	<?php
		$id = $_GET['id'];
		$link = mysql_connect('localhost','root','root');
		mysql_query("use bookstore");
		mysql_query('set names utf8',$link);
		$sql = "select * from book1 where id=".$id; 
		
		$result = mysql_query($sql);
		
		$row = mysql_fetch_assoc($result);
		
	
	?>


  <center>
    <h1>商品管理后台</h1>
    <a href="admin.php">返回列表</a>
  </center>
  <div id="form_data">
    <form action="http://localhost/book/editcheck.php?id=<?php echo $row['id']; ?>" method="post" >
      <div id = "goods_item1">图书编号：&nbsp;&nbsp;&nbsp;<input type="text" class="content" name="books_num" value="<?php echo $row['id']; ?>"></div>
      <div id = "goods_item2">图书名称：&nbsp;&nbsp;&nbsp;<input type="text" class="content" name="books_name" value="<?php echo $row['bookname']; ?>"></div>
      <div id = "goods_item3">书出版商：&nbsp;&nbsp;&nbsp;<input type="text" class="content" name="books_publisher" value="<?php echo $row['publisher']; ?>"></div>
      <div id = "goods_item4">作者：&nbsp;&nbsp;&nbsp;<input type="text" class="content" name="books_author" value="<?php echo $row['author']; ?>"></div>
      <div id = "goods_item5">图书价格：&nbsp;&nbsp;&nbsp;<input type="text" class="content" name="books_price" value="<?php echo $row['price']; ?>"></div>
      <div id = "goods_item6">图书库存：&nbsp;&nbsp;&nbsp;<input type="text" class="content" name="books_total" value="<?php echo $row['total']; ?>"></div>
      <div id = "commit_btn"><input type="submit" name='sub' value="编辑">&nbsp;&nbsp;&nbsp;<input type="reset" value="重置"></div>
    </form>
  </div>
</body>
</html>
