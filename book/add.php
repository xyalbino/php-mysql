<?php
session_start();
if(!isset($_SESSION['username'])){
	exit("尚未登录，没有权限!");
}?>
<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
  <title>添加图书</title>
  <style>
    #form_data { position:absolute;left:480px;top:130px;width:400px;height:400px;background:white }
    .content { width:170px;height:20px; }
    #books_item1 { position:absolute;left:50px;top:20px; }
    #books_item2 { position:absolute;left:50px;top:70px; }
    #books_item3 { position:absolute;left:50px;top:120px; }
    #books_item4 { position:absolute;left:50px;top:170px; }
    #books_item5 { position:absolute;left:50px;top:220px;}
	#books_item6 { position:absolute;left:50px;top:270px;}
    #commit_btn { position:absolute;left:150px;top:320px; }
  </style>
</head>
<body>

  <center>
    <h1>图书管理后台</h1>
    <a href="admin.php">返回列表</a>
  </center>
  <div id="form_data">
    <form action="addcheck.php" method="post" enctype="multipart/form-data">
      <div id = "books_item1">图书编号：&nbsp;&nbsp;&nbsp;<input type="text" class="item" name="books_num"></div>
      <div id = "books_item2">图书名称：&nbsp;&nbsp;&nbsp;<input type="text" class="item" name="books_name"></div>
      <div id = "books_item3">书出版商：&nbsp;&nbsp;&nbsp;<input type="text" class="item" name="books_pub"></div>
	  <div id = "books_item4">&nbsp;&nbsp;作&nbsp;&nbsp;者&nbsp;&nbsp;：&nbsp;&nbsp;&nbsp;<input type="text" class="item" name="books_author"></div>
      <div id = "books_item5">图书价格：&nbsp;&nbsp;&nbsp;<input type="text" class="item" name="books_price"></div>
      <div id = "books_item6">图书库存：&nbsp;&nbsp;&nbsp;<input type="text" class="item" name="books_total"></div>
      <div id = "commit_btn"><input type="submit" name="sub" value="添加">&nbsp;&nbsp;&nbsp;<input type="reset" value="重置"></div>
	 
    </form>
    
</body>
</html>
