<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.user-scalable=no">
    <title>烟台山</title>
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
			$sql="INSERT INTO message2(`id`,`content`,`lastdate`) VALUES (NULL,'$content', now())";//执行插入留言功能
				mysql_query($sql);
        $url = "./place2.php";
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
          <h1 class="title text-center" >烟台山</h1>
        </header>
          <button type="button" name="button" class="btn btn-primary btn-sm btn-block" id="title1" style="text-align:left;"><b>一、烟台山简介</b></button>
          <ul class="ul" id="ul1">
            <li>
            <p>烟台山，位于市区北端，三面环海，岗峦兀立，林木葱茏，清秀幽雅。最高海拔42.5米，总面积45公顷，乔灌木数万株。站在烟台山上，可尽览烟台市全貌。</p>
            <p>烟台山坐落于芝罘区北端，因三面环海，亦名“海洋岛”，是烟台市区的主要风景游览区之一。</p>
            <p>烟台古称芝罘。烟台山是明代狼烟墩台的所在地。据史书记载，明洪武三十一年（1398年），为防倭寇侵扰，在此山修建狼烟墩台，也称烽火台，发现敌情，昼则升烟，夜则举火，以为警报，于是人们就把建立烽火台的这座山称为“烟台山”，烟台市亦由此得名。1862年烟台开埠后，英、美、法、日等16个国家相继在烟台山上和山麓建造领事馆、教堂和邮局，逐渐形成一个外国人“居留区”。1948年至1978年由人民解放军驻防，
              1979年经山东省委及济南军区指示，把烟台山交由当地园林部门管理，市政府投资对山上的建筑及设施多次进行了维修和建设</p>
            <p>烟台山绿树翠盖，风光秀丽，景观颇多。山阴半腰陡崖峭壁间，有一块巨石凌空横卧，下有石垫，其形如船，俗称“石船”。上有清康熙年间贡士刘九标七言律诗题刻。石船背面镌“造化奇观”楷书大字。山顶的烽火台已被拆毁，现仅存一段南北长15米、东西宽13米、高6.5米的台基。1905年7月，英国人在烽火台原址建起一座灯塔，一直使用了80余年。1986年，烟台海上安全监督局在原灯塔西侧，新建起了一座古堡式灯塔，塔高49.25米，通体乳白。新建的烟台山灯塔，已被定为烟台市市标。山上现已倾圮的明末所建龙王庙院中，立有一块巨石，高2米，长3米，宽2米。相传烟台山建烽火台前，每年春季必有群燕汇集于石上，当地渔民称此石为“燕台石”。清光绪二十二年(1896年)六月，浙江人林炳修于石上刻题四言诗十句：“崆峒距左，芝罘横前，俯临渤海，镇海齐燕。吁嗟群夷，蚕而食之，唯台山山，一石岿然。谁守此者，保有万年?”燕台石西北数十米处矗立着解放后修建的抗日烈士纪念碑，上镌1945年8月解放烟台战役中为国捐躯的89名革命烈士的英名。1982年6月，烟台山东北角礁石盘上新建惹浪亭。该亭临海而立
              ，渐次跃于海面，于远处观看，恰似飞峙于万顷波涛之上，立身于千层浪涌之中，大有招波惹浪之态。在此观海听涛，别具情趣。</p>
              <p>自1989年，烟台山风景区被列入烟台市政府重点开发建设项目后，公园在绿化美化、景点建设等方面不断改进完善，并建有环海栈桥
                、空中索道、水上酒楼、烽火台等一批新的景点。夜登烟台山，西望烟台港码头，灯火阑珊，一个现代化的港城展现在人们眼前。</p>
          </li>
        </ul>

          <!-- <h3 class="title_small" id="title2">二、历史文化</h3> -->
          <button type="button" name="button" class="btn btn-primary btn-sm btn-block" id="title2" style="text-align:left;"><b>二、历史文化</b></button>
          <ul class="ul " id="ul2">
            <li>
            <p>因为烟台山形势冲要，所以元朝在这里筑垒架炮。</p>
            <p>明洪武31年（1398年）在藤峰顶设立烽烟台，作为报警的场所，因而称为烟台山，后来烟台市也由此得名。下
                至今还有明代抗倭名将戚继光驻兵饮马的营房里、马房里、马厂街等遗迹。</p>
            <p>1861年，根据中英、中法签订不平等的《天津条约》，烟台被辟为通商口岸，成为中国北方最早开埠城市之一和山东省最早的通商口岸。先后有英国、美国、法国、德国、日本等17个国家在烟台山及其周围建立了领事馆、洋行等办事机构及众多别墅等。
              20世纪初，代表民族工商业的建筑相继建立，如中国银行烟台支行、交通银行烟台支行、烟台邮政局等。至20世纪30年代，烟台山及其周围已形成了规模庞大的近代建筑群体。
              1988年正式成立了烟台山公园，同年，烟台市人民政府将烟台山列为市级重点文物保护单位。
              2006年05月25日，烟台山近代建筑群被国务院批准列入第六批全国重点文物保护单位名单。
              烟台山景区现为全国重点文物保护单位，国家AAAA级旅游景区。</p>
          </li>
          </ul>
          <button type="button" name="button" class="btn btn-primary btn-sm btn-block" id="title3" style="text-align:left;"><b>三、主要景点</b></button>
          <ul class="ul" id="ul3" >
              <li>1.龙王庙
              <p>烟台山龙王庙始建于明代，是当地人为祈雨保丰年而修建，迄今已有数百年历史。新中国成立后，烟台山重获新生。1994年，烟台山管理部门对龙王庙进行过一次维修。2000年又对龙王庙进行了一次维修，使这座有着数百年历史的庙宇恢复原貌。</p>
                <div class="img-view">
                  <img src="../images/11.jpg" class="img-responsive img-rounded"  alt="图片加载失败！">
                </div>
                <div class="img-view">
                    <img src="../images/12.jpg" class="img-responsive img-rounded"  alt="图片加载失败！">
                </div>
              </li>
            <hr/>
              <li>2.石船石帆
              <p>谁将石壁劈成舟，屹立山腰海上头。纵有风涛惊不到，虽无桨舵势能悠。难供利客奔南北，止许高人宴夏秋。却笑胶舟游楚水，问王空自动齐侯。
              据载，这首刻在烟台山后断崖处石船“船舷”上的七律诗，是清朝康熙年间一位名叫刘九标的贡士所题。他不但字体工整严搜索谨，而且对石船的描绘与赞美，也是形象逼真，恰到好处。从而使石船成为烟台山著名景观。
              在其下面，还刻有清代上杭县文人丁锦堂于“同治壬申冬月，由京师返棹之罘，观石船题句”，云：一帆万里乘长风，壮志雄添海浪中。片石巍峨参造化，天工端不借人工。
              石船、石帆本属自然奇观，再几经文人品题，更是锦上添花，令人感叹。面对此景，耳闻涛声，读此佳句，真可谓情景交融，奇妙绝伦</p>
                <div class="img-view">
                  <img src="../images/13.jpg" class="img-responsive img-rounded"  alt="图片加载失败！">
                </div>
                <hr/>
                <li>3.古栾树
                <p>栾树，亦称“栾华”、“灯笼树”。无患子科，落叶乔木。烟台山有此树种出现，实属罕见，关于它的来历还带有一定的文学色彩。
              据说，明朝在海岸线南侧设奇山守御千户所，有一名十七八岁的南方士兵，远离父母，思乡念家心切，常对蓝天白云，热泪滚滚。这情景被一只迁徙的小鸟看见，便在第二年春天从士兵家乡衔来一颗栾树种子，放在烟台山兵营不远处的石丛泥土中。不多日，小栾树破土而出。南方籍小士兵见后惊喜不已，天天给它培土浇水，伴着它一起成长。每当站在它跟前，就如同见到家里亲人，因此这树又被叫做思乡树。
              如今，古老的栾树虽历尽沧桑600多年，它仍是那样枝繁叶茂，挺然屹立。每年春风乍起，它便抽枝发芽，葱郁如碧，迎着春风开花，沐着夏雨结果。</p>
                <div class="img-view">
                    <img src="../images/14.jpg" class="img-responsive img-rounded"  alt="图片加载失败！">
                  </div>
                  <hr/>
                    <li>4.观海坪
                    <p>美丽的烟台山，不仅自然景色迷人，而且也是名胜古迹荟萃的地方。观海坪是位于北侧临崖小路旁一片草坪，虽然面积不大，也无陪衬，但它在烟台人的心中，却有着相当重的分量。被誉为“万景台”。如若有亦梦亦幻般的海市蜃楼奇观出现时，这里便是最佳观察点。
                    不过，很早以前这里并没被先人所发现和相识。加之烟台山又远离村落，它的主要作用也只不过是渔民出海前，利用它的位置到此看看天相，测测风浪而已；遇到天气变坏，渔村老少又常到此烧纸祈祷，期盼海上风平浪静，亲人早日返航，安全归来。
                    烟台开埠后，烟台山周围发生了巨大的变化。山前和东海岸线一带，楼房林立，商家连门，绿树红瓦，交相衬映。蓝天碧海之下，颇具诗情画意，更似异国风光。特别是烟台山下的太平海湾，随着港坝的耸起和沿岸建筑物的兴建，更把海湾内千帆涌动，渔歌互答，巨轮进出，海鸟飞翔的画面，勾画得巧妙、动人。如此时登临烟台山，站在观海坪四顾远眺，那碧海蓝天，山光水色，尽收眼底，可谓是处处诗境，遍地画意。如果遇到季节适宜，气候适度，海际便会出现海市蜃楼奇观。即刻，一边仙境，一边人间，脚下的烟台山，正成为二者间的云中台阁。</p>
                    <div class="img-view">
                        <img src="../images/15.jpg" class="img-responsive img-rounded"  alt="图片加载失败！">
                      </div>
              </li>
            </ul>
          <button type="button" name="button" class="btn btn-primary btn-sm btn-block" id="title4" style="text-align:left;"><b>四、前往方式</b></button>
            <ul class="ul"  id="ul4" >
              <li>1.公交:<br/>
              <p>(1)在鲁东大学东门公交站乘坐3路套口定点支线->烟台日报社站->步行约620米到达烟台山公园【推荐路线】</p>
              <p>(2)在鲁东大学东门公交站乘坐52路->兴业银行->步行至汇丰广场->乘坐43路->烟台山站下车->步行至终点</p>
            </li>
              <li>2.出租车
                 <p>打车约需要17元（按驾车的最短路线计算）.2公里，预计2小时5分钟到达，至于路线，具体可参考手机导航。</p>
              </li>
              <li>3.出租车
                <p>打车约需要17元（按驾车的最短路线计算）</p>
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
          			<img src="../images/img05.jpg" class="img-place img-responsive img-rounded" alt="First slide">
          		</div>
          		<div class="item">
          			<img src="../images/img06.jpg" class="img-place img-responsive img-rounded" alt="Second slide">
          		</div>
          		<div class="item">
          			<img src="../images/img07.jpg" class="img-place img-responsive img-rounded" alt="Third slide">
          		</div>
              <div class="item">
          			<img src="../images/img08.jpg" class="img-place img-responsive img-rounded" alt="Third slide">
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
            <li>1.建议去环海栈道走一走，沿着海岸吹海风、看美景很享受。走累了，可以在惹浪亭歇一会儿，惹浪亭是这一带观海、赏日出的最佳位置。海边还有座悬挂在岩石间的木吊桥颇有名气，这是象征着永恒爱情的“连心桥”，挂满了红色同心锁的护栏边是取景拍照的好地方。</li>
            <li>2.建议慢行花费一个早上的时间可以浏览完大多数景点，灯塔，烽火台，连心桥，抗日烈士纪念碑等景点不可错过</li>
            <li>3.由于烟台山门票不接受网上订票，只能现场买，所以记得带上现金以及学生证。（学校商业区有代售点）</li>
          </ul>
        <h2 class="do">留言区</h3>
        <hr/>
        <?php
          $sql="select * from `message2` order by id desc";//查询评论
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
        <form name="addForm" method="POST"  action="place2.php" onsubmit="return checkPost();">
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
