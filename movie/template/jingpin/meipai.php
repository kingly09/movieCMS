<?php include 'head.php';$meipai='active';?>
<title>美拍视频-<?php echo $mkcms_seoname;?></title>
<meta name="description" content="<?php echo $mkcms_description;?>">
<link href="//cdn.staticfile.org/aplayer/1.10.1/APlayer.min.css" rel="stylesheet" type="text/css" />
<link href="//cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.plr10{padding-left:10px;padding-right:10px;max-width:620px;min-width:300px;margin:10px auto;background-color:#fff;}
</style>
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>
<body>
<?php  include 'header.php';?>
<div class="container">
<div class="row">
<?php echo $mkcms_ad19; ?>
			<div class="stui-pannel-box">
				<div class="stui-pannel_hd">
					<div class="stui-pannel__head active bottom-line clearfix">
					<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg>音乐MV</h3></div>
				</div><!-- 筛选 -->
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul2">
<li><span class="text-muted">按类型</span></li>
<li><a href="/mv_9_1.html" >新歌推荐</a></li>
<li><a href="/mv_13_1.html" >华语精选</a></li>
<li><a href="/mv_17_1.html" >日韩精选</a></li>
<li><a href="/mv_16_1.html" >欧美精选</a></li>
<li><a href="/meipai.html" >美拍视频</a></li>
<li><a href="/live.html" >网络直播</a></li>
</ul>
</div>
<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE");
header("Content-type: text/html;charset=utf-8");
date_Default_TimeZone_set("PRC");
echo '<div class="plr10"><script type="text/javascript" src="pai.php" charset="utf-8"></script></div>';
?>
</div>
</div>
<?php  include 'footer.php';?>