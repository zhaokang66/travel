<?php
session_start();
include "Conn/conn.php";
$name=$_POST['txt_user'];
$pwd=$_POST['txt_pwd'];
$sql=mysql_query("select * from tb_user where regname='".$name."' and regpwd='".$pwd."'");
$result=mysql_fetch_array($sql);
if($result!=""){
$_SESSION['fig']=$result['fig'];
$_SESSION['username']=$name;
?>
<script language="javascript">
	alert("��¼�ɹ�");window.location.href="file.php";
</script>
<?php
}else{
?>
<script language="javascript">
	alert("�Բ�����������û��������벻��ȷ������������!");window.location.href="index.php";
</script>
<?php
	}
?>
