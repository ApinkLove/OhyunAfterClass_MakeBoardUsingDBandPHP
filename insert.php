<?php
include "db_info.php";

$id = $_GET[id];
$name = $_POST[name];
$email = $_POST[email];
$pw = $_POST[pw];
$title = $_POST[title];
$content = $_POST[content];
 $REMOTE_ADDR = $_SERVER[REMOTE_ADDR];
 
 $query = "INSERT INTO board(id, name, email, pw, title, content, wdate, ip, cnt)
          VALUES ('', '$name', '$email', '$pw', '$title', '$content', now(), '$REMOTE_ADDR', 0)";
 $result=mysql_query($query, $conn) or die(mysql_error());
 
 mysql_close($conn);
 
 echo ("<meta http-equiv='Refresh' content='1; URL=list.php'>");
 ?>
 
 <center>
 	<h1>정상적으로 저장되었습니다.</h1>
 </center>
