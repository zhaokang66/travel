<?php
 error_reporting(E_ALL || ~E_NOTICE);
session_start();
include "Conn/conn.php";
if(btn_tj!=""){
$title=$_POST[txt_title];
$author=$_SESSION[username];
$content=$_POST[file];
$now=date("Y-m-d H:i:s");
$sql="Insert Into tb_article (title,content,author,now) Values ('$title','$content','$author','$now')";
$result=mysql_query($sql);
if($result){
	echo "<script>alert('��ϲ����������·���ɹ�!!!');window.location.href='file.php';</script>";
}
else{
	echo "<script>alert('�Բ�����Ӳ���ʧ��!!!');window.location.href='file.php';</script>";
}
}
?>
