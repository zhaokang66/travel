<?php session_start(); include "Conn/conn.php"; include "check_login.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css" rel="stylesheet">
<title>����ҵ�����</title>
</head>
<script src=" JS/menu.JS"></script>
<script language="javascript">
function fri_chk(){
if(confirm("ȷ��Ҫɾ��ѡ�е�������һ��ɾ�������ָܻ���")){
	return true;
}else
	return false;
}

</script>
<body>
<div class=menuskin id=popmenu
      onmouseover="clearhidemenu();highlightmenu(event,'on')"
      onmouseout="highlightmenu(event,'off');dynamichide(event)"
	  style="Z-index:100;position:absolute;"> </div>
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
              <TD height="29" align="center" valign="middle"> <TABLE style="WIDTH: 580px" VERTICAL-ALIGN: text-top; cellSpacing=0 cellPadding=0 align="center">
                  <TBODY>
                    <TR align="center" valign="middle">
                      <TD style="WIDTH: 100px; COLOR: red;">��ӭ��:&nbsp;<?php echo $_SESSION[username]; ?>&nbsp;&nbsp;</TD>
                      <TD style="WIDTH: 80px; COLOR: red;"><a href="index.php">������ҳ</a></TD>
                      <TD style="WIDTH: 80px; COLOR: red;"><a  onmouseover=showmenu(event,productmenu) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >���¹���</a></TD>
                      <TD style="WIDTH: 80px; COLOR: red;"><a  onmouseover=showmenu(event,Honourmenu) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand">ͼƬ����</a></TD>
                      <TD style="WIDTH: 90px; COLOR: red;"><a  onmouseover=showmenu(event,myfriend) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >����Ȧ����</a> </TD>
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
                </TABLE></TD>
            </TR>
          </TBODY>
        </TABLE></TD>
    </TR>
    <TR>
      <TD colSpan=3 valign="baseline" style="BACKGROUND-IMAGE: url( images/bg.jpg); VERTICAL-ALIGN: middle; HEIGHT: 450px; TEXT-ALIGN: center"><table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="451" align="center" valign="top"><br>
              <table width="640"  border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="613" height="16" align="right" valign="top">&nbsp;</td>
                  <br> <?php if ($page=="") {$page=1;}; ?>
                </tr>
                <tr>
                  <td height="292" align="center" valign="top" bordercolor="#D6E7A5">
                    <table width="600" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF">
                      <tr align="left" colspan="2" >
                        <td width="390" height="25" colspan="3" valign="top" bgcolor="#EFF7DE">  <span class="i_table"><span class="tableBorder_LTR"> ����ҵ�����</span></span> </td>
                      </tr>
                      <?php
						if ($page){
						   $page_size=2;     //ÿҳ��ʾ2����¼
						   $query="select count(*) as total from tb_friend where username='$_SESSION[username]' order by id desc";
							$result=mysql_query($query);       //��ѯ�ܵļ�¼����
							$message_count=mysql_result($result,0,"total");       //Ϊ������ֵ
							$page_count=ceil($message_count/$page_size);	  //���ݼ�¼��������ÿҳ��ʾ�ļ�¼��������ֵ�ҳ��
							$offset=($page-1)*$page_size;			//������һҳ�ӵڼ������ݿ�ʼѭ��
							for ($i=1; $i<2; $i++){         //����ÿҳ��ʾ���м�¼��Ϣ
							if ($i==1){
								$sql=mysql_query("select * from tb_friend where username='$_SESSION[username]' order by id desc limit $offset, $page_size");
								$result=mysql_fetch_array($sql);
								}
							do{
							?>
					  <tr>
                      <td height="140" align="center" valign="top" ><table width="500" border="1" align=center cellpadding=3 cellspacing=2 bordercolor="#FFFFFF" bgcolor="#FFFFFF" class=i_table>
                            <tr bgcolor="#FFFFFF">
                              <td width=13% align="center" valign=middle> ��
                                ��</td>
                              <td width=8% align="left"><?php echo $result['id']; ?></td>
                              <td width=10% align="center">��
                                ��</td>
                              <td width=13% align="left"><?php echo $result['name']; ?></td>
                              <td width=13% align="center"><span class="f_one">��
                                  ��</span></td>
                              <td width=9% align="left"><?php
									if($result['regsex']==0){
										echo "����";
									}
									if($result['regsex']==1){
										echo "��";
									}
									if($result['regsex']==2){
										echo "Ů";
									}
									 ?></td>
                              <td width=15% align="center">��
                                ��</td>
                              <td width=19% align="left"><?php echo $result['bir']; ?></td>
                            </tr>
                            <tr bgcolor="#FFFFFF">
                              <td width=13% align="center" valign=middle>���ڳ���</td>
                              <td colspan="3" align="left"><?php echo $result['city']; ?></td>
                              <td align="center">��ͥסַ</td>
                              <td colspan="3" align="left"><?php echo $result['address']; ?></td>
                            </tr>
                            <tr bgcolor="#FFFFFF">
                              <td align="center">��������</td>
                              <td colspan="2" align="left"><?php echo $result['postcode']; ?></td>
                              <td align="center">��ͥ�绰</td>
                              <td colspan="4" align="left"><?php echo $result['tel']; ?></td>
                            </tr>
                            <tr bgcolor="#FFFFFF">
                              <td align="center">e-mail</td>
                              <td colspan="7" align="left"><?php echo $result['email']; ?></td>
                            </tr>
                            <tr bgcolor="#FFFFFF">
                              <td align="center" valign=middle>�ֻ�����</td>
                              <td colspan="3" align="left"><?php echo $result['handset']; ?></td>
                              <td align="center">QQ��</td>
                              <td colspan="2" align="left"><?php echo $result['QQ']; ?></td>
                              <td align="left">
							  <?php
									if (isset($_SESSION['username'])){
									?>
									<a href="del_friend.php?friend_id=<?php echo $result[id]?>"><img src="images/A_delete.gif" width="52" height="16" alt="ɾ��������Ϣ" onClick="return fri_chk();"></a>
									<?php
									}
									 ?>
							  </td>
                            </tr>
                       </table>
					   </td>
				      </tr>
                          <?php
							}while($result=mysql_fetch_array($sql));
							?>
                    </table>
                    <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr bgcolor="#EFF7DE">
                        <td>&nbsp;&nbsp;ҳ�Σ�<?php echo $page;?>/<?php echo $page_count;?>ҳ
                          ��¼��<?php echo $message_count;?> ��&nbsp;</td>
                        <td align="right" class="hongse01">
                          <?php
						  if($page!=1)
						   {
							 echo  "<a href=browse_fri.php?page=1>��ҳ</a>&nbsp;";
							 echo "<a href=browse_fri.php?page=".($page-1).">��һҳ</a>&nbsp;";
						   }
						  if($page<$page_count)
						   {
								echo "<a href=browse_fri.php?page=".($page+1).">��һҳ</a>&nbsp;";
								echo  "<a href=browse_fri.php?page=".$page_count.">βҳ</a>";
						   }
						 }
						 }
						?>
                        </td>
                      </tr>
                    </table></td>
                </tr>
              </table>
              <br></td>
          </tr>
        </table></TD>
    </TR>
  </TBODY>
</TABLE>
</body>
</html>
