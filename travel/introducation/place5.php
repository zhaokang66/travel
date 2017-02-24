<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.user-scalable=no">
    <title>烟台凤凰山公园台山</title>
    <link rel="stylesheet" href="../css/intro.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
  </head>
  <body style="background-color:#97CBFF;">
    <?php
		include 'conn.php';
		error_reporting(E_ALL || ~E_NOTICE);
    function uhtml($str) {
    $farr = array(
        "/\s+/", //过滤多余空白
         //过滤 <script>等可能引入恶意内容或恶意改变显示布局的代码,如果不需要插入flash等,还可以加入<object>的过滤
        "/<(\/?)(script|i?frame|style|html|body|title|link|meta|\?|\%)([^>]*?)>/isU",
        "/(<[^>]*)on[a-zA-Z]+\s*=([^>]*>)/isU",//过滤javascript的on事件
   );
   $tarr = array(
        " ",
        "＜\1\2\3＞",//如果要直接清除不安全的标签，这里可以留空
        "\1\2",
   );
  $str = preg_replace( $farr,$tarr,$str);
   return $str;
}
		$content = htmlspecialchars($_POST['content']);
    $conteng = addslashes($content);
    $content = uhtml($content);
		if($_POST['submit']){
			$sql="INSERT INTO message5(`id`,`content`,`lastdate`) VALUES (NULL,'$content', now())";//执行插入留言功能
				mysql_query($sql);
        $url = "./place5.php";
				echo "<script language='javascript' type='text/javascript'>";
				echo "window.location.href='$url'";//跳转到当前页面
				echo "</script>";
			}
	?>
      <div class="container ">
        <!-- 这里在标签内部写样式是因为每个景点的背景图不一样，而所有的景点都用一个css文件 -->
        <header style="background-image:url(../images/24.jpg);background-repeat:no-repeat;
        background-size:100% 100%;">
          <a href="../"><img src="../images/back.svg" class="back" alt="返回首页"></a>
          <h1 class="title text-center" >凤凰山公园</h1>
        </header>
          <button type="button" name="button" class="btn btn-primary btn-sm btn-block" id="title1" style="text-align:left;"><b>一、凤凰山公园简介</b></button>
          <ul class="ul" id="ul1">
          <li>
          <p>凤凰山位于烟台市莱山区中心城区北侧，大南山景区东部，海拔高度199.3米。凤凰山公园东临市政府，俯瞰莱山区迎春大街，四面环绕万象城·九如曦岸、鹿鸣小区、凤凰小区、四季花城、凤凰山庄、天籁花园等居民小区，更有康惠商贸城、新世界百货、华润中心、新天地都市广场佳世客等大型购物中心环绕左右，属于城市的居住、商贸黄金地带。</p></li>
        </li>
        </ul>

          <button type="button" name="button" class="btn btn-primary btn-sm btn-block" id="title2" style="text-align:left;"><b>二、历史文化</b></button>
          <ul class="ul " id="ul2">
          <li>
          <p>凰山公园1997年建成，面积3万平方米，公园中央设置的叠水池和喷泉叠涌，为公园增添了灵秀。为了更好的满足居民休闲娱乐要求，进一步提高城市公共绿地档次，2011年3月，该绿地广场进行全面改造，现各项改造工作已陆续展开，座椅、墙面及部分地面已经开始整修。景观绿化方面，已栽植乔灌木240余株，主要树种有黑松、大叶女贞、龙柏、柿树、连翘、樱花等，既丰富了现有数种，又保证了整个公园“三季有花、四季常绿”。</p>
          <p>根据城区地形特点和城市发展的需要，2012年凤凰山公园开始了西扩工程，规划占地650亩，工程总投资约1.2亿，主要实施登山步道系统、山顶建筑及园林景观绿化等工程建设。凤凰山公园扩建后，将莱山中心城区融入自然山水之中，在方便居民休闲需求的同时，也改善了人居环境和城市景观。到2012年登山步道系统进展顺利，一期工程计划10月底完工，二期工程完成40%，整个工程将于2013年10月底竣工</p></li>
          </li>
          </ul>
          <button type="button" name="button" class="btn btn-primary btn-sm btn-block" id="title3" style="text-align:left;"><b>三、主要景点</b></button>
          <ul class="ul" id="ul3" >
              <li>1.待补充
              <p></p>
                <div class="img-view">
                  <img src="../images/07.jpg" class="img-responsive img-rounded"  alt="图片加载失败！">
                </div>
                <div class="img-view">
                    <img src="../images/08.jpg" class="img-responsive img-rounded"  alt="图片加载失败！">
                </div>
              </li>
            <hr/>
              <li>2.
              <p</p>
                <div class="img-view">
                  <img src="../images/13.jpg" class="img-responsive img-rounded"  alt="图片加载失败！">
                </div>
                <hr/>
            </ul>
          <button type="button" name="button" class="btn btn-primary btn-sm btn-block" id="title4" style="text-align:left;"><b>四、前往方式</b></button>
            <ul class="ul"  id="ul4" >
            <li>1.公交:<br/>
              <p>(1)在鲁东大学东门公交站乘坐41路->海滨小区公交场站->步行340米->海滨小区站->竹林路站->步行2公里</p>
              <p>(2)在鲁东大学东门公交站乘坐52路->烟台人才市场->乘坐18路->竹林路站->步行2公里【少步行】</p>
            </li>
            <li>2.出租车
              <p>打车约需要40元。</p>
            </li>
            </ul>
          </li>
          <button type="button" name="button" class="btn btn-primary btn-sm btn-block" id="title5" style="text-align:left;"><b>五、优美图片集锦</b></button>
            <div id="myCarousel" class="carousel slide list-img">
            <!-- 轮播（Carousel）指标 -->
          	<ol class="carousel-indicators">
          		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          		<li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
          		<li data-target="#myCarousel" data-slide-to="3"></li>
          	</ol>
          	<!-- 轮播（Carousel）项目 -->
          	<div class="carousel-inner">
          		<div class="item active">
          			<img src="../images/20jpg" class="img-place img-responsive img-rounded" alt="First slide">
          		</div>
          		<div class="item">
          			<img src="../images/21.jpg" class="img-place img-responsive img-rounded" alt="Second slide">
          		</div>
          		<div class="item">
          			<img src="../images/22.jpg" class="img-place img-responsive img-rounded" alt="Third slide">
          		</div>
              <div class="item">
          			<img src="../images/23.jpg" class="img-place img-responsive img-rounded" alt="Third slide">
          		</div>
          	</div>
          	<!-- 轮播（Carousel）导航 -->
          	<a class="carousel-control left" href="#myCarousel"
          	   data-slide="prev"><img  src="../images/turn_left.svg" class="turn_left" alt=""></a>
          	<a class="carousel-control right" href="#myCarousel"
          	   data-slide="next"><img  src="../images/turn_right.svg" class="turn_right" alt=""></a>
          </div>
          <!-- <h3 class="title_small" id="title6">六、游玩攻略</h3> -->
          <button type="button" name="button" class="btn btn-primary btn-sm btn-block" id="title6" style="text-align:left;"><b>六、游玩攻略</b></button>
            <ul class="ul" id="ul6">
            <li>待补充<li/>
          </ul>
        <h2 class="do">留言区</h3>
        <hr/>
        <?php
          $sql="select * from `message5` order by id desc";//查询评论
          $query=mysql_query($sql);
          while ($row=mysql_fetch_array($query)){
        ?>
        <table class="table-info" width=100% border="0"  cellpadding="5" cellspacing="1" >
          <tr bgColor="white">
            <td class="">留言内容：<?php echo $row['content']?></td>

          </tr>
          <tr bgColor="white">
            <td>
              <div align="right">留言日期：<?php echo $row['lastdate']?>
              </div>
            </td>
          </tr>
        <br/>
        <?php }?>
       </table>
        <form name="addForm" method="POST"  action="place5.php" onsubmit="return checkPost();">
          <textarea name="content" rows="6" cols="35" placeholder="请输入留言内容..."></textarea><br/>
        <input id="submit" type="submit" name="submit" value="提交留言">
        </form>
      </div>
      <footer>copyright © 2017 Design by <a href="http://www.ldustu.com"><span>鲁大学生网</span></a></footer>
    <script type="text/javascript" src="../js/view.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
