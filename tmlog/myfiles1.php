<?php session_start(); include "Conn/conn.php";?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css"  rel="stylesheet">
<title>���ȫ���������¼�����</title>
<style type="text/css">
<!--
.style1 {
	font-size: 9pt;
	color: #cc0033;
}
-->
</style></head>
<body style="MARGIN-TOP: 0px; VERTICAL-ALIGN: top; PADDING-TOP: 0px; TEXT-ALIGN: center"> 
<TABLE width="757" cellPadding=0 cellSpacing=0 style="WIDTH: 755px"> 
  <TBODY> 
    <TR> <TD style="VERTICAL-ALIGN: bottom; HEIGHT: 6px" colSpan=3> <TABLE 
      style="BACKGROUND-IMAGE: url( images/f_head.jpg); WIDTH: 760px; HEIGHT: 154px" 
      cellSpacing=0 cellPadding=0> <TBODY> 
            <TR> 
              <TD colspan="5" 
          style="VERTICAL-ALIGN: text-top; WIDTH: 80px; HEIGHT: 115px; TEXT-ALIGN: right"></TD> 
            </TR> 
            <TR> 
                <TD width="378" height="24" style="VERTICAL-ALIGN: text-top; TEXT-ALIGN: right"> <TABLE width="100%" height="26" cellPadding=0 cellSpacing=0 style="WIDTH: 240px"> 
                    <TBODY> 
                      <TR> 
                        <TD colSpan=3 rowSpan=3 align="center" style="HEIGHT: 15px; TEXT-ALIGN: center"><SPAN  style="FONT-SIZE: 9pt; COLOR: #cc0033"> </SPAN><A 
                  href="index.php">��
          
                             ҳ</A></TD> 
						<td solspan=3 rowSpan=3 align="center" style="height:15px; text-align:center;"><span style="font-size:9pt;color=#cc0033"></span><a href="file.php">�ҵĲ���</a>
						</td>
                        <TD rowSpan=3 style="HEIGHT: 15px; TEXT-ALIGN: center"><A href="file_more.php"> ��������</SPAN></A></TD> 
                        <TD  rowSpan=3 style="HEIGHT: 15px; TEXT-ALIGN: center"><A href="RegPro.php"> ����ע��</A></TD> 
                      </TR> 
                      <TR></TR> 
                      <TR></TR> 
                    </TBODY> 
                </TABLE></TD> 
                <TD width="95" align="center">��ǰʱ�䣺</TD> 
              <TD width="285" align="left" style="FONT-SIZE: 9pt; VERTICAL-ALIGN: middle; WIDTH: 273px; COLOR: red; FONT-FAMILY: ����; HEIGHT: 1px; TEXT-ALIGN: left"> <SCRIPT type=text/javascript> 
������document.write("<span id=labTime width='118px' Font-Size='9pt'></span>") //�����ʾ���ڵ����� 
������//ÿ1000����(��1��) ִ��һ�α��δ��� 
������setInterval("labTime.innerText=new Date().toLocaleString()",1000)  
��������</SCRIPT> </TD> 
              </TR> 
          </TBODY> 
        </TABLE></TD> 
    </TR> 
    <TR> 
      <TD colSpan=3 valign="baseline" style="BACKGROUND-IMAGE: url( images/bg.jpg); VERTICAL-ALIGN: middle; HEIGHT: 450px; TEXT-ALIGN: center"><br>
        <br> 
        <table width="600" height="100%"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="130" align="center" valign="top"><?php if ($page=="") {$page=1;}; ?>
<table width="560" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
                <tr align="left" colspan="2" >
                  <td width="390" height="25" colspan="3" valign="top" bgcolor="#EFF7DE"> <span class="tableBorder_LTR"> �鿴�ҵ����� </span> </td>
                </tr>
                	<?php
						if ($page){
						   $page_size=20;     //ÿҳ��ʾ20����¼
						   $query="select count(*) as total from tb_article where author = '".$_SESSION[username]."' order by id desc";   
							$result=mysql_query($query);       //��ѯ�ܵļ�¼����
							$message_count=mysql_result($result,0,"total");       //Ϊ������ֵ
							$page_count=ceil($message_count/$page_size);	  //���ݼ�¼��������ÿҳ��ʾ�ļ�¼��������ֵ�ҳ��
							$offset=($page-1)*$page_size;			//������һҳ�ӵڼ������ݿ�ʼѭ��  

								$sql=mysql_query("select id,title from tb_article where author = '".$_SESSION[username]."' order by id desc limit $offset, $page_size");			
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
                            <td width="498" align="left" valign="top"> &nbsp;&nbsp;&nbsp;<a href="article.php?file_id=<?php echo $info[id];?>"><?php echo $i."��".$info[title];?></a> </td>
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
        </table></TD>
    </TR> 
  </TBODY> 
</TABLE> 
</body>
</html>
