<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>����ͼ����֤��</title>
<style type="text/css">
<!--
.style1{
	color: #FF9900;
	font-family: "����С���μ���";
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>
<script language="javascript">
	function check(form){
		if(form.txt_yan.value==""){
			alert("��������֤��");form.txt_yan.focus();return false;
		}
		if(form.txt_yan.value!=form.txt_hyan.value){
			alert("�Բ������������֤�벻��ȷ!");form.txt_yan.focus();return false;
		}
	}
</script>
<body> 
<form name="form" method="post" action=""> 
  <table width="447" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#009A31" bgcolor="#99FF33"> 
    <tr> 
      <td width="447" height="53" align="center"><span class="style1">����ͼ����֤��</span>
        <hr width="80%"> 
        <span class="style1"> </span> ��֤�룺 
        <input type="text" name="txt_yan"> 
        <?php
		   $num=intval(mt_rand(1000,9999));
		   for($i=0;$i<4;$i++)
		   {
			echo "<img src=images/checkcode/".substr(strval($num),$i,1).".gif>";   //������������ͼ��
		   }
		?> 
        <input type="hidden" name="txt_hyan" id="txt_hyan" value="<?php echo $num;?>"> 
        <br> 
        <br> 
        <input type="submit" name="Submit" value="��֤" onClick="return check(form);"> 
&nbsp; 
      <input type="reset" name="Submit2" value="����"></td> 
    </tr> 
  </table> 
</form> 
<?php
if($_POST[Submit]!=""){
	echo "���������֤��ͨ������л���ļ���...";
}
?>
</body>
</html>
