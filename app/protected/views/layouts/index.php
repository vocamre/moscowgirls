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
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />-->
	
	<link type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.jscrollpane.css" rel="stylesheet" media="all" />

	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>

	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.mousewheel.js"></script>

	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.jscrollpane.min.js"></script>
	
	
	<script type="text/javascript" charset="utf-8" src="/app/js/oxo_1414_03_02_edgePreload.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="bigb">
<div id="stage" class="EDGE-3679449"></div>
<div class="container index" id="page">
<div class="main">
	<ul class="menu">
		<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/page&view=about" class="m1"></a></li>
		<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/casting" class="m2"></a></li>
		<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/page&view=jury" class="m3"></a></li>
		<div class="clear"></div>
	</ul>
	<div class="content" style="height:520px;">

	<?php 
	$msg=Yii::app()->user->getFlash('msg'); 
	if ($msg) 
		{
			$options['options']['title'] = 'Moscow girls';
			$this->beginWidget('zii.widgets.jui.CJuiDialog', $options);
				echo $msg;
			$this->endWidget('zii.widgets.jui.CJuiDialog'); 

		} ?>
	
	</div>
	<div class="soc">
		<center>
			<a href="http://www.facebook.com/pages/Moscow-Girls/130692543697023" class="fb" target="_blank"></a>
			<a href="http://vk.com/moscowgirlsproject" class="vk" target="_blank"></a>
			<a href="http://www.odnoklassniki.ru/event/752999209" class="od" target="_blank"></a>
		</center>
	</div>
</div>
<div class="footer">
	<div class="prefooter">
		<span class="fll yel">Партнеры проекта</span>
		<span class="flr wh">&copy; 2012 — Moscow Girls</span>
		<div class="clear"></div>
	</div>
	<a href="/" class="mini"></a>
	<a href="http://wowmoscow.net/" class="mosc"></a>
	<a href="http://kremlinmultimedia.com/" class="krem"></a>
	<a href="http://www.iconsofrussia.com" class="icon"></a>
	
	
	<span class="kont">Позвонить: 8-968-951-85-21<br>Написать: <a href="mailto:info@moscowgirls.biz">info@moscowgirls.biz</a></span>
	<div class="clear"></a>
</div>
	<div class="clear"></div>

</div>
</div>
</body>
</html>
