<?php session_start(); include "Conn/conn.php";  include "check_login.php"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css" rel="stylesheet">
<title>�û�����</title>
</head>
<div class=menuskin id=popmenu 
      onmouseover="clearhidemenu();highlightmenu(event,'on')" 
      onmouseout="highlightmenu(event,'off');dynamichide(event)"
	  style="Z-index:100;position:absolute;"></div>
<script src=" JS/menu.JS"></script>
<script language="javascript">
function check(form){
if (document.myform.sel_key.value==""){
	alert("�������ѯ����!");myform.sel_key.focus();return false;
}
}
</script>
<body> 
<TABLE width="757" cellPadding=0 cellSpacing=0 style="WIDTH: 755px" align="center"> 
  <TBODY> 
    <TR> 
      <TD style="VERTICAL-ALIGN: bottom; HEIGHT: 6px" colSpan=3> <TABLE 
      style="BACKGROUND-IMAGE: url( images/f_head.jpg); WIDTH: 760px; HEIGHT: 154px" 
      cellSpacing=0 cellPadding=0> 
          <TBODY> 
            <TR> 
              <TD height="110" colspan="6" 
          style="VERTICAL-ALIGN: text-top; WIDTH: 80px; HEIGHT: 115px; TEXT-ALIGN: right"></TD> 
            </TR> 
            <TR> 
              <TD height="29" align="center" valign="middle"><TABLE style="WIDTH: 610px" VERTICAL-ALIGN: text-top; cellSpacing=0 cellPadding=0 align="center"> 
                  <TBODY> 
                    <TR align="center" valign="middle"> 
                      <TD width="104" style="WIDTH: 100px; COLOR: red;">��ӭ��:&nbsp;<?php echo $_SESSION[username]; ?>&nbsp;&nbsp;</TD> 
                      <TD width="83" style="WIDTH: 80px; COLOR: red;"><SPAN  style="FONT-SIZE: 9pt; COLOR: #cc0033"></SPAN><a href="index.php"> ������ҳ</a></TD> 
                      <TD width="83" style="WIDTH: 80px; COLOR: red;"> <a  onmouseover=showmenu(event,productmenu) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >���¹���</a></TD> 
                      <TD width="83" style="WIDTH: 80px; COLOR: red;"> <a  onmouseover=showmenu(event,Honourmenu) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand">ͼƬ����</a></TD> 
                      <TD width="90" style="WIDTH: 90px; COLOR: red;"> <a  onmouseover=showmenu(event,myfriend) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >����Ȧ����</a> </TD> 
                      <?php
					  if($_SESSION[fig]==1){
					   ?>
					 <TD width="92" style="WIDTH: 80px; COLOR: red;"> <a  onmouseover=showmenu(event,myuser) onmouseout=delayhidemenu() class='navlink' style="CURSOR:hand" >����Ա����</a></TD> 
  					 <?php  
					  }
					  ?>
					  <TD width="80" style="WIDTH: 80px; COLOR: red;"> <a href="safe.php">�˳���¼</a></TD> 
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
            <td height="451" align="center"><table width="600" height="360"  border="0" cellpadding="0" cellspacing="0"> 
                <tr> 
                  <td height="32" align="center" valign="middle"><table width="480" border="0" cellpadding="0" cellspacing="0"> 
                      <tr> 
                        <td> <form  name="myform" method="post" action=""> 
                            <table width="560" border="1" cellpadding="3" cellspacing="1" bordercolor="#D6E7A5"> 
                              <tr> 
                                <td width="100%" height="28" align="center" class="i_table">��ѯ������
                                  <select name="sel_tj" id="sel_tj">
                                    <option value="regname" selected>�û���</option>
                                    <option value="id">ID��</option> 
                                  </select> 
                                  �ؼ���
                                  <input name="sel_key" type="text" id="sel_key" size="30"> 
&nbsp; 
                                  <input type="submit" name="Submit" value="����" onClick="return check();"></td> 
                              </tr> 
                            </table> 
                          </form></td> 
                      </tr> 
                    </table></td> 
                </tr> 
                <tr> 
                  <td height="325" align="center" valign="top">
				  <?php
				  if (isset($_POST[sel_key])){
				  	 $tj=$_POST[sel_tj];
					 $key=$_POST[sel_key];
					 $sql=mysql_query("select * from tb_user where $tj='$key'");
					 $result=mysql_fetch_array($sql);
				  if($result==false){
				  	echo ("[<font color=red>Sorry!���û�������!</font>]");
				  }
				  else{
				 ?> 
                    <table width="560" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#9CC739" bgcolor="#FFFFFF"> 
                      <tr align="left" colspan="2" > 
                        <td width="390" height="25" colspan="3" valign="top" bgcolor="#EFF7DE"> <span class="tableBorder_LTR"> �û�����</span> </td> 
                      </tr> 
                      <td height="192" align="center" valign="top" ><table width="480" border="0" cellpadding="0" cellspacing="0"> 
                            <tr> 
                              <td align="center"> <?php 
							  do{
							  ?> 
                                <table width="520" border="1" align=center cellpadding=3 cellspacing=2 bordercolor="#FFFFFF" bgcolor="#FFFFFF" class=i_table> 
                                  <tr bgcolor="#FFFFFF"> 
                                    <td width=15% align="center" valign=middle> �û�ID</td> 
                                    <td width=6% align="left"><?php echo $result[id]; ?></td> 
                                    <td width=10% align="center">�û���</td> 
                                    <td width=11% align="left"><?php echo $result[regname]; ?></td> 
                                    <td width=15% align="center">��ʵ����</td> 
                                    <td width=14% align="left"><?php echo $result[regrealname]; ?></td> 
                                    <td width=11% align="center">��
                                      ��</td> 
                                    <td width=18% align="left">
									<?php
									if($result[regsex]==0){
										echo "����";
									}
									if($result[regsex]==1){
										echo "��";
									}
									if($result[regsex]==2){
										echo "Ů";
									}
									 ?>
									 </td> 
                                  </tr> 
                                  <tr bgcolor="#FFFFFF"> 
                                    <td width=15% align="center" valign=middle>��������</td> 
                                    <td colspan="3" align="left"><?php echo $result[regbirthday]; ?></td> 
                                    <td align="center">�� &nbsp;��</td> 
                                    <td colspan="3" align="left"><?php echo $result[regpwd]; ?></td> 
                                  </tr> 
                                  <tr bgcolor="#FFFFFF"> 
                                    <td align="center">���ڳ���</td> 
                                    <td colspan="3" align="left"><?php echo $result[regcity]; ?></td> 
                                    <td align="center">E-mail</td> 
                                    <td colspan="3" align="left"><?php echo $result[regemail]; ?></td>
                                  </tr> 
                                  <tr bgcolor="#FFFFFF"> 
                                    <td height="30" align="center" valign=middle>������ҳ</td> 
                                    <td colspan="3" align="left"><?php echo $result[reghomepage]; ?></td> 
                                    <td align="center">QQ��</td>
                                    <td align="left"><?php echo $result[regqq]; ?></td>
                                    <td align="left">IP��ַ</td>
                                    <td align="center"><?php echo $result[ip]; ?>
								    </td> 
                                  </tr> 
								  <tr bgcolor="#FFFFFF"> 
                                    <td align="center">����ǩ��</td> 
                                    <td colspan="7" align="left"><?php echo $result[regsign]; ?></td> 
                                  </tr> 
								  <tr bgcolor="#FFFFFF"> 
                                    <td height="27" align="center">���Ҽ��</td> 
                                    <td colspan="6" align="left"><?php echo $result[regintroduce]; ?> </td> 
                                    <td align="left"><?php 
									if ($_SESSION[fig]=1){
									?>
                                      <img src="images/A_delete.gif" width="52" height="16" alt="ɾ���û���Ϣ" onClick="return d_chk('del_user.php?user_id=<?php echo $result[id];?>');">
<?php
									}
									 ?></td>
								  </tr> 
                                </table> 
                                <?php  
							}while($result=mysql_fetch_array($sql));
						 ?> </td> 
                            </tr> 
                          </table></td> 
                    </table> 
                    <?php
						}
				 	 }
			        ?> </td> 
                </tr> 
              </table></td> 
          </tr> 
        </table></TD> 
    </TR>  
  </TBODY> 
</TABLE> 
</body>
</html>
