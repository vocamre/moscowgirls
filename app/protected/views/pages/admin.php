<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="cont-head">Панель администратора</div>
		<div class="cont-body" style="">

<br>
<div style="height:300px;">
<ul style="font-size:16px; margin:20px;">
	<li><p><a href="<?php echo Yii::app()->request->baseUrl.'/index.php?r=pages/update&id=1'; ?>">Редактировать страницу &laquo;О проекте&raquo;</a></p></li>
	<li><p><a href="<?php echo Yii::app()->request->baseUrl.'/index.php?r=pages/update&id=2'; ?>">Редактировать страницу &laquo;Кастинг&raquo;</a></p></li>
	<li><p><a href="<?php echo Yii::app()->request->baseUrl.'/index.php?r=pages/update&id=3'; ?>">Редактировать страницу &laquo;Жюри&raquo;</a></p></li>
	<li><p><a href="<?php echo Yii::app()->request->baseUrl.'/index.php?r=girls'; ?>">Просмотреть список девушек</a></p></li>
</ul>
</div>
</div>
		<div class="cont-foot"></div>
