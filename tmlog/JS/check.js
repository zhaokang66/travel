// JavaScript Document
//��ҳ��¼��֤
function f_check(form){
		if(form.txt_user.value==""){
			alert("�������û���");form.txt_user.focus();return false;		
		}
		if(form.txt_pwd.value==""){
			alert("����������");form.txt_pwd.focus();return false;
		}
		if(form.txt_yan.value==""){
			alert("��������֤��");form.txt_yan.focus();return false;
		}
		if(form.txt_yan.value!=form.txt_hyan.value){
			alert("�Բ������������֤�벻��ȷ!");form.txt_yan.focus();return false;
		}
	}
//�ж��û��������Ƿ�Ϸ�
function check(){
	if (myform.txt_regrealname.value==""){
		alert("��������ʵ������");myform.txt_regrealname.focus();return false;
	}
	if (myform.txt_regpwd.value==""){
		alert("���������룡");myform.txt_regpwd.focus();return false;
	}
	if (myform.txt_regpwd.value.length<3){
		alert("��������Ϊ3λ�����������룡");myform.txt_regpwd.focus();return false;
	}		
	if (myform.txt_regpwd2.value==""){
		alert("��ȷ�����룡");myform.txt_regpwd2.focus();return false;
	}
	if (myform.txt_regpwd.value!=myform.txt_regpwd2.value){
		alert("��������������벻һ�£����������룡");myform.txt_regpwd.focus();return false;
	}
	if(myform.txt_birthday.value==""){
		alert("��������������");myform.txt_birthday.focus();return false;
	}		
	if(CheckDate(myform.txt_birthday.value)){
		alert("�������׼���ڣ��磺1980/05/29��1980-05-29��");myform.txt_birthday.focus();return false;
	}
	if (myform.txt_regemail.value==""){
		alert("������Email��ַ��");myform.txt_regemail.focus();return false;
	}
	var i=myform.txt_regemail.value.indexOf("@");
	var j=myform.txt_regemail.value.indexOf(".");
	if((i<0)||(i-j>0)||(j<0)){
		alert("�������Email��ַ����ȷ�����������룡");myform.txt_regemail.value="";myform.txt_regemail.focus();return false;
	}
	if(myform.txt_province.value==""){
		alert("��ѡ�������ڵ�ʡ������!");myform.txt_province.focus();return false;
	}
	if(myform.txt_city==""){
		alert("��ѡ�������ڵĳ�������!");myform.txt_city.focus();return false;
	}
	if(myform.txt_ico==""){
		alert("��ѡ����ϲ��������ͷ��!");myform.txt_ico.focus();return false;
	}	
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

function openwin(x){
				  if (x==""){
	                  alert("�������û���!"); myform.txt_regname.focus();return false;
				 }
				 else{
					 window.open("submit_checkuser.php?x="+x,"newframe","width=300,height=150");
				 }
				 }