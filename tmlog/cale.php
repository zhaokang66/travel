<?php 
class calendar{ 
var $year,$month,$day; 
var $week=array("Sun","Mon","Tue","Wed","Thu","Fri","Sat"); 
var $_month=array( 
"01"=>"һ��", 
"02"=>"����", 
"03"=>"����", 
"04"=>"����", 
"05"=>"����", 
"06"=>"����", 
"07"=>"����", 
"08"=>"����", 
"09"=>"����", 
"10"=>"ʮ��", 
"11"=>"ʮһ��", 
"12"=>"ʮ����" 
); 
function setyear($year){    //������� 
$this->year=$year; 
} 
function getyear(){   //������ 
return $this->year; 
} 
function setmonth($month){    //�����·� 
$this->month=$month; 
} 
function getmonth(){    //����·�
return $this->month; 
} 
function setday($day){   //�������� 
$this->day=$day; 
} 
function getday(){   //������� 
return $this->day; 
} 
function OUT(){    //������� 
$this->_env(); 
$week=$this->getweek($this->year,$this->month,$this->day);     //�������Ϊ���ڼ�
$fweek=$this->getweek($this->year,$this->month,1);     //��ô��µ�һ��Ϊ���ڼ� 
echo "<div style=width:280;font:9pt> <form action=$_SERVER[PHP_SELF] method='post' style='margin:0'> <select name=month onchange='this.form.submit();'>"; 
for($ttmpa=1;$ttmpa<13;$ttmpa++){     //���12���� 
$ttmpb=sprintf("%02d",$ttmpa); 
if(strcmp($ttmpb,$this->month)==0){ 
$select="selected style='background-color:#FAFDE2'"; 
}else{ 
$select=""; 
} 
echo "<option value='$ttmpb' $select>".$this->_month[$ttmpb]."</option>rn"; 
} 
echo " </select> <select name='year' onchange='this.form.submit();'>";    //�����ݣ�ǰ��10�� 
for($ctmpa=$this->year-10;$ctmpa<$this->year+10;$ctmpa++){ 
if($ctmpa>2050){ 
break; 
} 
if($ctmpa<1980){ 
continue; 
} 
if(strcmp($ctmpa,$this->year)==0){ 
$select="selected style='background-color:#FAFDE2'"; 
}else{ 
$select=""; 
} 
echo "<option value='$ctmpa' $select>$ctmpa</option>rn"; 
} 
echo "</select> 
</form> 
<table border=0 align=center>"; 
for($Tmpa=0;$Tmpa<count($this->week);$Tmpa++){    //������ڵı�ͷ 
echo "<td>".$this->week[$Tmpa]; 
} 
for($tmpb=1;$tmpb<=date("t",mktime(0,0,0,$this->month,$this->day,$this->year));$tmpb++){    //����������� 
if(strcmp($tmpb,$this->day)==0){  //��õ�ǰ���ڣ���������ɫ��ɫ��Ϊ��� 
$flag=" bgcolor='#DD5269'"; 
}else{ 
$flag=' bgcolor=#FAFDE2'; 
} 
if($tmpb==1){ 
echo "<tr>"; 
for($tmpc=0;$tmpc<$fweek;$tmpc++){ 
echo "<td>"; 
} 
} 
if(strcmp($this->getweek($this->year,$this->month,$tmpb),0)==0){ 
echo "<tr><td align=center $flag>$tmpb"; 
}else{ 
echo "<td align=center $flag>$tmpb"; 
} 
} 
echo "</table></div>"; 
} 
//��÷�����ָ�������ڵ������� 
function getweek($year,$month,$day){ 
$week=date("w",mktime(0,0,0,$month,$day,$year));     //������� 
return $week;   //������� 
} 
function _env(){ 
if(isset($_POST["month"])){ 
$month=$_POST["month"]; 
}else{ 
$month=date("m"); //Ĭ��Ϊ���� 
} 
if(isset($_POST["year"])){ 
$year=$_POST["year"]; 
}else{ 
$year=date("Y");    //Ĭ��Ϊ���� 
} 
$this->setyear($year); 
$this->setmonth($month); 
$this->setday(date("d")); 
} 
} 
$D=new calendar; 
$D->OUT(); 
?>  