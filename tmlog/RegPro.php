<?php
error_reporting(E_ALL || ~E_NOTICE); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HEAD>
<TITLE>ע��Э��</TITLE>
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<LINK href="CSS/style.css" type=text/css rel=stylesheet>
<script src="JS/check.js" language="javascript">
</script>
</HEAD>
<BODY style="MARGIN-TOP: 0px; VERTICAL-ALIGN: top; PADDING-TOP: 0px; TEXT-ALIGN: center">
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
        <TD colSpan=3 valign="middle" style="BACKGROUND-IMAGE: url( images/bg.jpg); VERTICAL-ALIGN: middle; HEIGHT: 450px; TEXT-ALIGN: center"> <TABLE height="304" cellPadding=0 cellSpacing=0 style="WIDTH: 224px">
            <TBODY>
              <TR>
                <TD height="29"
            style="WIDTH: 368px; HEIGHT: 21px; TEXT-ALIGN: center"><STRONG><SPAN
            style="COLOR: #993300">�û�ע��Э��</SPAN></STRONG></TD>
              </TR>
              <TR>
                <TD style="WIDTH: 368px; HEIGHT: 302px" rowSpan=2> <TABLE
            style="BORDER-RIGHT: black thin solid; BORDER-TOP: black thin solid; BORDER-LEFT: black thin solid; WIDTH: 369px; BORDER-BOTTOM: black thin solid"
            align=center>
                    <TBODY>
                      <TR>
                        <TD style="HEIGHT: 15px; TEXT-ALIGN: left" colSpan=4
                  rowSpan=4>&nbsp;&nbsp;&nbsp;&nbsp;Ϊά�����Ϲ������������ȶ��������Ծ������������
                          <BR>
                          һ���������ñ�վΣ�����Ұ�ȫ��й¶�������ܣ������ַ�������Ἧ��ĺ͹���ĺϷ�Ȩ�棬�������ñ�վ���������ƺʹ���������Ϣ�� <BR>
                          ��һ��ɿ�����ܡ��ƻ��ܷ��ͷ��ɡ���������ʵʩ�ģ� <BR>
                          ������ɿ���߸�������Ȩ���Ʒ���������ƶȵģ� <BR>
                          ������ɿ�����ѹ��ҡ��ƻ�����ͳһ�ģ� <BR>
                          ���ģ�ɿ�������ޡ��������ӣ��ƻ������Ž�ģ� <BR>
                          ���壩�������������ʵ��ɢ��ҥ�ԣ������������ģ� <BR>
                          ����������⽨���š����ࡢɫ�顢�Ĳ�����������ɱ���ֲ�����������ģ� <BR>
                          ���ߣ���Ȼ�������˻���������ʵ�̰����˵ģ����߽����������⹥���ģ� <BR>
                          ���ˣ��𺦹��һ��������ģ� <BR>
                          ���ţ�����Υ���ܷ��ͷ�����������ģ� <BR>
                          ��ʮ��������ҵ�����Ϊ�ġ� <BR>
                          �����������أ����Լ������ۺ���Ϊ����</TD>
                      </TR>
                      <TR></TR>
                      <TR></TR>
                      <TR></TR>
                      <TR>
                        <TD style="HEIGHT: 8px; TEXT-ALIGN: center" colSpan=4><INPUT id=Button1 style="FONT-SIZE: 9pt" type=submit value=ͬ���������� name=Button1 onClick="window.location.href='Register.php'">
&nbsp;
                          <INPUT id=Button2 style="FONT-SIZE: 9pt" type=submit value=��ͬ�� name=Button2 onClick="window.location.href='index.php'"></TD>
                      </TR>
                    </TBODY>
                  </TABLE></TD>
              </TR>
              <TR></TR>
            </TBODY>
          </TABLE></TD>
      </TR>
    </TBODY>
  </TABLE>
</BODY>
</HTML>
