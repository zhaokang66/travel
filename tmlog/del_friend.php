<?php         
	include "Conn/conn.php";
    $sql="delete from tb_friend where id=".$friend_id;
    $result=mysql_query($sql);
	if($result){
		echo "<script>alert('���ĺ����ѱ�ɾ��!');location='browse_fri.php';</script>";
	}
	else{	
		echo "<script>alert('ɾ������ʧ��!');history.go(-1);</script>";
	}	
?> 



