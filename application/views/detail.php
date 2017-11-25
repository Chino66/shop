<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- 引入 Bootstrap -->
     
    <!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css"> 
	<!-- 可选的Bootstrap主题文件（一般不使用） -->
	<!-- <script src="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"></script> -->
	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta charset="UTF-8">
	<title>SDFShop</title>
</head>
<body>
<!--####################################################################################################-->	
<!--==========导航栏==========-->
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="/index.php/shop">首页</a>
				</div>
			</nav>
<!--==========标题==========-->
			<div class="page-header">
				<h1>
					<?php echo $item_title;?> <small><?php echo $item_title_small;?></small>
				</h1>
			</div>
<!--==========大图+简介==========-->
			<div class="row clearfix">
					<div class="col-md-4 column">
						<img width="60%" height="60% alt="140x140" src=<?php echo $item_img;?> class="img-rounded" />
					</div>
					<div class="col-md-8 column">
						<dl>
							<dt>
								<?php echo $item_doc;?>
							</dt>
						</dl>
					</div>
			</div>
<!--==========正文==========-->
			<hr/>
			<img width="60%" height="60% alt="140x140" src=<?php echo $item_img2;?> class="img-rounded" />
			<img width="60%" height="60% alt="140x140" src=<?php echo $item_img;?> class="img-rounded" />
<!--==========小知识==========-->
		<hr/>
		<h3 class="text-center">鞋子经典保养方法</h3>
		<ol style="list-style:none">
			<li>
				<strong>一、鞋子的保养方法</strong> 
				<ol style="list-style:none">
					<li>
						1、买合脚的鞋子，否则鞋子易变形且使脚受到伤害。
					</li>
					<li>
						2、定期清洁鞋子，用湿布轻拭；切勿用刷子猛刷。
					</li>
					<li>
						3、鞋子若打湿，要塞报纸以维持鞋子之外观，且让鞋子自然风干，避免日光直射或高温烘烤。
					</li>
					<li>
						4、鞋子应避免接触溶剂，酸，碱，油等易腐蚀物。
					</li>
					<li>
						5、维持两双以上可替换的鞋，让鞋子轮流休息。
					</li>
					<li>
						6、休闲鞋，凉鞋不宜作激烈运动。
					</li>
				</ol>
			</li>
			<li>
				<strong> 二、怎样选鞋柜</strong>
				<ol style="list-style:none">
					<li>
						市面上常见的鞋柜主要有几种。一种是抽屉式鞋柜，通常有两到三层，每层里面有钢丝作隔离，可放二十几双骆驼鞋。一种是门式鞋柜，常见的是四门的、三门的，这种通常有放伞的地方。还有一种是外表看起来像抽屉式的，但又不需要拖出来放鞋子，只需拉一下，整柜的鞋子就尽收眼底，它的妙处在于有两根滑杆控制。这种鞋柜大的有五层，如衣柜一般高，小的只有一层，好像床头柜。例如有一款卧房内的小型鞋柜，小巧玲珑，就是配合床设计的，显得很协调。鞋柜通常是放在门口的一边，也算是客厅的当眼处，马虎不得。。
					</li>
				</ol>
			</li>
			<li>
				<strong> 三、皮鞋保养</strong>
				<ol style="list-style:none">
					<li>
						1、光牛皮、雾面牛皮保养：在10摄氏度以上穿着最佳，这样涂层不易折裂。表面打理最好用白色或无色鞋乳，特别是不可用油性光亮剂打理，否则会造成涂层脱落。
					</li>
					<li>
						2）蛇纹牛皮保养：可以用鞋乳或水性光亮剂打理，切不可用油性光亮剂，防止变硬。
					</li>
					<li>
						3）牛油皮、变色油皮的保养：穿着时应注意防水、防污，建议用皮革服装或沙发清洁剂打理。
					</li>
					<li>
						4）花纹羊皮和格子羊皮鞋保养：在打理时不可用光亮剂，应用较好的无色高级鞋乳。但鞋乳的用量不宜过多，涂抹应均匀，处理后皮面色会略为加深，但鞋乳挥发后，基本恢复如初。如颜色略有变深，属正常现象。
					</li>
					<li>
						5）平面漆皮、皱漆皮的保养：表面灰尘可用干净的湿布（以不滴水为佳）轻擦即可，也可用皮革清洁剂或清洁膏打理，但不能用光亮剂或鞋乳打理。光亮剂会造成假性的涂层脱落，鞋乳会使鞋面发皱，漆皮最好在10摄氏度以上穿着为宜。
					</li>
					<li>
						6）水染皮、打蜡皮的保养：水染皮、打蜡皮是无涂层的皮料，容易吸收水份及污渍，销售时要注意水渍或其他污渍。穿着时用鞋乳打理，应避免淋雨，不穿时要擦净灰尘，保持鞋面的光亮度，防止霉变。
					</li>
					<li>
						7）暗花羊皮鞋保养：暗花羊皮的打理比较简单，用较好的的鞋乳、鞋膏即可。
					</li>
				</ol>
			</li>
		</ol>
<!--==========页尾==========-->
<hr/>
		<p class="text-center"><small><a href="/index.php/shop">联系我们</a></small></p>
		</div>
	</div>
</div>
















<!--####################################################################################################-->	
</body>
</html>