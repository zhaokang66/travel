<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.user-scalable=no">
    <title>养马岛</title>
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
			$sql="INSERT INTO message1(`id`,`content`,`lastdate`) VALUES (NULL,'$content', now())";//执行插入留言功能
				mysql_query($sql);
        $url = "./place1.php";
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
          <h1 class="title text-center" >养马岛</h1>
        </header>
          <!-- <h3 class="title_small" id="title1">一、养马岛简介</h3> -->
          <button type="button" name="button" class="btn btn-primary btn-sm btn-block" id="title1" style="text-align:left;"><b>一、养马岛简介</b></button>
          <ul class="ul" id="ul1">
            <li>
            <p>养马岛，地处黄海之中，总面积约10平方公里，距烟台市区30公里。 岛上丘陵起伏，草木葱茏，山光海色，秀丽如画，海岛呈东北西南走向，地势南缓北峭，岛前海面宽阔，风平浪静，岛后群礁嶙峋，惊涛拍岸；东端碧水金沙，优良浴场。西端水深浪小，天然良港。岛上气候宜人，冬无严寒，夏无酷暑，年平均气温11.8℃。岛四周盛产海参、扇贝、鲍鱼、对虾、牡蛎、天鹅蛋等海产品。</p></li>
          </li>
        </ul>

          <!-- <h3 class="title_small" id="title2">二、历史文化</h3> -->
          <button type="button" name="button" class="btn btn-primary btn-sm btn-block" id="title2" style="text-align:left;"><b>二、历史文化</b></button>
          <ul class="ul " id="ul2">
            <li>
            <p>养马岛在5000年前就有人居住，清朝为宁海州连海乡莒岛社，民初袭之。1913年起改为象岛乡，先后隶属于宁海县第一区和牟平县第一
              区、第十区、牟东区、崔山区。1946年改为牟平县象岛区。1950年设为牟平县十六区，1955年复设牟平县象岛区，次年3月并入崔山区，12
              月设立象岛乡。1957年1月并入牟城镇，7月又析为象岛乡。1958年9月成立灯塔公社，11月并入东风公社。1962年设立象岛公社。1984年公社撤
              销，设立象岛乡，次年撤乡设养马岛镇。2001年撤镇设立养马岛街道。</p>
            <p>始皇嬴政为寻找长生不老药曾经多次东巡到达此地。</p>
            <p>一钱太守刘宠，字祖荣，西汉齐悼惠王刘肥之孙牟平侯刘渫的后代，东汉牟平人。刘宠被举为孝廉后，历任东平陵县令、豫章太守、会稽太守、
              宗正、大鸿胪、司空、司徒太尉等职。在任会稽太守时，简除烦苛政令，禁查官吏非法行为，政绩卓著。后升职入京时，山阴县五六位须眉皓白
              的老人，远来为他送行，每人带钱百文赠他。推辞再三，只挑选一个收下，后人称他为“一钱太守”。《魏地形志·牟平》云：“莒岛有刘宠墓”。
              清初监察御史、翰林院庶吉士杨维乔为莒岛刘宠墓题诗曰：“居官莫道一钱轻，尽是苍生血作成。向使特来抛海底，莒波赢得有清名。”</p>
            </li>
          </ul>
          <!-- <h3 class="link" id="title3">三、主要景点</h3> -->
          <button type="button" name="button" class="btn btn-primary btn-sm btn-block" id="title3" style="text-align:left;"><b>三、主要景点</b></button>
          <ul class="ul" id="ul3" >
              <li>1.天马广场
                <p>该项目是养马岛旅游度假区总体规划中唯一的大型广场，位于养马岛的入岛口，南边直接与养马岛跨海大桥相连接，总面积72000平方米，广场
                  东西长近400米，由清华大学博士生导师、中国环境艺术专家张绮曼教授设计完成，总投资3200万元，主要是以宣扬中华民族源远流长的传统文化
                  和弘扬生生不息的民族精神为主题，包括天马苑、秦皇苑等六大景区和马文化长廊、音乐喷泉等八大主要景观。其中天马雕塑高近30米，整个雕塑
                  气势恢弘，取意“天马行空”，是养马岛的标志性雕塑。</p>
                <div class="img-view">
                  <img src="../images/07.jpg" class="img-responsive img-rounded"  alt="图片加载失败！">
                </div>
                <div class="img-view">
                    <img src="../images/08.jpg" class="img-responsive img-rounded"  alt="图片加载失败！">
                </div>
              </li>
            <hr/>
              <li>2.跨海大桥景区
                <p>得到省交通厅全额资助的跨海大桥北连养马岛，南接滨海路，是养马岛与外界联系的咽喉要道。同时也是胶东地区首座跨海大桥，总投资1亿元，全长1870米，其中主桥长508米，两侧路堤1363米，道路等级为一级公路，双向四车道，整体造型为飞燕式拱桥设计，极大地改善了养马岛水域的生态环境，再现了养马岛青山绿水环绕之历史原貌。</p>
                <div class="img-view">
                  <img src="../images/09.jpg" class="img-responsive img-rounded"  alt="图片加载失败！">
                </div>
                <div class="img-view">
                                    <img src="../images/10.jpg" class="img-responsive img-rounded"  alt="图片加载失败！">
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
              <li>2.骑行
                 <p>骑行去养马岛是一个不错的选择，但是这是一个中等强度的骑行，长期缺乏训练或者骑行技术不好的人，不推荐此方式，骑行全长约31.2公里，预计2小时5分钟到达，至于路线，具体可参考手机导航。</p>
              </li>
              <li>3.出租车
                <p>打车约需要82元，共需时间约43分钟。</p>
              </li>
            </ul>
          </li>
          <!-- <h3 class="title_small" id="title5">五、优美图片集锦</h3> -->
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
              <li>1.最佳季节：7月-9月最佳。可以在浴场里游泳、看日出</li>
              <li>2.不可错过：养马岛海水浴场&nbsp;&nbsp;养马岛赛马场&nbsp;&nbsp;御笔苑景区&nbsp;&nbsp;后海</li>
              <li>3.租借自行车（收费40，不限时）进行环岛游行，环岛一周16.5公里，建议逆时针环骑，景点可以轻松到达。</li>
            </ul>
        <!-- <div class="liuyan">留言区</div> -->
        <h2 class="do">留言区</h3>
        <hr/>
        <?php
          $sql="select * from `message1` order by id desc";//查询评论
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
        <form name="addForm" method="POST"  action="place1.php" onsubmit="return checkPost();">
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
