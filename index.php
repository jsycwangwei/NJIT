<?php

require_once(dirname(__FILE__).'/include/config.inc.php');


//留言内容处理
if(isset($action) and $action=='add')
{

	$r = $dosql->GetOne("SELECT Max(orderid) AS orderid FROM `#@__message`");
	$orderid  = (empty($r['orderid']) ? 1 : ($r['orderid'] + 1));
	$name = htmlspecialchars($name);
	$tel  = htmlspecialchars($tel);
	$no  = htmlspecialchars($no);
	$num  = htmlspecialchars($num);
	$comments  = htmlspecialchars($dz);
	$posttime = GetMkTime(time());
	$ip       = gethostbyname($_SERVER['REMOTE_ADDR']);


	$sql = "INSERT INTO `#@__message` (siteid, nickname, contact, no, num, content, orderid, posttime, htop, rtop, checkinfo, ip) VALUES (1, '$name', '$tel', '$no', '$num', '$comments', '$orderid', '$posttime', '', '', 'false', '$ip')";
	if($dosql->ExecNoneQuery($sql))
	{
		ShowMsg('订单提交成功，我们的工作人员将会马上联系您！','index.php');
		exit();
	}
}

?>
<!DOCTYPE html>
<!--[if lte IE 8]>               <html class="ie8 no-js" lang="en">    <![endif]-->
<!--[if lte IE 10]>				 <html class="ie10 no-js" lang="en">   <![endif]-->
<!--[if !IE]>-->			     <html class="not-ie no-js" lang="en"> 	 <!--<![endif]-->
<head>
	
	<!-- Google Web Fonts
  ================================================== -->
	
	
	<!-- Basic Page Needs
  ================================================== -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
<?php echo GetHeader(); ?>
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.png">
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/grid.css" />
	<link rel="stylesheet" href="css/layout.css" />
	<link rel="stylesheet" href="css/fontello.css" />
	<link rel="stylesheet" href="css/animation.css" />
	
	<link rel="stylesheet" href="js/layerslider/css/layerslider.css" />
	<link rel="stylesheet" href="js/flexslider/flexslider.css" />
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" />
	
	<!-- HTML5 Shiv
	================================================== -->
	<script src="js/jquery.modernizr.js"></script>
	
</head>

<body data-spy="scroll" data-target="#navigation" class="home">
	
	
	<div class="loader"></div><!--/ .loader-->
	
	
<header id="header" class="transparent">
	
	<div class="header-in clearfix">
		
		<h1 id="logo"><a href="index.php"><img src="img/logo.png"></a></h1>
		
		<a id="responsive-nav-button" class="responsive-nav-button" href="#"><img src="img/nav.png" style="margin-left:2px"></a>
		
		<nav id="navigation" class="navigation">
			
			<ul>
				<li class="current-menu-item"><a href="#home">首页</a></li>
				<li><a href="#about">关于我们</a></li>
				<li><a href="#folio">活动展示</a></li>
				<li><a href="#team">我们团队</a></li>
				<li><a href="#blog">近期活动</a></li>
				<li><a href="#pricing">热门讲师</a></li>
				<li><a href="#contacts">加入我们</a></li>
			</ul>

		</nav><!--/ #navigation-->
		
	</div><!--/ .header-in-->
	
</header><!--/ #header-->


<!-- - - - - - - - - - - - - end Header - - - - - - - - - - - - - - - -->


<!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->
	

<div id="wrapper">
	
	<section id="home" class="page">
		
		<section class="section padding-off">
			
			<div id="layerslider-container">
				
				<div id="layerslider">

					<div class="ls-layer" style="slidedirection: left; durationin: 1500; durationout: 1500; easingin: easeInOutQuint; timeshift: -500;">
						
						<img alt="" class="ls-bg" src="img/bg-1.jpg">
						
						<h2 class="ls-s2 align-center" style="top: 43%; left: 130px; slidedirection : top; slideoutdirection : fade; scaleout : 0.75; durationin : 2000; durationout : 1000; easingin : easeInOutQuint; easingout : easeInOutQuint; font-size:4.0em; color:#FFFFFF;">
							南京互联网技术社区
						</h2>
						
						<h2 class="ls-s2 align-center" style="top: 57%; left: 380px; slidedirection : bottom; slideoutdirection : fade; scaleout : 0.75; durationin : 2000; durationout : 1000; easingin : easeInOutQuint; easingout : easeInOutQuint;font-size:4.0em; color:#FFFFFF;">
							期待你的加入
						</h2>
						
					</div><!--/ .ls-layer-->
					
					<div class="ls-layer" style="slidedirection: right; durationin: 1500; durationout: 1500; easingin: easeInOutQuint; timeshift: -500;">
					
					<img alt="" class="ls-bg" src="img/bg-2.jpg">
						
						<h2 class="ls-s2 align-center" style="top: 43%; left: 180px; slidedirection : top; slideoutdirection : fade; scaleout : 0.75; durationin : 2000; durationout : 1000; easingin : easeInOutQuint; easingout : easeInOutQuint;font-size:4.0em; color:#FFFFFF;">
							交流
						</h2>
						
						<h2 class="ls-s2 align-center" style="top: 57%; left: 260px; slidedirection : bottom; slideoutdirection : fade; scaleout : 0.75; durationin : 2000; durationout : 1000; easingin : easeInOutQuint; easingout : easeInOutQuint;font-size:4.0em; color:#FFFFFF;">
							分享
						</h2>
						
					</div><!--/ .ls-layer-->
					
					<div class="ls-layer" style="slidedirection: right; durationin: 1500; durationout: 1500; easingin: easeInOutQuint; timeshift: -500;">
					
						<img alt="" class="ls-bg" src="img/bg-3.jpg">
						
						<h2 class="ls-s2 align-center" style="top: 43%; left: 360px; slidedirection : top; slideoutdirection : fade; scaleout : 0.75; durationin : 2000; durationout : 1000; easingin : easeInOutQuint; easingout : easeInOutQuint;font-size:4.0em; color:#FFFFFF;">
							南京
						</h2>
						
						<h2 class="ls-s2 align-center" style="top: 57%; left: 170px; slidedirection : bottom; slideoutdirection : fade; scaleout : 0.75; durationin : 2000; durationout : 1000; easingin : easeInOutQuint; easingout : easeInOutQuint;font-size:4.0em; color:#FFFFFF;">
							互联网
						</h2>
						
					</div><!--/ .ls-layer-->

				</div><!--/ #layerslider-->

			</div><!--/ #layerslider-container-->	
	
			
		</section><!--/ .section-->
		
	</section><!--/ .page-->
	
	<section id="about" class="page">
		
		<section class="section">

			<div class="container">

				<div class="row">
					<div class="col-xs-12">
						<hgroup class="section-title align-center opacity">
							<h1>关于我们</h1>
							<h2>南京最好的互联网技术交流平台</h2>
						</hgroup>					
					</div>

				</div><!--/ .row-->

				<div class="row">

					<div class="col-md-7 opacity">
						<p>
							<img src="img/slide.jpg" alt="" />
						</p>
					</div><!--/ .col-md-6-->

					<div class="col-md-5">

						<p class="opacity">
							南京互联网
						</p>

						<ul class="list circle-list opacity">

							<li>互联网前端技术</li>
							<li>大数据&云计算</li>
							<li>最新测试技术</li>
							<li>前沿产品设计</li>

						</ul><!--/ .list-->

					</div><!--/ .col-md-5-->

				</div><!--/ .row-->

			</div><!--/ .container-->	
			
		</section><!--/ .section-->
		
	</section><!--/ .section-->
	
	<section id="folio" class="page">
		
		<section class="section padding-bottom-off">
			
			<div class="container">
				
				<div class="row">
					
					<div class="col-xs-12">
						<hgroup class="section-title align-center opacity">
							<h1>产品展示</h1>
							<h2>如果您对我们感兴趣，请加入我们</h2>
						</hgroup>							
					</div>
					
				</div><!--/ .row-->
				
				<div class="row">
					
					<div class="col-xs-12">
						<ul id="portfolio-filter" class="portfolio-filter opacity">
							<li class="filter active" data-filter="all">所有</li>
							<?php echo GetNav1(1); ?>
						</ul><!--/ #portfolio-filter -->		
					</div>
					
				</div><!--/ .row-->
					
			</div><!--/ .container-->

			<ul id="portfolio-items" class="portfolio-items">
 <?php

			$sql = "SELECT * FROM `#@__infoimg` WHERE (classid=1 OR parentstr LIKE '%,1,%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC";

 $dopage->GetPage($sql);
				while($row = $dosql->GetArray())
				{
			if($row['linkurl']=='' and $cfg_isreurl!='Y') $gourl = 'show.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y') $gourl = 'show-'.$row['classid'].'-'.$row['id'].'-1.html';
					else $gourl = $row['linkurl'];
			?>
				<li class="<?php echo $row['classid']; ?> mix mix_all opacity2x">
					<div class="work-item">
						<img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>" />
						<div class="image-extra">
							<div class="extra-content">
								<div class="inner-extra">
									<h2 class="extra-title"><a style="color:#FFFFFF" href="<?php echo $gourl; ?>"><?php echo $row['title']; ?></a></h2>
				<a href="<?php echo $gourl; ?>" class="single-image plus-icon"></a>
								</div><!--/ .inner-extra-->	
							</div><!--/ .extra-content-->
						</div><!--/ .image-extra-->
					</div><!--/ .work-item-->

				</li>					
<?php
			}
			?>

			</ul><!--/ .portfolio-items-->
			
		</section><!--/ .section-->
		
	</section><!--/ .page-->
	
	<section id="team" class="page">
		
		<section class="section bg-gray-color">
			
			<div class="container">

				<div class="row">

					<div class="col-xs-12">
						<hgroup class="section-title align-center opacity">
							<h1>我们的团队</h1>

							<h2>您的参与，才是我们的价值</h2>
						</hgroup>			
					</div>
					
				</div><!--/ .row-->

			</div><!--/ .container-->	
			
			<section class="team-member">

				<div class="container">

					<div class="row">

						<div class="col-xs-12">
							
							<div class="team-contents clearfix">

								<article class="scale">

									<div class="contents clearfix">

										<div class="team-info">

											<div class="team-image">
												<img src="img/td1.jpg" alt="" />
											</div>

											<hgroup class="team-group">
												<h2 class="team-title">Ann Nagell</h2>
												<h5 class="team-position">Web Designer</h5>
											</hgroup>

										</div><!--/ .team-info-->

										<div class="team-content">
											<div class="team-entry">

												<p>
													Lorem ipsum dolor sit amet, consectur adipiscing elit. Pellentesque ut lacus at velit consequat sodales. 
													Ut posuere neque molestie gravida. Integer eu feugiat neque, elementum posuere purus. Nam vitae convallis ipsum.
													Maecenas a vulputate ipsum, vestibulum lobortis enim. Sed nec consequat felis. Proin sit amet sollicitudin neque, 
													a rhoncus nisl. Aliquam malesuada elementum risus, sit amet dictum tempor nec.  Suspendisse lectus massa, 
													consequat at pellentesque sed.
												</p>	

												<ul class="social-icons">
													<li class="twitter"><a href="#"><i class="icon-twitter"></i>Twitter</a></li>
													<li class="facebook"><a href="#"><i class="icon-facebook"></i>Facebook</a></li>
													<li class="linkedin"><a href="#"><i class="icon-linkedin"></i>LinkedIn</a></li>
													<li class="rss"><a href="#"><i class="icon-rss"></i>Rss</a></li>
													<li class="instagram"><a href="#"><i class="icon-instagramm"></i>Instagram</a></li>
												</ul><!--/ .social-icons-->	

											</div><!--/ .team-entry-->
										</div><!--/ .team-content-->				

									</div><!--/ .contents-->

								</article>

								<article class="scale">

									<div class="contents clearfix">

										<div class="team-info">

											<div class="team-image">
												<img src="img/td2.jpg" alt="" />
											</div>

											<hgroup class="team-group">
												<h2 class="team-title">Jack Nagell</h2>
												<h5 class="team-position">Web Designer</h5>
											</hgroup>

										</div><!--/ .team-info-->

										<div class="team-content">
											<div class="team-entry">

												<p>
													Lorem ipsum dolor sit amet, consectur adipiscing elit. Pellentesque ut lacus at velit consequat sodales. 
													Ut posuere neque molestie gravida. Integer eu feugiat neque, elementum posuere purus. Nam vitae convallis ipsum.
													Maecenas a vulputate ipsum, vestibulum lobortis enim. Sed nec consequat felis. Proin sit amet sollicitudin neque, 
													a rhoncus nisl. Aliquam malesuada elementum risus, sit amet dictum tempor nec.  Suspendisse lectus massa, 
													consequat at pellentesque sed.
												</p>	

												<ul class="social-icons">
													<li class="twitter"><a href="#"><i class="icon-twitter"></i>Twitter</a></li>
													<li class="facebook"><a href="#"><i class="icon-facebook"></i>Facebook</a></li>
													<li class="linkedin"><a href="#"><i class="icon-linkedin"></i>LinkedIn</a></li>
													<li class="rss"><a href="#"><i class="icon-rss"></i>Rss</a></li>
													<li class="instagram"><a href="#"><i class="icon-instagramm"></i>Instagram</a></li>
												</ul><!--/ .social-icons-->												

											</div><!--/ .team-entry-->

										</div><!--/ .team-content-->				

									</div><!--/ .contents-->

								</article>	

								<article class="scale">

									<div class="contents clearfix">

										<div class="team-info">

											<div class="team-image">
												<img src="img/td3.jpg" alt="" />
											</div>

											<hgroup class="team-group">
												<h2 class="team-title">Ingrid Grant</h2>
												<h5 class="team-position">Web Designer</h5>
											</hgroup>

										</div><!--/ .team-info-->

										<div class="team-content">
											<div class="team-entry">

												<p>
													Lorem ipsum dolor sit amet, consectur adipiscing elit. Pellentesque ut lacus at velit consequat sodales. 
													Ut posuere neque molestie gravida. Integer eu feugiat neque, elementum posuere purus. Nam vitae convallis ipsum.
													Maecenas a vulputate ipsum, vestibulum lobortis enim. Sed nec consequat felis. Proin sit amet sollicitudin neque, 
													a rhoncus nisl. Aliquam malesuada elementum risus, sit amet dictum tempor nec.  Suspendisse lectus massa, 
													consequat at pellentesque sed.
												</p>	

												<ul class="social-icons">
													<li class="twitter"><a href="#"><i class="icon-twitter"></i>Twitter</a></li>
													<li class="facebook"><a href="#"><i class="icon-facebook"></i>Facebook</a></li>
													<li class="linkedin"><a href="#"><i class="icon-linkedin"></i>LinkedIn</a></li>
													<li class="rss"><a href="#"><i class="icon-rss"></i>Rss</a></li>
													<li class="instagram"><a href="#"><i class="icon-instagramm"></i>Instagram</a></li>
												</ul><!--/ .social-icons-->		

											</div><!--/ .team-entry-->
										</div><!--/ .team-content-->				

									</div><!--/ .contents-->

								</article>				

								<article class="scale">

									<div class="contents clearfix">

										<div class="team-info">

											<div class="team-image">
												<a class="single-image team-plus-icon" href="#"><img src="img/td4.jpg" alt="" /></a>
											</div>

											<hgroup class="team-group">
												<h2 class="team-title">Mike Rains</h2>
												<h5 class="team-position">Web Designer</h5>
											</hgroup>

										</div><!--/ .team-info-->

										<div class="team-content">
											<div class="team-entry">

												<p>
													Lorem ipsum dolor sit amet, consectur adipiscing elit. Pellentesque ut lacus at velit consequat sodales. 
													Ut posuere neque molestie gravida. Integer eu feugiat neque, elementum posuere purus. Nam vitae convallis ipsum.
													Maecenas a vulputate ipsum, vestibulum lobortis enim. Sed nec consequat felis. Proin sit amet sollicitudin neque, 
													a rhoncus nisl. Aliquam malesuada elementum risus, sit amet dictum tempor nec.  Suspendisse lectus massa, 
													consequat at pellentesque sed.
												</p>	

												<ul class="social-icons">
													<li class="twitter"><a href="#"><i class="icon-twitter"></i>Twitter</a></li>
													<li class="facebook"><a href="#"><i class="icon-facebook"></i>Facebook</a></li>
													<li class="linkedin"><a href="#"><i class="icon-linkedin"></i>LinkedIn</a></li>
													<li class="rss"><a href="#"><i class="icon-rss"></i>Rss</a></li>
													<li class="instagram"><a href="#"><i class="icon-instagramm"></i>Instagram</a></li>
												</ul><!--/ .social-icons-->				

											</div><!--/ .team-entry-->
										</div><!--/ .team-content-->				

									</div><!--/ .contents-->

								</article>	

							</div><!--/ .team-contents-->
							
						</div>

					</div><!--/ .row-->

				</div><!--/ .container-->

			</section><!--/ .team-member-->		
					
		</section><!--/ .section-->
		
	</section><!--/ .page-->
	
	
	

		
	</section><!--/ .page-->
	
	<section id="blog" class="page">
		
		<section class="section bg-gray-color">
			
			<div class="container">

				<div class="row">
					
					<div class="col-xs-12">
						<hgroup class="section-title align-center opacity">
							<h1>最新资讯</h1>
							<h2>资讯在后台添加，用于seo优化</h2>	
						</hgroup>						
					</div>
					
				</div><!--/ .row-->

				<div class="row">
				
					<?php
			$sql = "SELECT * FROM `#@__infoimg` WHERE (classid=2 OR parentstr LIKE '%,2,%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC";
		    $dopage->GetPage($sql,3);
			$i=1;
				while($row = $dosql->GetArray())
				{
			if($row['linkurl']=='' and $cfg_isreurl!='Y') $gourl = 'show.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y') $gourl = 'show-'.$row['classid'].'-'.$row['id'].'-1.html';
					else $gourl = $row['linkurl'];
			?>
					<div class="col-sm-6 col-lg-4 slideLeft">
						<article class="entry">
							<h2 class="entry-title">
								<a href="<?php echo $gourl; ?>"><?php echo $row['title']; ?></a>
							</h2><!--/ .entry-title-->

							<div class="entry-body">
								<p>
									 <?php
				if($row['description'] != '')
					echo ReStrLen($row['description'],65);
				else
					echo '网站资料更新中...';
				?>   
								</p>
							</div><!--/ .entry-body-->

							<div class="entry-meta">
								<span class="date"><?php echo GetDateTime($row['posttime']); ?></span>
								<span class="date"><a href="<?php echo $gourl; ?>">查看详情>></a></span>
							</div><!--/ .entry-meta-->
						</article><!--/ .entry-->
					</div>

						<?php
	$i++;
			}
			?>   
					
				</div><!--/ .row-->
				
				<div class="col-xs-12">
					<div class="align-center opacity">
						<a href="news.php" class="button large default">更多资讯</a>
					</div>
				</div>
				
			</div><!--/ .container-->	
			
		</section><!--/ .section-->

	
	</section><!--/ .page-->
	
	<section id="pricing" class="page">
		
		<section class="section border bg-gray-color">
		
			<div class="container">
				
				<div class="row">
					
					<div class="col-xs-12">
						<hgroup class="section-title align-center opacity">
							<h1>热门讲师</h1>

							<h2>多与他们交流吧</h2>
						</hgroup>						
					</div>
					
				</div><!--/ .row-->

				<div class="row">

					<div class="col-xs-12">

						<section class="simple-pricing-table col-4 clearfix">

							<div class="column opacity">

								<header class="header">
									<h5 class="title">张三</h5>
								</header><!-- .header -->

								<div class="price">
									<h2 class="cost">￥15</h2>
									<span class="description">2222</span>
								</div><!--/ .price-->

								<ul class="features">
									<li>EREQER</li>
									<li>REQREQ</li>
									<li>33DDE</li>
									<li>DEQDQE</li>
									<li>999999</li>
								</ul><!-- .features -->

								<footer class="footer">
									<a class="button default" href="https://1hnet.taobao.com/index.htm?spm=2013.1.w5002-11301722250.2.8R8qnv">前往购买</a>
								</footer><!-- .footer -->

							</div><!-- .column -->

							<div class="column opacity">

										<header class="header">
											<h5 class="title">李四</h5>
								</header><!-- .header -->

								<div class="price">
									<h2 class="cost">￥15</h2>
									<span class="description">eeeeee</span>
								</div><!--/ .price-->

								<ul class="features">
									<li>RRRRRR</li>
									<li>TTTTT</li>
									<li>YYYYYY</li>
									<li>UUUUUU</li>
									<li>HHHHHH</li>
								</ul><!-- .features -->

								<footer class="footer">
									<a class="button default" href="https://1hnet.taobao.com/index.htm?spm=2013.1.w5002-11301722250.2.8R8qnv">前往购买</a>
								</footer><!-- .footer -->

							</div><!-- .column -->

							<div class="column featured opacity">

										<header class="header">
									<h5 class="title">2222222</h5>
								</header><!-- .header -->

								<div class="price">
									<h2 class="cost">￥15</h2>
									<span class="description">HHHHH</span>
								</div><!--/ .price-->

								<ul class="features">
									<li>HGGGG</li>
									<li>BBBBB</li>
									<li>CCCCC</li>
									<li>VVVVVV</li>
									<li>fdafda</li>
								</ul><!-- .features -->

								<footer class="footer">
									<a class="button default" href="https://1hnet.taobao.com/index.htm?spm=2013.1.w5002-11301722250.2.8R8qnv">前往购买</a>
								</footer><!-- .footer -->
							</div><!-- .column -->

							<div class="column opacity">

											<header class="header">
									<h5 class="title">fdafda</h5>
								</header><!-- .header -->

								<div class="price">
									<h2 class="cost">￥15</h2>
									<span class="description">TRTRTRTR</span>
								</div><!--/ .price-->

								<ul class="features">
									<li>TRTRTRT</li>
									<li>TRTRTRTR</li>
									<li>RTRTRTR</li>
									<li>YYBBB</li>
									<li>fdafafd</li>
								</ul><!-- .features -->

								<footer class="footer">
									<a class="button default" href="https://1hnet.taobao.com/index.htm?spm=2013.1.w5002-11301722250.2.8R8qnv">前往购买</a>
								</footer><!-- .footer -->

							</div><!-- .column -->

						</section><!--/ .simple-pricing-table-->	

					</div>

				</div><!--/ .row-->

			</div><!--/ .container-->
			
		</section><!--/ .section-->
		
	</section><!--/ .page-->
	
	<section id="contacts" class="page">
		
		<section class="section padding-bottom-off">
			
			<div class="container">

				<div class="row">
					
					<div class="col-xs-12">
						<hgroup class="section-title align-center opacity">
							<h1>加入我们</h1>

							<h2>不管你是技术达人还是技术爱好者，欢迎加入我们</h2>
						</hgroup>		
					</div>
					
				</div><!--/ .row-->

			</div><!--/ .container-->
			
		</section><!--/ .section-->

	
	<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->
	<script type="text/javascript">
function cfm_msg()
{
var reg=/^[a-z0-9](\w|\.|-)*@([a-z0-9]+-?[a-z0-9]+\.){1,3}[a-z]{2,4}$/i;
if($("#name").val() == "" || $("#name").val() == "姓名")
        {
        alert("请填写您的姓名！");
        $("#name").focus();
        return false;
    }
	if($("#tel").val() == "" || $("#tel").val() == "手机号码")
        {
        alert("请填写您的手机号码！");
        $("#tel").focus();
        return false;
    }
    var tel = $("#tel").val(); //获取手机号
var telReg = !!tel.match(/^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/);
//如果手机号码不能通过验证
if(telReg == false){
   alert("请填写正确的手机号码！");
        $("#tel").focus();
        return false;
}
	if ($("#no").val() == "" || $("#no").val() == "技术领域（研发、测试、产品..）")
        {
			alert("请填写您的技术领域（研发、测试、产品..）！");
        $("#no").focus();
        return false;
    }
	if ($("#num").val() == "" || $("#num").val() == "分享主题")
        {
			alert("请填写您的分享主题！");
        $("#num").focus();
        return false;
    }
//	 if(isNaN($("#num").val()))
//      {
//         alert("须输入数字！");
//          $("#num").focus();
//        return false;
//      }
	if ($("#dz").val() == "" || $("#dz").val() == "期望交流对象")
        {
			alert("请填写您期望交流对象！");
        $("#dz").focus();
        return false;
    }
	
		
	$("#form").submit();
}
</script>
	
	<footer id="footer">
		
		<section class="section parallax parallax-bg-4">

			<div class="full-bg-image"></div>

			<div class="container">

				<div class="row">

					<div class="col-md-6 opacity">

						<form class="contact-form" method="post" id="form" action="index.php">

							<p class="input-block">
								<input type="text" name="name" id="name" placeholder="姓名" />
							</p>

							<p class="input-block">
								<input type="text" name="tel" id="tel" placeholder="手机号码" />
							</p>

							<p class="input-block">
								<input type="text" name="no" id="no" placeholder="技术领域（研发、测试、产品..）"/>
							</p>
							
							<p class="input-block">
								<input type="text" name="num" id="num" placeholder="分享主题"/>
							</p>

							<p class="input-block">
								<textarea name="dz" id="dz" placeholder="期望交流对象"></textarea>
							</p>
							

							<p class="input-block">
							 <input type="hidden" name="action" id="action" value="add" />
								<button onClick="cfm_msg();return false;" class="button turquoise submit" type="submit"><img src="img/1.png"></button>
							</p>

						</form><!--/ .contact-form-->	

					</div>

					<div class="col-md-6">
						<div class="widget widget_contacts opacity">
							
							<ul class="contact-details">
								<li>地址:南京市高新区</li>
								<li>电话: <?php echo $cfg_hotline; ?></li>
								<li>Email:jsycwangwei@126.com</li>
							</ul><!--/ .contact-details-->
							<footer class="footer">
								<a class="button default"
								   href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $cfg_qqcode; ?>&site=NJITGROUP.cn&menu=yes">在线咨询</a>
								</footer><!-- .footer -->
						</div><!--/ .widget-->
						
						
						<div class="widget widget_social opacity">
						<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<style type="text/css">
    html,body{margin:0;padding:0;}
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
  <div style="width:100%;height:270px;border:#ccc solid 1px;" id="dituContent"></div>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
		var point = new BMap.Point(118.802891, 32.064735);//定义一个中心点坐标
        map.centerAndZoom(point,17);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
	map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }
    
    //标注点数组
	var markerArr = [{
		title: "设计",
		content: "我的备注",
		point: "118.802891|32.064735",
		isOpen: 0,
		icon: {w: 21, h: 21, l: 0, t: 0, x: 6, lb: 5}
	}
		 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
			
			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script>

							
						</div><!--/ .widget-->
						
					</div>

				</div><!--/ .row-->

			</div><!--/ .container-->

		</section><!--/ .section-->	
		
		<div class="logo-in-footer">
			
			<div class="container">
				
				<div class="row">
					<div class="col-xs-12">
						<h1><a href="index.html">南京互联网技术社区</a></h1>
					</div>
				</div><!--/ .row-->
				
			</div><!--/ .container-->
			
		</div><!--/ .logo-in-footer-->

		<div class="bottom-footer clearfix">

			<div class="container">
				
				<div class="row">
					
					<div class="col-sm-6">
						
						<div class="copyright">
							Copyright © 2015. <a target="_blank" href="#">南京互联网技术社区</a>. 版权所有
						</div><!--/ .cppyright-->
						
					</div>
					
					<div class="col-sm-3 col-sm-offset-3">
						
						<div class="developed">
							Developed by <a target="_blank" href="#">南京互联网技术社区</a>
						</div><!--/ .developed-->
						
					</div>
					
				</div><!--/ .row-->
				
			</div><!--/ .container-->

		</div><!--/ .bottom-footer-->	
		
	</footer><!--/ #footer-->

	
	<!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->

	
</div><!--/ #wrapper-->


<!-- - - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - - -->



<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
<![endif]-->
<script src="js/jquery.queryloader2.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.easing.1.3.min.js"></script>
<script src="js/jquery.cycle.all.min.js"></script>
<script src="js/layerslider/js/layerslider.transitions.js"></script>
<script src="js/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
<script src="js/jquery.mixitup.js"></script>
<script src="js/jquery.mb.YTPlayer.js"></script>
<script src="js/jquery.smoothscroll.js"></script>
<script src="js/flexslider/jquery.flexslider.js"></script>
<script src="js/fancybox/jquery.fancybox.pack.js"></script>

<script src="js/jquery.gmap.min.js"></script>
<script src="js/jquery.tweet.js"></script>
<script src="js/jquery.touchswipe.min.js"></script>
<script src="js/config.js"></script>
<script src="js/custom.js"></script>
<a href="#" id="back-top" title="Back To Top" style="display: inline;"><img src="img/top.png" style=" float:left; margin-left:15px; margin-top:12px"></a>
</body>
</html>
