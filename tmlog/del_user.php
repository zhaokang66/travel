<?php
	session_start();
	include "Conn/conn.php";
	$f_sql = "select * from tb_user where id = ".$user_id;
	$f_rst = mysql_query($f_sql,$link);
	$rows = mysql_fetch_array($f_rst);
	if($rows[fig] == 1){
		echo "<script>alert('������ɾ������Ա');history.go(-1)</script>";
		exit();
	}
    $sql="delete from tb_user where id=".$user_id;
    $result=mysql_query($sql);
	if($result){
		$sql1 = "delete from tb_friend where username = '".$rows[regname]."'";
		$result1 = mysql_query($sql1);
			if($result1)
				echo "<script>alert('���û��ѱ�ɾ��!');location='browseuser.php';</script>";
			else
				echo "<script>alert('ɾ������ʧ��1');history.go(-1);</script>";
	}
	else{	
		echo "<script>alert('ɾ������ʧ��!');history.go(-1);</script>";
	}	
?> 



