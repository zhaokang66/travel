<?php
session_start();
include "Conn/conn.php";
include "check_login.php";

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css" rel="stylesheet">
<title>�ҵ�����</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>
<script src=" JS/menu.JS"></script>
<script src=" JS/UBBCode.JS"></script>
<script language="javascript">
function check(){
	if(myform.txt_title.value==""){
		alert("�����������Ʋ�����Ϊ�գ�");myform.txt_title.focus();return false;
	}
	if(myform.file.value==""){
		alert("�������ݲ�����Ϊ�գ�");myform.file.focus();return false;
	}
}
</script>
<body >
<div class=menuskin id=popmenu
      onmouseover="clearhidemenu();highlightmenu(event,'on')"
      onmouseout="highlightmenu(event,'off');dynamichide(event)"
	  style="Z-index:100;position:absolute;">
</div>
<TABLE width="757" cellPadding=0 cellSpacing=0 style="WIDTH: 755px" align="center">
  <TBODY>
    <TR> <TD style="VERTICAL-ALIGN: bottom; HEIGHT: 6px" colSpan=3> <TABLE
      style="BACKGROUND-IMAGE: url( images/f_head.jpg); WIDTH: 760px; HEIGHT: 154px"
      cellSpacing=0 cellPadding=0> <TBODY>
            <TR>
              <TD height="110" colspan="6"
          style="VERTICAL-ALIGN: text-top; WIDTH: 80px; HEIGHT: 115px; TEXT-ALIGN: right"></TD>
            </TR>
            <TR>
              <TD height="34" align="center" valign="middle">
			  <TABLE style="WIDTH: 580px" VERTICAL-ALIGN: text-top; cellSpacing=0 cellPadding=0 align="center">
                  <TBODY>
                    <TR align="center" valign="middle">
					 <TD style="WIDTH: 100px; COLOR: red;">��ӭ��:&nbsp;<?php echo $_SESSION[username]; ?>&nbsp;&nbsp;</TD>
                      <TD style="WIDTH: 80px; COLOR: red;"><SPAN  style="FONT-SIZE: 9pt; COLOR: #cc0033"> </SPAN><a href="index.php">������ҳ</a></TD>
                      <TD style="WIDTH: 80px; COLOR: red;"><a  onmouseover=showmenu(event,productmenu) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >���¹���</a></TD>
                      <TD style="WIDTH: 80px; COLOR: red;"><a  onmouseover=showmenu(event,Honourmenu) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand">ͼƬ����</a></TD>
                      <TD style="WIDTH: 90px; COLOR: red;"><a  onmouseover=showmenu(event,myfriend) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >����Ȧ����</a>  </TD>
                       <?php
					  if($_SESSION[fig]==1){
					   ?>
					   <TD style="WIDTH: 80px; COLOR: red;"><a  onmouseover=showmenu(event,myuser) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >����Ա����</a></TD>
  					 <?php
					  }
					  ?>
					  <TD style="WIDTH: 80px; COLOR: red;"><a href="safe.php">�˳���¼</a></TD>
                    </TR>
                  </TBODY>
              </TABLE>			  </TD>
            </TR>
          </TBODY>
        </TABLE></TD>
    </TR>
    <TR>
      <TD colSpan=3 valign="baseline" style="BACKGROUND-IMAGE: url( images/bg.jpg); VERTICAL-ALIGN: middle; HEIGHT: 450px; TEXT-ALIGN: center"><table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="451" align="center" valign="top">

		  <table width="600" height="100%"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="130" align="center" valign="top"><?php if ($page=="") {$page=1;}; ?>
<table width="560" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
                <tr align="left" colspan="2" >
                  <td width="390" height="25" colspan="3" valign="top" bgcolor="#EFF7DE"> <span class="tableBorder_LTR"> �鿴�ҵ����� </span> </td>
                </tr>
                	<?php
						if ($page){
						   $page_size=1;     //ÿҳ��ʾ20����¼
						   $query="select count(*) as total from tb_article where author = '".$_SESSION['username']."' order by id desc";
							$result=mysql_query($query);       //��ѯ�ܵļ�¼����
							$message_count=mysql_result($result,0,"total");       //Ϊ������ֵ
							$page_count=ceil($message_count/$page_size);	  //���ݼ�¼��������ÿҳ��ʾ�ļ�¼��������ֵ�ҳ��
							$offset=($page-1)*$page_size;			//������һҳ�ӵڼ������ݿ�ʼѭ��
								$sql=mysql_query("select id,title from tb_article where author = '".$_SESSION['username']."' order by id desc limit $offset, $page_size");
								$info=mysql_fetch_array($sql);

					 ?>
                <tr>
                  <td height="31" align="center" valign="top" ><table width="500"  border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><table width="498"  border="0" cellspacing="0" cellpadding="0" valign="top">
                          <?php
						  	if($info){
							$i=1;
							do{
						  ?>
                          <tr>
                            <td width="498" align="left" valign="top"> &nbsp;&nbsp;&nbsp;<a href="showmy.php?file_id=<?php echo $info['id'];?>"><?php echo $i."��".$info['title'];?></a> </td>
                          </tr>
                          <?php
							  $i=$i+1;
							  }while($info=mysql_fetch_array($sql))
						  ?>
                      </table></td>
                    </tr>
                  </table></td>
                </tr>
               <?php } ?>
              </table>
              <table width="560" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr bgcolor="#EFF7DE">
                  <td width="33%">&nbsp;&nbsp;ҳ�Σ�<?php echo $page;?>/<?php echo $page_count;?>ҳ
                    ��¼��<?php echo $message_count;?> ��&nbsp; </td>
                  <td width="67%" align="right" class="hongse01">
                          <?php
						  if($page!=1)
						   {
							 echo  "<a href=myfiles.php?page=1>��ҳ</a>&nbsp;";
							 echo "<a href=myfiles.php?page=".($page-1).">��һҳ</a>&nbsp;";
						   }
						  if($page<$page_count)
						   {
								echo "<a href=myfiles.php?page=".($page+1).">��һҳ</a>&nbsp;";
								echo  "<a href=myfiles.php?page=".$page_count.">βҳ</a>";
						   }
						 }
						?>
                  </td>
                </tr>
              </table></td>
          </tr>
        </table>

		  </td>
    </tr>
</table></TD>
    </TR>
  </TBODY>
</TABLE>
</body>
</html>
