<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.user-scalable=no">
    <title>芝罘岛</title>
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
			$sql="INSERT INTO message3(`id`,`content`,`lastdate`) VALUES (NULL,'$content', now())";//执行插入留言功能
				mysql_query($sql);
        $url = "./place3.php";
				echo "<script language='javascript' type='text/javascript'>";
				echo "window.location.href='$url'";//跳转到当前页面
				echo "</script>";
			}
	?>
      <div class="container ">
        <!-- 这里在标签内部写样式是因为每个景点的背景图不一样，而所有的景点都用一个css文件 -->
        <header style="background-image:url(../images/25.jpg);background-repeat:no-repeat;
        background-size:100% 100%;">
          <a href="../"><img src="../images/back.svg" class="back" alt="返回首页"></a>
          <h1 class="title text-center" >芝罘岛</h1>
        </header>
          <button type="button" name="button" class="btn btn-primary btn-sm btn-block" id="title1" style="text-align:left;"><b>一、芝罘岛简介</b></button>
          <ul class="ul" id="ul1">
            <li>
            <p>芝罘岛横亘于烟台市区北部的海面上，又称芝罘山，主峰高298米，东西长约9公里，是我国最大、世界最典型的陆连岛。芝罘岛阳坡苍翠欲滴，风景如画，背面怪石嶙峋，崖壁陡峭，，象怒目的金刚，所以芝罘山又有老爷山的俗称。芝罘岛是烟台港湾的一道天然的防波堤，从整个地形看，宛若一棵灵芝草，生长在碧波万顷的黄海之中。</p></li>
          </li>
        </ul>

          <!-- <h3 class="title_small" id="title2">二、历史文化</h3> -->
          <button type="button" name="button" class="btn btn-primary btn-sm btn-block" id="title2" style="text-align:left;"><b>二、历史文化</b></button>
          <ul class="ul " id="ul2">
            <li>
            <p>早在春秋时代，芝罘岛就是著名的地方。</p>
            <p>齐景公曾来此游览，欣赏这里的景色；山巅有齐康公的坟墓；秦皇汉武都登临过芝罘，那时这座“与大陆握手的岛屿”，已经显露出它的独特魅力了。</p>
            <p>汉晋时代成为我国北方最大口岸；</p>
            <p>唐以后芝罘一直属于我国重要海口；烟台开埠以后芝罘与海外的交往更加频繁。难怪有些外国人至今只知有芝罘而不知有烟台了。</p>
          </li>
          </ul>
          <!-- <h3 class="link" id="title3">三、主要景点</h3> -->
          <button type="button" name="button" class="btn btn-primary btn-sm btn-block" id="title3" style="text-align:left;"><b>三、主要景点</b></button>
          <ul class="ul" id="ul3" >
              <li>1.石门春波
              <p>芝罘岛山之阳，树木葱茏，瓦舍片片，天光水色，风景如画，有礁石似渔翁，矗立于前，人称“公公石”；山之阴，怪石嶙峋，崖壁陡峭，波涛澎湃，有巨石形似老婆婆盘坐海中，人称“婆婆石”。悬崖峭壁下，海浪回涌于石礁洞口，激流腾旋，涛声如雷，是为“石门春波”，是芝罘岛奇观之一。
              如今，芝罘岛景色更加迷人。岛内的幢幢错落有致的高大建筑，给古老的岛屿增添了秀色佳景。海岛周围的海面上，养殖海珍的浮标，光点闪闪，渔船千帆竞发，使这座古老的岛屿充满了蓬勃生机。</p>
              <div class="img-view">
                  <img src="../images/16.jpg" class="img-responsive img-rounded"  alt="图片加载失败！">
                </div>
                <div class="img-view">
                    <img src="../images/17.jpg" class="img-responsive img-rounded"  alt="图片加载失败！">
                </div>
              </li>
            <hr/>
              <li>2.阳主庙
              <p>阳主庙位于我国最大的陆连岛，芝罘岛阳坡的阳主庙，大约建于春秋时期，是齐国奉祀“八神将”的庙宇之一，也是我国有史记载的最古老的庙宇之一。庙有四进院落，殿房136间，呈“工”字形排列，建筑雄伟壮观，是一典型的东方古建筑布局。阳主庙“秀丽之山数扇锦屏遮阳主，幽阳罘水一条玉带束梁王。</p>
                <div class="img-view">
                  <img src="../images/18.jpg" class="img-responsive img-rounded"  alt="图片加载失败！">
                </div>
                <div class="img-view">
                  <img src="../images/19.jpg" class="img-responsive img-rounded"  alt="图片加载失败！">
                </div>
              </li>
            </ul>
          <!-- <h3 class="title_small" id="title4">四、前往方式</h3> -->
          <button type="button" name="button" class="btn btn-primary btn-sm btn-block" id="title4" style="text-align:left;"><b>四、前往方式</b></button>
            <ul class="ul"  id="ul4" >
            <li>1.公交:<br/>
              <p>(1)在鲁东大学东门公交站乘坐70路->北马路汽车站（也可乘坐3路、3路套口定点支线、3路刘家区间）->乘坐11路,经过18站, 到达救捞局站->步行约540米到达芝罘岛</p>
              <p>(2)在鲁东大学东门公交站乘坐16路->交警二大队站->乘坐49路->培英学校（芝罘岛）站->步行2.9公里到达芝罘岛</p>
            </li>
              <li>2.出租车
                <p>打车约需要30元（按照最短路线计算！）</p>
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
          			<img src="../images/img01.jpg" class="img-place img-responsive img-rounded" alt="First slide">
          		</div>
          		<div class="item">
          			<img src="../images/img02.jpg" class="img-place img-responsive img-rounded" alt="Second slide">
          		</div>
          		<div class="item">
          			<img src="../images/img03.jpg" class="img-place img-responsive img-rounded" alt="Third slide">
          		</div>
              <div class="item">
          			<img src="../images/img04.jpg" class="img-place img-responsive img-rounded" alt="Third slide">
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
              <li>1.建议去西海岸线走一走，漫长的海岸线，十分适合看日落。</li>
              <li>2.可以去芝罘岛东侧的山崖下，清澈的海水，人较少，可以尽情玩耍以及捉各种海里的小东西</li>
            </ul>
        <!-- <div class="liuyan">留言区</div> -->
        <h2 class="do">留言区</h3>
        <hr/>
        <?php
          $sql="select * from `message3` order by id desc";//查询评论
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
        <form name="addForm" method="POST"  action="place3.php" onsubmit="return checkPost();">
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
