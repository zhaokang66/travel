  // alert("建议使用手机端设备查看，浏览效果更佳！");
  function checkPost(){
    obj = document.getElementsByName('content')[0];
    if(obj.value == '') {
      alert('内容不能为空');
      return false;
    }else
      alert('提交成功！');
    }
    function Show_Hidden(obj){
      if(obj.style.display=="block"){
        obj.style.display='none';
      }else {
        obj.style.display='block';
      }
    }
    window.onload=function(){
      title_1.onclick=function(){
        Show_Hidden(ul_1);
        return false;
      }
       title_2.onclick=function(){
         Show_Hidden(ul_2);
         return false;
       }
       title_3.onclick=function(){
         Show_Hidden(ul_3);
         return false;
       }
       title_4.onclick=function(){
         Show_Hidden(ul_4);
         return false;
       }
       title_5.onclick=function(){
         Show_Hidden(ul_5);
         return false;
       }
       title_6.onclick=function(){
         Show_Hidden(ul_6);
         return false;
       }
    }
    var title_1=document.getElementById("title1");
    // document.getElementByClassName("title");
    var ul_1=document.getElementById("ul1");
    var title_2=document.getElementById("title2");
    var ul_2=document.getElementById("ul2");
    var title_3=document.getElementById("title3");
    var ul_3=document.getElementById("ul3");
    var title_4=document.getElementById("title4");
    var ul_4=document.getElementById("ul4");
    var title_5=document.getElementById("title5");
    var ul_5=document.getElementById("myCarousel");
    var title_6=document.getElementById("title6");
    var ul_6=document.getElementById("ul6");
