<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.lightbox-0.5.css" />
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />-->
	
	<link type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.jscrollpane.css" rel="stylesheet" media="all" />

	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>

	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.mousewheel.js"></script>

	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.lightbox-0.5.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/application.js"></script>
	
	<script type="text/javascript" charset="utf-8" src="/app/js/oxo_1414_03_03_edgePreload.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="bigb">
<div id="stage" class="EDGE-3752019"><a href="/" class="logo-index"></a></div>
<div class="container index" id="page">
<?php $url = $_SERVER['REQUEST_URI']; ?>
<div class="main">
	<ul class="menu">
		<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/page&view=about" class="m1 <? if($url == "/app/index.php?r=site/page&view=about") {echo 'active';}?>"></a></li>
		<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/casting" class="m2 <? if($url == "/app/index.php?r=site/casting") {echo 'active';}?>"></a></li>
		<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/page&view=jury" class="m3 <? if($url == "/app/index.php?r=site/page&view=jury") {echo 'active';}?>"></a></li>
		<div class="clear"></div>
	</ul>
	<div class="content">
		<?php echo $content; ?>
	
	</div>
	<div class="soc">
		<center><div class="share42init"></div></center>
			<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/socialicons/share42.js"></script>
			<script type="text/javascript">share42('<?php echo Yii::app()->request->baseUrl; ?>/js/socialicons/')</script>
	</div>
</div>
<div class="footer">
	<div class="prefooter">
		<span class="fll yel">Партнеры проекта</span>
		<span class="flr wh">&copy; 2012 Kremlin Multimedia</span>
		<div class="clear"></div>
	</div>
	<a href="/" class="mini"></a>
	<a href="http://wowmoscow.net/" class="mosc"></a>
	<a href="http://kremlinmultimedia.com/" class="krem"></a>
	<a href="http://www.iconsofrussia.com" class="icon"></a>
	
	
	<span class="kont">Позвонить нам: +7(495) 488-59-80<br>Написать: <a href="mailto:info@wowmusic.biz">info@wowmusic.biz</a></span>
	<div class="clear"></a>
</div>
	<div class="clear"></div>

</div>
</div>
</body>
</html>
