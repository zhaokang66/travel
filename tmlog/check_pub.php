<?php
session_start();
include "Conn/conn.php";
if($_SESSION['fig'] == 1){
$title=$_POST['txt_title'];
$content=$_POST['file'];
$now=date("Y-m-d");
$sql="Insert Into tb_public (title,content,pub_time) Values ('$title','$content','$now')";
$result=mysql_query($sql);
if($result){
	echo "<script>alert('��ϲ������Ĺ��淢��ɹ�!!!');window.location.href='managepub.php';</script>";
	exit();
}
else{
	echo "<script>alert('�Բ�����Ӳ���ʧ��!!!');history.go(-1);</script>";
}
}
?>
