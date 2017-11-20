<html>
   <head><title>网络留言模式</title></head>
   <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
   <body>
     <?php
       $filename="text_data.txt";
       
        if(isset($_POST["sub"])){
        $message=$_POST["username"]."||".$_POST["title"]."||".$_POST["mess"]."<|>";
        writeMessage($filename,$message);
        }
        
        if(file_exisis($filename))
        readMessage($filename);
        
        function writeMessage($filename,$message){
               $fp=fopen($filename,"a");
               if(flock($fp,LOCK_EX)){
               fwrite($fp,$message);
               flock($fp,LOCK_UN);
               }else{
               echo"不能锁定文件！";
               }
               fclose($fp);
               }
               
               fuction readMessage($filename){
               $fp=fopen($filename,"r");
               flock($fp,LOCK_SH);
               $buffer="";
               while(!feof($fp)){
               $buffer.=fread($fp,1024);
               }
               
               $data=expolde("<|>",$buffer);
               foreach($data as $line){
               list($username,$title,$message)=explode("||",$line);
               if($username!=""&&$title!=""&&$message!=""){
               echo $username."说:";
               echo '&nbsp;'.$title.', ';
               echo $message."<hr>";
               }
               }
               flock($fp,LOCK_UN);
               fclose($fp);
               }
               ?>
               
               <form action ="" method="post">
                    用户名: <input type="text" size=10 name="username"><br>
                    标&nbsp;&nbsp;题: <input type="text" size=30 name="title"><br>
                    <textarea name="mess" rows=4 cols=38>请在这里输入留言信息! </textarea>
                    <input type="submit" name="sub" value="留言">
                    </form>
                    </body>
                    </html>      
             
