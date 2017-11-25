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
<div class="navbar navbar-default navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <div class="navbar-header">
			 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			  <span class="sr-only">Toggle navigation</span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			 </button> 
			 <a class="navbar-brand" href="/index.php/shop">首页</a>
		  </div>
        </div>
      </div>
    </div>
<!--==========导航栏==========-->
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					  <span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					 </button> 
					 <a class="navbar-brand" href="/index.php/shop">首页</a>
				</div>
			</nav>
<!--==========巨幕==========-->
			<div class="jumbotron">
				<h1>
					<?php echo $title;?>
				</h1>
				<p>
					<?php echo $content;?>
				</p>
				<p>
					 <a class="btn btn-primary btn-large" href="/index.php/detail/show/1"><?php echo $recomment;?></a>
				</p>
			</div>
<!--==========标题==========-->
<hr/>
			<h3 class="text-center">
				经典推荐
			</h3>
<!--==========滚动图==========-->
			<div class="carousel slide" id="carousel-221512">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-221512">
					</li>
					<li data-slide-to="1" data-target="#carousel-221512">
					</li>
					<li data-slide-to="2" data-target="#carousel-221512">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<!-- <img alt="" class="center-block" src="/imgs/4.png" /> -->
						<a href="/index.php/detail/show/1">
							<img alt="" width="50%" height="50%" class="center-block" src=<?php echo $item1_img;?> />
						</a>
						<div class="carousel-caption">
							<h4>
								<?php echo $item1_title;?>
							</h4>
						</div>
					</div>
					<div class="item">
						<!-- <img alt="" class="center-block" src="/imgs/4.png" /> -->
						<a href="/index.php/detail/show/2">
							<img alt="" width="50%" height="50%" class="center-block" src=<?php echo $item2_img;?> />
						</a>
						<div class="carousel-caption">
							<h4>
								<?php echo $item2_title;?>
							</h4>
						</div>
					</div>
					<div class="item">
						<!-- <img alt="" class="center-block" src="/imgs/4.png" /> -->
						<a href="/index.php/detail/show/3">
							<img alt="" width="50%" height="50%" class="center-block" src=<?php echo $item3_img;?> />
						</a>
						<div class="carousel-caption">
							<h4>
								<?php echo $item3_title;?>
							</h4>
						</div>
					</div>
				</div> <a class="left carousel-control" href="#carousel-221512" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-221512" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
<!--==========标题==========-->
<hr/>
			<h3 class="text-center">
				更多商品
			</h3>
<!--==========缩略图==========-->
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="300x200" src=<?php echo $item1_img;?> />
						<div class="caption">
							<h3>
								<?php echo $item1_title;?>
							</h3>
							<p style="color:#ff0000">
								<?php echo $item1_tag;?>
							</p>
							<p>
								 <a class="btn btn-primary" href="/index.php/detail/show/1">前往</a> 
								 <!-- <a class="btn" href="/index.php/detail/show/1">Action</a> -->
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="300x200" src=<?php echo $item2_img;?> />
						<div class="caption">
							<h3>
								<?php echo $item2_title;?>
							</h3>
							<p style="color:#ff0000">
								<?php echo $item2_tag;?>
							</p>
							<p>
								 <a class="btn btn-primary" href="/index.php/detail/show/2">前往</a> 
								 <!-- <a class="btn" href="/index.php/detail/show/1">Action</a> -->
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="300x200" src=<?php echo $item3_img;?> />
						<div class="caption">
							<h3>
								<?php echo $item3_title;?>
							</h3>
							<p style="color:#ff0000">
								<?php echo $item3_tag;?>
							</p>
							<p>
								 <a class="btn btn-primary" href="/index.php/detail/show/3">前往</a> 
								 <!-- <a class="btn" href="/index.php/detail/show/1">Action</a> -->
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="300x200" src=<?php echo $item4_img;?> />
						<div class="caption">
							<h3>
								<?php echo $item4_title;?>
							</h3>
							<p style="color:#ff0000">
								<?php echo $item4_tag;?>
							</p>
							<p>
								 <a class="btn btn-primary" href="/index.php/detail/show/4">前往</a> 
								 <!-- <a class="btn" href="/index.php/detail/show/1">Action</a> -->
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="300x200" src=<?php echo $item5_img;?> />
						<div class="caption">
							<h3>
								<?php echo $item5_title;?>
							</h3>
							<p style="color:#ff0000">
								<?php echo $item5_tag;?>
							</p>
							<p>
								 <a class="btn btn-primary" href="/index.php/detail/show/5">前往</a> 
								 <!-- <a class="btn" href="/index.php/detail/show/1">Action</a> -->
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="300x200" src=<?php echo $item6_img;?> />
						<div class="caption">
							<h3>
								<?php echo $item6_title;?>
							</h3>
							<p style="color:#ff0000">
								<?php echo $item6_tag;?>
							</p>
							<p>
								 <a class="btn btn-primary" href="/index.php/detail/show/6">前往</a> 
								 <!-- <a class="btn" href="/index.php/detail/show/1">Action</a> -->
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="300x200" src=<?php echo $item7_img;?> />
						<div class="caption">
							<h3>
								<?php echo $item7_title;?>
							</h3>
							<p style="color:#ff0000">
								<?php echo $item7_tag;?>
							</p>
							<p>
								 <a class="btn btn-primary" href="/index.php/detail/show/7">前往</a> 
								 <!-- <a class="btn" href="/index.php/detail/show/1">Action</a> -->
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="300x200" src=<?php echo $item8_img;?> />
						<div class="caption">
							<h3>
								<?php echo $item8_title;?>
							</h3>
							<p style="color:#ff0000">
								<?php echo $item8_tag;?>
							</p>
							<p>
								 <a class="btn btn-primary" href="/index.php/detail/show/8">前往</a> 
								 <!-- <a class="btn" href="/index.php/detail/show/1">Action</a> -->
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="300x200" src=<?php echo $item9_img;?> />
						<div class="caption">
							<h3>
								<?php echo $item9_title;?>
							</h3>
							<p style="color:#ff0000">
								<?php echo $item9_tag;?>
							</p>
							<p>
								 <a class="btn btn-primary" href="/index.php/detail/show/9">前往</a> 
								 <!-- <a class="btn" href="/index.php/detail/show/1">Action</a> -->
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="300x200" src=<?php echo $item10_img;?> />
						<div class="caption">
							<h3>
								<?php echo $item10_title;?>
							</h3>
							<p style="color:#ff0000">
								<?php echo $item10_tag;?>
							</p>
							<p>
								 <a class="btn btn-primary" href="/index.php/detail/show/10">前往</a> 
								 <!-- <a class="btn" href="/index.php/detail/show/1">Action</a> -->
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="300x200" src=<?php echo $item11_img;?> />
						<div class="caption">
							<h3>
								<?php echo $item11_title;?>
							</h3>
							<p style="color:#ff0000">
								<?php echo $item11_tag;?>
							</p>
							<p>
								 <a class="btn btn-primary" href="/index.php/detail/show/11">前往</a> 
								 <!-- <a class="btn" href="/index.php/detail/show/1">Action</a> -->
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="300x200" src=<?php echo $item12_img;?> />
						<div class="caption">
							<h3>
								<?php echo $item12_title;?>
							</h3>
							<p style="color:#ff0000">
								<?php echo $item12_tag;?>
							</p>
							<p>
								 <a class="btn btn-primary" href="/index.php/detail/show/12">前往</a> 
								 <!-- <a class="btn" href="/index.php/detail/show/1">Action</a> -->
							</p>
						</div>
					</div>
				</div>
			</div>
<!--==========页尾==========-->
<hr/>
		<p class="text-center"><small><a href="/index.php/shop">联系我们</a></small></p>
		</div>
	</div>
</div>
















<!--####################################################################################################-->	
</body>
</html>