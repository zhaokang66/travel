<?php session_start();  include "check_login.php";?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css" rel="stylesheet">
<title>����Ȧ����</title>
</head>
<script src=" JS/menu.JS"></script>
<script  language="javascript">
//�ж��û��������Ƿ�Ϸ�
function check(){
	if (myform.txt_name.value==""){
		alert("������������");myform.txt_name.focus();return false;
	}
	if(myform.txt_bir.value==""){
		alert("��������������!");myform.txt_bir.focus();return false;
	}		
	if(CheckDate(myform.txt_bir.value)){
		alert("����������ڷǷ�����ȷ���������׼���ڣ��磺1980/05/29��1980-05-29");myform.txt_bir.focus();return false;
	}
	if(myform.txt_province.value==""){
		alert("��ѡ�������ڵ�ʡ������!");myform.txt_province.focus();return false;
	}
	if(myform.txt_city==""){
		alert("��ѡ�������ڵĳ�������!");myform.txt_city.focus();return false;
	}
	if (myform.txt_address.value==""){
		alert("�������ͥ��ַ��");myform.txt_address.focus();return false;
	}
	if (myform.txt_postcode.value==""){
		alert("�������������룡");myform.txt_postcode.focus();return false;
	}
	if (myform.txt_email.value==""){
		alert("����������Email��ַ��");myform.txt_email.focus();return false;
	}
	var i=myform.txt_email.value.indexOf("@");
	var j=myform.txt_email.value.indexOf(".");
	if((i<0)||(i-j>0)||(j<0)){
		alert("�������e-mail��ַ����ȷ�����������룡");myform.txt_email.value="";myform.txt_email.focus();return false;
	}
	if (myform.txt_tel.value==""){
		alert("���������ļ�ͥ�绰��");myform.txt_tel.focus();return false;
	}
	if (myform.txt_handset.value==""){
		alert("�����������ֻ����룡");myform.txt_handset.focus();return false;
	}
	if(myform.txt_QQ==""){
		alert("����������QQ��!");myform.txt_QQ.focus();return false;
	}
	myform.submit();		
function CheckDate(INDate)
{ if (INDate=="")
    {return true;}
	subYY=INDate.substr(0,4)
	if(isNaN(subYY) || subYY<=0){
		return true;
	}
	//ת���·�
	if(INDate.indexOf('-',0)!=-1){	separate="-"}
	else{
		if(INDate.indexOf('/',0)!=-1){separate="/"}
		else {return true;}
		}
		area=INDate.indexOf(separate,0)
		subMM=INDate.substr(area+1,INDate.indexOf(separate,area+1)-(area+1))
		if(isNaN(subMM) || subMM<=0){
		return true;
	}
		if(subMM.length<2){subMM="0"+subMM}
	//ת����
	area=INDate.lastIndexOf(separate)
	subDD=INDate.substr(area+1,INDate.length-area-1)
	if(isNaN(subDD) || subDD<=0){
		return true;
	}
	if(eval(subDD)<10){subDD="0"+eval(subDD)}
	NewDate=subYY+"-"+subMM+"-"+subDD
	if(NewDate.length!=10){return true;}
    if(NewDate.substr(4,1)!="-"){return true;}
    if(NewDate.substr(7,1)!="-"){return true;}
	var MM=NewDate.substr(5,2);
	var DD=NewDate.substr(8,2);
	if((subYY%4==0 && subYY%100!=0)||subYY%400==0){ //�ж��Ƿ�Ϊ����
		if(parseInt(MM)==2){
			if(DD>29){return true;}
		}
	}else{
		if(parseInt(MM)==2){
			if(DD>28){return true;}
		}	
	}
	var mm=new Array(1,3,5,7,8,10,12); //�ж�ÿ���е��������
	for(i=0;i< mm.length;i++){
		if (parseInt(MM) == mm[i]){
			if(parseInt(DD)>31){
				return true;
			}else{
				return false;
			}
		}
	}
   if(parseInt(DD)>30){return true;}
   if(parseInt(MM)>12){return true;}
   return false;
   }
}
</script>
<body>
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
              <TD height="29" align="center" valign="middle">
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
          <td height="451" align="center" valign="top"><br>
            <table width="640"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="613" height="23" align="right" valign="top">&nbsp;</td><br>
            </tr>
            <tr>
              <td height="223" align="center" valign="top">			  <form  name="myform" action="check_friend.php" method="post">
                <table width="85%" border="1" align=center cellpadding=3 cellspacing=2 bordercolor="#FFFFFF" bgcolor="#FFFFFF" class=i_table>
                  <tr align="left" bgcolor="#EFF7DE">
                    <td height=22 colspan=2 class=right_head> <span class="tableBorder_LTR">����Ȧ���</span></td>
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td width=22% align="right" valign=middle> ����</td>
                    <td width=78% align="left"><input name='txt_name' type=text id="txt_name" value='' size=20 maxlength=14>                    </td>
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td align="right" valign=middle ><span class="f_one">�Ա�</span> </td>
                    <td align="left" ><span class="f_one">
                      <select name=txt_sex id="txt_sex">
                        <option value=1>��</option>
                        <option value=2>Ů</option>
                        <option value=0 selected>����</option>
                      </select>
                    </span> </td>
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td align="right" > ����</td>
                    <td align="left" > <span class="word_grey">
                      <input name="txt_bir" type="text" id="Tel">
        �����ڸ�ʽΪ��yyyy-mm-dd��</span></td>
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td align="right" valign=middle>���ڳ��� </td>
                    <td align="left"  ><SCRIPT src=" JS/initcity.js"></SCRIPT> 
					<select name="txt_province" id="select" onChange="initcity();">
                  <SCRIPT>creatprovince();</SCRIPT> 
					</select>
                      <select name="txt_city" id="select2" >
                      </select></td>
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td align="right">��ͥסַ </td>
                    <td align="left">
                      <input name='txt_address' type=text id="txt_address2" value='' size=40 maxlength=75>
                          </td>
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td align="right"> ��������: </td>
                    <td align="left"><input name='txt_postcode' type=text id="txt_address3" value='' size=40 maxlength=75></td>
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td align="right">e-mail</td>
                    <td align="left"><input name='txt_email' type=text id="txt_reghomepage3" value='' size=40 maxlength=75></td>
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td align="right"> ��ͥ�绰</td>
                    <td align="left"><input name='txt_tel' type=text id="txt_regoicq4" value='' size=20 maxlength=14></td>
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td align="right" valign=middle>�ֻ�����</td>
                    <td align="left"><input name='txt_handset' type=text id="txt_regoicq2" value='' size=20 maxlength=14></td>
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td align="right"> QQ�� </td>
                    <td align="left"><input name='txt_QQ' type=text id="txt_regoicq3" value='' size=20 maxlength=14></td>
                  </tr>
                </table>
                <br>
                <input type='submit' name='regsubmit' value='�� ��'class="btn_grey" onClick="return check()">
				<input name="Submit2" type="reset" class="btn_grey" value="�� ��">
              </form></td>
          </tr>
          </table>            </td>
    </tr>
</table></TD> 
    </TR> 
  </TBODY> 
</TABLE> 
</body>
</html>
