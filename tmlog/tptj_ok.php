<?php 
session_start();
include("Conn/conn.php"); 
if($_POST["btn_tj"]=="�ύ"){
        $tpmc=htmlspecialchars($tpmc);      //��ͼƬ�����е������ַ�ת����HTML��ʽ
	    $tpmc=str_replace("\n","<br>",$tpmc);      //��ͼƬ�����еĻس������Զ����з�ȡ��   
	    $tpmc=str_replace("","&nbsp;",$tpmc);       //��ͼƬ�����еĿո���"&nbsp;"ȡ��
		$author=$_SESSION[username];
	    $scsj=date("y;m;d");          //����ͼƬ���ϴ�ʱ��
        $fp=fopen($file,"r");       //��ֻ����ʽ���ļ�
        $file=addslashes(fread($fp,filesize($file)));       //���ļ��е����Ų��ּ��Ϸ�б��
		$query="insert into tb_tpsc (tpmc,file,author,scsj) values ('$tpmc','$file','$author','$scsj')";     //��������ͼƬ���ݵ�sql���
		$result=mysql_query($query);
		echo "<meta http-equiv=\"refresh\" content=\"1;url=browse_pic.php\">ͼƬ�ϴ��ɹ������Ե�...";
		   }
?>