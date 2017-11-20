<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
  <title>登陆后台</title>
  <style>
    #main {
	position: absolute;
	top: 89px;
	left: 393px;
	width: 500px;
	height: 250px;
	background: #ccc
}
    #photo { position:absolute; top:60px; left:50px; background:#ccc }
    #content { position:absolute; top:50px; left:200px; float:left; }
    #img { position:absolute; width:100px; height:100px; }
    .item { width:150px; }
  </style>
</head>
<body>
  <?php
	session_start();
	if(!isset($_SESSION['username'])){
      if(isset($_POST["sub"])){
        $username=$_POST["username"];
        $password=$_POST["password"];  
		if($username =="admin" && $password == "admin"){
			$_SESSION['username']=$username;
        	echo "<script type='text/javascript'>window.location='http://localhost/book/admin.php'</script>";
		}else{
			echo "failed!!";
		}
	  }
	}else{
		echo "<script type='text/javascript'>window.location='http://localhost/book/admin.php'</script>";
	}
	
  ?>
  <div id = "main">
    <div id = "photo">
      <img src="rox.png" alt="头像" id = "img">
    </div>
    <div id = "content">
      <center>
        <form action="sigin.php" method="post">
          用户名：&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username" class="item"><br/><br/>
          密 &nbsp; 码：&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" class="item"><br/><br/>
          <input type="submit" name="sub" value="登陆">
        </form>
      </center>
    </div>
  </div>
  

  
</body>
</html>
