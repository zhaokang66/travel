<?php
error_reporting(E_ALL || ~E_NOTICE);
session_start();
include "Conn/conn.php";
if(!isset($_SESSION[username])){
	$user = "����";
}else{
	$user = $_SESSION[username];
}
if($_POST["submit"]=="�ύ"){
	$content=$_POST[txt_content];
	$datetime=date("Y-m-d H:i:s");
	$INS="Insert Into tb_filecomment (fileid,username,content,datetime) Values ($_POST[htxt_fileid],'$user','$content','$datetime')";
	$info=mysql_query($INS);
	if($info){
		echo "<script> alert('�ɹ��������ۣ�');</script>";
		echo "<script> window.location.href='$_SERVER[HTTP_REFERER]';</script>";
	}
	else{
		echo "<script> alert('���۷������ʧ�ܣ�');</script>";
		echo "<script> history.go(-1);</script>";
	}
}
?>
