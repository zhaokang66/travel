<?php error_reporting(E_ALL || ~E_NOTICE); ?>
<?php error_reporting(E_ALL || ~E_NOTICE); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css"  rel="stylesheet">
<title>�û�ע��</title>
</head>
<script src="JS/check.js"  language="javascript"></script>
<body style="MARGIN-TOP: 0px; VERTICAL-ALIGN: top; PADDING-TOP: 0px; TEXT-ALIGN: center">
<?php
$str=array("��","��","��","��","��","��","��","��","��","��");
$word=strlen($str);
for($i=0;$i<4;$i++){
	$num=rand(0,$word*2-1);      //$word=$word*2-1
	$img=$img."<img src=' images/checkcode/".$num.".gif' width='16' height='16'>";    //��ʾ���ͼƬ
	$pic=$pic.$str[$num];    //��ͼƬת���������е�����
}
?>
<TABLE width="757" cellPadding=0 cellSpacing=0 style="WIDTH: 755px">
  <TBODY>
    <TR> <TD style="VERTICAL-ALIGN: bottom; HEIGHT: 6px" colSpan=3 background="images/F_head.jpg"> <table width="100%" height="149"  border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="51" align="right">
		  <br>
		  <table width="262" border="0" cellspacing="0" cellpadding="0">
            <tr align="left">
              <td width="26" height="20"><a href="index.php"></a></td>
              <td width="71" class="word_white"><a href="index.php"><span style="FONT-SIZE: 9pt; COLOR: #000000; TEXT-DECORATION: none">��  ҳ</span></a></td>
              <td width="87"><a href="file.php"><span  style="FONT-SIZE: 9pt; COLOR: #000000; TEXT-DECORATION: none">�ҵĲ���</span></a></td>
              <td width="55"><a href="<?php echo (!isset($_SESSION[username])?'Regpro.php':'safe.php'); ?>"><span style="FONT-SIZE: 9pt; COLOR: #000000; TEXT-DECORATION: none"><?php echo (!isset($_SESSION[username])?"����ע��":"��ȫ�˳�"); ?></span></a></td>
              <td width="23">&nbsp;</td>
            </tr>
          </table>
		  <br></td>
        </tr>
        <tr>
          <td height="66" align="right"><p>&nbsp;</p></td>
        </tr>
        <tr>
		<form name="form" method="post" action="checkuser.php">
          <td height="20" valign="baseline">
            <table width="100%"  border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="32%" height="20" align="center" valign="baseline">&nbsp; </td>
                <td width="67%" align="left" valign="baseline" style="text-indent:10px;">
				<?php
		  	if(!isset($_SESSION[username])){
		  ?>
				�û���:
                  <input  name=txt_user size="10">
�ܤ���:
<input  name=txt_pwd type=password style="FONT-SIZE: 9pt; WIDTH: 65px" size="6">
��֤��:
<input name="txt_yan" style="FONT-SIZE: 9pt; WIDTH: 65px" size="8">
<input type="hidden" name="txt_hyan" id="txt_hyan" value="<?php echo $pic;?>">
<?php echo $img; ?> &nbsp;
<input style="FONT-SIZE: 9pt"  type=submit value=��¼ name=sub_dl onClick="return f_check(form)">
&nbsp;
<?php
				}else{
			?>
				<font color="red"><?php echo $_SESSION[username]; ?></font>&nbsp;&nbsp;���������վ��ӭ���Ĺ��٣�������ǰʱ�䣺<font color="red"><?php echo date("Y-m-d l"); ?>
</font>
			<?
				}
			?>
</td>
                <td width="1%" align="center" valign="baseline">&nbsp;</td>
              </tr>
            </table>
			</td>
		  </form>
        </tr>
      </table></TD>
    </TR>
    <TR>
      <TD colSpan=3 valign="baseline" style="BACKGROUND-IMAGE: url( images/bg.jpg); VERTICAL-ALIGN: middle; HEIGHT: 450px; TEXT-ALIGN: center"><br>
        <form  name="myform" action="register_deal.php" method="post">
          <table width="85%" border="1" align=center cellpadding=3 cellspacing=2 bordercolor="#FFFFFF" bgcolor="#FFFFFF" class=i_table>
            <tr align="left" bgcolor="#EFF7DE">
              <td height=22 colspan=2 bgcolor="#EFF7DE" class=right_head><span class="tableBorder_LTR">��������</span></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td width=22% align="right" valign=middle class='f_one'> �û���</td>
              <td width=78% align="left"  class='f_one'><input name='txt_regname' type=text id="txt_regname" value='' size=20 maxlength=14>
                <a href="#" onClick="javascript:openwin(myform.txt_regname.value)">[����û�]</a> <font color=red>*</font>
              <div id="check_info"></div></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td align="right" valign=middle > ��ʵ����</td>
              <td align="left" > <input name=txt_regrealname type=text id="txt_regrealname" size=20 maxlength=75>
              <font color=red>*</font></td>
            </tr>
            <tr>
            <tr bgcolor="#FFFFFF">
              <td align="right" valign=middle > ����</td>
              <td align="left"> <input name=txt_regpwd type=password id="txt_regpwd" size=20 maxlength=75>
              Ӣ����ĸ�����ֵȲ�����3λ<font color=red>*</font></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td align="right" valign=middle> ȷ������</td>
              <td align="left" > <input name='txt_regpwd2' type=password id="txt_regpwd2" size=20 maxlength=75 onBlur="if(this.value!=this.form.txt_regpwd.value) {alert('��������������벻һ�£�');myform.txt_regpwd.focus();}">
              <font color=red>*</font></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td align="right" > ��������</td>
              <td align="left" > <span class="word_grey">
                <input name="txt_birthday" type="text" id="Tel">
              �����ڸ�ʽΪ��yyyy-mm-dd��<font color=red>*</font></span></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td align="right" valign=middle> Email</td>
              <td align="left"  > <input name=txt_regemail type=text id="txt_regemail" value='' size=35 maxlength=75>
              <font color='#000000'>�������� <font color=red>*</font></font> </td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td align="right">���ڳ���</td>
              <td align="left"> <SCRIPT src=" JS/initcity.js"></SCRIPT>
                <select name="txt_province" id="txt_province" onchange="initcity();">
                  <SCRIPT>creatprovince();</SCRIPT>
                </select>
                <select name="txt_city" id="txt_city" > </select>
              <font color="red">*</font> </td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td align="right" valign=middle  class='f_one'> ѡ��ͷ��</td>
              <td align="left" class='f_one'><table width="106" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="10" height="47">
					<script language="javascript">
						//ͨ�������б�ѡ��ͷ��ʱӦ�øú���
						function showlogo(){
						document.images.img.src=" images/head/"+document.myform.txt_ico.options[document.myform.txt_ico.selectedIndex].value;
						}
            		</script>
					</td>
                    <td width="80"><img src=" images/head/0.gif" name="img" width="60" height="60"></td>
                    <td width="53" rowspan="2" align="center"><font color=red>*</font></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td> <select name="txt_ico" size="1" id="txt_ico" onChange="showlogo()">
                        <option value="0.gif" selected>ͷ��1
                        <option value="1.gif">ͷ��2
                        <option value="2.gif">ͷ��3
                        <option value="3.gif">ͷ��4</option>
                        <option value="4.gif">ͷ��5</option>
                        <option value="5.gif">ͷ��6</option>
                      </select> </td>
                  </tr>
              </table></td>
            </tr>
            <tr align="left" bgcolor="#EFF7DE">
              <td height=22 colspan=2 class=right_head><span class="tableBorder_LTR">ѡ������</span></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td align="right" class='f_one'> �Ա�</td>
              <td align="left" class='f_one'> <select name=txt_regsex id="txt_regsex">
                  <OPTION value=1>��</OPTION>
                  <OPTION value=2>Ů</OPTION>
                  <OPTION value=0 selected>����</OPTION>
              </select></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td align="right" class='f_one'>QQ</td>
              <td align="left" class='f_one'><input name='txt_regqq' type=text id="txt_regqq" value='' size=20 maxlength=14></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td align="right" class='f_one'> ������ҳ</td>
              <td align="left" class='f_one'> <input name='txt_reghomepage' type=text id="txt_reghomepage" value='' size=40 maxlength=75></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td align="right" valign=middle class='f_one'>���Ի�ǩ��</td>
              <td align="left" class='f_one'><textarea name='txt_regsign' cols=50 rows='4' id="txt_regsign"></textarea></td>
            </tr>
            <tr bgcolor="#FFFFFF">
              <td align="right" class='f_one'> ���Ҽ��</td>
              <td align="left" class='f_one'><textarea name=txt_regintroduce cols=50 rows=4 id="txt_regintroduce"></textarea></td>
            </tr>
          </table>
          <br>
            <input type='submit' name='regsubmit' value='�� ��'class="btn_grey" onClick="return check()"> &nbsp;
            <input name="Submit2" type="reset" class="btn_grey" value="�� ��">
      </form></TD>
    </TR>
  </TBODY>
</TABLE>
</body>
</html>
