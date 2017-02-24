<?php
$conn = @ mysql_connect("127.0.0.1", "root", "root") or die("连接数据库失败!".mysql_error());
mysql_select_db("travel", $conn);
//mysql_set_charset(gbk);//定义编码
?>
