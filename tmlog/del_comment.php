<?php
	session_start();
	include "Conn/conn.php";
	$comment_id=$_GET['comment_id'];
    $sql="delete from tb_filecomment where id=".$comment_id;
    $result=mysql_query($sql);
	if($result){
		echo "<script>alert('ɾ���ɹ�!');location='$_SERVER[HTTP_REFERER]';</script>";
	}
	else{
		echo "<script>alert('ɾ������ʧ��!');history.go(-1);</script>";
	}
?>
