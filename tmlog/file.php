<?php error_reporting(E_ALL || ~E_NOTICE); ?>
<?php session_start(); include "check_login.php";?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css" rel="stylesheet">
<title>����Sky</title>
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
          <td height="451" align="center" valign="top"><table width="640"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="613" height="223" align="center"><br>
			  <table width="500" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td>
				  <form  name="myform" method="post" action="check_file.php">
				  <table width="630" border="1" cellpadding="3" cellspacing="1" bordercolor="#D6E7A5">
                      <tr>
                        <td class="i_table" colspan="2"> <span class="tableBorder_LTR">��Ӳ�������</span></td>
                      </tr>
                      <tr>
                        <td valign="top" align="right" width="14%">�������⣺<br></td>
                        <td width="86%"><input name="txt_title" type="text" id="txt_title" size="68"></td>
                      </tr>
                      <tr>
                        <td align="right" width="14%">���ֱ������</td>
                        <td width="86%"><img src=" images/UBB/B.gif" width="21" height="20" onClick="bold()">&nbsp;<img src=" images/UBB/I.gif" width="21" height="20" onClick="italicize()">&nbsp;<img src=" images/UBB/U.gif" width="21" height="20" onClick="underline()">
						����
                            <select name="font" class="wenbenkuang" id="font" onChange="showfont(this.options[this.selectedIndex].value)">
                              <option value="����" selected>����</option>
                              <option value="����">����</option>
                              <option value="����">����</option>
                              <option value="����">����</option>
                            </select>
�ֺ�<span class="pt9">
<select
      name=size class="wenbenkuang" onChange="showsize(this.options[this.selectedIndex].value)">
  <option value=1>1</option>
  <option value=2>2</option>
  <option
        value=3 selected>3</option>
  <option value=4>4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
</select>
��ɫ
<select onChange="showcolor(this.options[this.selectedIndex].value)" name="color" size="1" class="wenbenkuang" id="select">
  <option selected>Ĭ����ɫ</option>
  <option style="color:#FF0000" value="#FF0000">��ɫ����</option>
  <option style="color:#0000FF" value="#0000ff">��ɫ����</option>
  <option style="color:#ff00ff" value="#ff00ff">��ɫ����</option>
  <option style="color:#009900" value="#009900">��ɫ�ഺ</option>
  <option style="color:#009999" value="#009999">��ɫ��ˬ</option>
  <option style="color:#990099" value="#990099">��ɫ�н�</option>
  <option style="color:#990000" value="#990000">��ҹ�˷�</option>
  <option style="color:#000099" value="#000099">��������</option>
  <option style="color:#999900" value="#999900">�����Ʒ�</option>
  <option style="color:#ff9900" value="#ff9900">�ֽ�����</option>
  <option style="color:#0099ff" value="#0099ff">��������</option>
  <option style="color:#9900ff" value="#9900ff">��������</option>
  <option style="color:#ff0099" value="#ff0099">���İ�ʾ</option>
  <option style="color:#006600" value="#006600">ī�����</option>
  <option style="color:#999999" value="#999999">��������</option>
</select>
</span></td>
                      </tr>
                      <tr>
                        <td align="right" width="14%">�������ݣ�</td>
                        <td width="86%">
						   <div class="file">
						     <textarea name="file" cols="75" rows="20" id="file" style="border:0px;width:520px;"></textarea>
						   </div>
						</td>
                      </tr>
                      <tr align="center">
                        <td colspan="2"><input name="btn_tj" type="submit" id="btn_tj" value="�ύ" onClick="return check();">                          &nbsp;
                          <input name="btn_cx" type="reset" id="btn_cx" value="��д"></td>
                        </tr>
                  </table>
				  </form>
				  </td>
                </tr>
              </table></td>
          </tr>
          </table>            </td>
    </tr>
</table></TD>
    </TR>
  </TBODY>
</TABLE>
</body>
</html>
