<?php         
	include "Conn/conn.php";
    $sql="delete from tb_tpsc where id=".$pic_id;
    $result=mysql_query($sql);
	if($result){
		echo "<script>alert('ͼƬɾ���ɹ�!');location='browse_pic.php';</script>";
	}
	else{	
		echo "<script>alert('ͼƬɾ������ʧ��!');history.go(-1);</script>";
	}
?> 



