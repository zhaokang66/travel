<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.user-scalable=no">
    <title>毓璜顶公园</title>
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
			$sql="INSERT INTO message4(`id`,`content`,`lastdate`) VALUES (NULL,'$content', now())";//执行插入留言功能
				mysql_query($sql);
        $url = "./place4.php";
				echo "<script language='javascript' type='text/javascript'>";
				echo "window.location.href='$url'";//跳转到当前页面
				echo "</script>";
			}
	?>
      <div class="container ">
        <!-- 这里在标签内部写样式是因为每个景点的背景图不一样，而所有的景点都用一个css文件 -->
        <header style="background-image:url(../images/06.jpg);background-repeat:no-repeat;
        background-size:100% 100%;">
          <a href="../"><img src="../images/back.svg" class="back" alt="返回首页"></a>
          <h1 class="title text-center" >毓璜顶公园</h1>
        </header>
          <button type="button" name="button" class="btn btn-primary btn-sm btn-block" id="title1" style="text-align:left;"><b>一、毓璜顶公园简介</b></button>
          <ul class="ul" id="ul1">
          <li>
            <p>毓璜顶公园位于芝罘区偏南的一座小山上的毓璜顶公园，因有玉皇庙而得名。毓璜顶松柏掩映，殿阁俨然，宛如一幅清秀淡雅的水墨画，其主要建筑有小蓬莱坊、玉皇庙和玉皇阁。清光绪十九年重修玉皇庙时，由文人雅士提议更名为毓璜顶。“毓秀钟灵地不爱宝，璜琮璞玉山自生辉”的对联镌刻于玉皇庙红漆大门之上，对联的意思是说大自然的灵秀之气汇集于此，生出了各式各样的美玉宝石。玉皇庙始建于元代，后经明清两代重修和扩建，终于形成了现在布局协调的建筑群。毓璜顶风光非凡，俯瞰大海，
            人在其间有如进入了蓬莱仙境，故人们又称这里为“小蓬莱”，大自然的瑰丽景色和烟台市区的美丽丰姿，游客在此都可尽情饱览。</p>
            <p>又名小蓬莱，是烟台市区的主要景点之一，坐落在市区中心偏南的位置上，海拔72米，是市区“挺秀效灵”的游览胜地。自古即有“四方之迁客骚人遂无不以游斯境为幸”之感慨。其挺秀之气在不连岗
              而自高，不托势而自远。占地虽不过百亩，但曲径通幽、绿树成荫，背对南山，面向北海，宛如一块翡翠镶嵌在烟台这座美丽的海滨城市。</p>
          </li>
        </ul>

          <!-- <h3 class="title_small" id="title2">二、历史文化</h3> -->
          <button type="button" name="button" class="btn btn-primary btn-sm btn-block" id="title2" style="text-align:left;"><b>二、历史文化</b></button>
          <ul class="ul " id="ul2">
            <li>
              <p>毓璜顶因有玉皇庙而得名，玉皇庙大约在元朝末年（约1358年），
                由烟台的群众自发建造的，供奉玉皇大帝，每年正月初九，前来朝拜的人络绎不绝。
                清光绪十九年（1893年）重修玉皇庙时，由文人雅士刘次垣提议更名为毓璜顶，沿用至今。并写下了“毓秀钟灵地不爱宝，璜琮璞玉山自生辉”的楹联。意思是说，大自然不吝惜它的宝藏，将天然秀气，一切美溢皆凝结于此，可称得上是世外光华。这里既概括又具体解释了“毓璜”的含义：“毓”是生育、养育的意思；“璜”是一种精美的玉器，同时点明此处山岗优美绚丽的特点。
                后来，烟台开埠之初，西方传教士在此办教会学校、医院（分别发展成现在的烟台二中和毓璜顶医院），在此试种葡萄和苹果（烟台苹果和张裕葡萄酒的渊源）。</p>
            </li>
          </ul>
          <!-- <h3 class="link" id="title3">三、主要景点</h3> -->
          <button type="button" name="button" class="btn btn-primary btn-sm btn-block" id="title3" style="text-align:left;"><b>三、主要景点</b></button>
          <ul class="ul" id="ul3" >
              <li>1.玉皇庙
              <p>玉皇庙10元/人，始建于元代，后经明清两代重修和扩建，终于形成了现在布局协调的建筑群。庙内殿宇林立，巍峨壮观，雕梁画栋，金碧辉煌。</p>
              <div class="img-view">
                  <img src="../images/img13.jpg" class="img-responsive img-rounded"  alt="图片加载失败！">
                </div>
                <div class="img-view">
                    <img src="../images/img14.jpg" class="img-responsive img-rounded"  alt="图片加载失败！">
                </div>
              </li>
            <hr/>
              <li>2.玉皇阁
              <p>玉皇阁2元/人，玉皇阁位于毓璜顶公园顶峰，高14.5米，为六边形三层阁式攒尖顶建筑，在1984年10月1日正式开放。
  玉皇阁是清华大学教授、古建筑专家，特地来烟勘察设计的。玉皇阁建成后，游人登上阁楼，视野为之开阔，既可总览市区全貌，又可环顾碧海青山，更增添了游览毓璜顶的诗情画意。</p>
              <div class="img-view">
                  <img src="../images/img15.jpg" class="img-responsive img-rounded"  alt="图片加载失败！">
                </div>
                <div class="img-view">
                  <img src="../images/img16.jpg" class="img-responsive img-rounded"  alt="图片加载失败！">
                </div>
              </li>
              <hr/>
                <li>3.夜明珠展区
                <p>在毓璜顶公园的太乙剑坛广场上有世界上最大的夜明珠，直径1.68米，重6吨，是个庞然大物。</p>
                <div class="img-view">
                    <img src="../images/img15.jpg" class="img-responsive img-rounded"  alt="图片加载失败！">
                  </div>
                  <div class="img-view">
                    <img src="../images/31.jpg" class="img-responsive img-rounded"  alt="图片加载失败！">
                  </div>
                </li>
            </ul>
          <!-- <h3 class="title_small" id="title4">四、前往方式</h3> -->
          <button type="button" name="button" class="btn btn-primary btn-sm btn-block" id="title4" style="text-align:left;"><b>四、前往方式</b></button>
            <ul class="ul"  id="ul4" >
            <li>1.公交:<br/>
              <p>(1)在鲁东大学东门公交站乘坐52路->南大街鑫芸金行->乘坐旅游观光巴士->养马岛天马广场站下车【推荐路线】</p>
              <p>(2)在鲁东大学东门公交站乘坐41路->翡翠小区->乘坐59路->烟台海昌鲸鲨馆站->步行10米->海昌渔人码头站乘坐旅游观光巴士->养马岛天马广场站下车</p>
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
          			<img src="../images/27.jpg" class="img-place img-responsive img-rounded" alt="First slide">
          		</div>
          		<div class="item">
          			<img src="../images/28.jpg" class="img-place img-responsive img-rounded" alt="Second slide">
          		</div>
          		<div class="item">
          			<img src="../images/29.jpg" class="img-place img-responsive img-rounded" alt="Third slide">
          		</div>
              <div class="item">
          			<img src="../images/30.jpg" class="img-place img-responsive img-rounded" alt="Third slide">
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
            <li>门票：免费</li>
            <li>开放时间：6:00至21:00</li>
            <li>补充说明：10月-4月 6：00-21：00<br/> 5月-9月 5：00-22：00</li>
          </ul>
        <!-- <div class="liuyan">留言区</div> -->
        <h2 class="do">留言区</h3>
        <hr/>
        <?php
          $sql="select * from `message4` order by id desc";//查询评论
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
        <form name="addForm" method="POST"  action="place4.php" onsubmit="return checkPost();">
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
