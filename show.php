<?php
$num=0;
$dirname='D:/WWW';
$dir_handle=opendir($dirname);

echo '<table border="0" align="center" width="600" cellspacing="0" cellpadding="0">';
echo '<caption><h2>目录'.$dirname.'下面的内容</h2></caption>';
echo '<tr align="left" bgcolor="#cccccc">';
echo '<th>文件名</th><th>文件大小</th><th>文件类型</th><th>修改时间</th></tr>';
echo date("Y-m-d H:i:s",time());
while($file=readdir($dir_handle)){
     
     $dirFile=$dirname."/".$file;
     
     $bgcolor= $num++%2==0?'#FFFFFF':'#CCCCCC';
     echo '<tr bgcolor='.$bgcolor.'>';
     echo '<td>'.$file.'</td>';
     echo '<td>'.filesize($dirFile).'</td>';
     echo '<td>'.filetype($dirFile).'</td>';
     echo '<td>'.date("Y/m/d",filectime($dirFile)).'</td>';
     echo '</tr>';
     }
     echo '</table>';
     closedir($dir_handle);
     
     echo '在<b>'.$dirname.'</b>目录下的子目录和文件共有<b>'.$num.'</b>个';
	 ?>
     