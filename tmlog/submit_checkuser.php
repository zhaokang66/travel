<?php 
include "Conn/conn.php";
$UserName=$_GET[x];
$sql=mysql_query("select * from tb_user where regname = '$UserName'");
$result=mysql_fetch_array($sql);
if ($result!=false){
	echo ("[<font color=red>".$UserName."</font>]�ѱ�ע�ᣡ");
}
else{
	echo ("��ϲ��!�û���[<font color=green>".$UserName."</font>]����ע�ᣡ");
}
?>
