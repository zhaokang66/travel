<?php
	session_start();
	include "conn/conn.php";
	if($_SESSION[fig] == 1){
		$dsql = "delete from tb_public where id = ".$_GET[id];
		$drst = mysql_query($dsql,$link);
		if($drst){
			echo "<script>alert('ɾ���ɹ�');location='managepub.php';</script>";
			exit();
		}else{
			echo "<script>alert('ɾ��ʧ��');history.go(-1);</script>";
			exit();
		}
	}else{
		echo "<script>alert('�Ƿ�����');window.close();</script>";
		exit();
	}
?>