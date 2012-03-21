<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="cont-head">ВХОД НА САЙТ</div>
		<div class="cont-body" style="">

<br>

<center><p>Пожалуйста введите логин и пароль:</p></center>
<div class="form admin ">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<br>
	<div class="row specinp" style="margin-bottom:5px;">
		Логин:&nbsp;&nbsp;&nbsp;&nbsp;
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
	
	<div class="row specinp">
		Пароль:&nbsp;
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password', array('class'=>'last_fileld_en')); ?>
		
	</div>
<br>
	<div class="row rememberMe">
		<center><?php echo $form->checkBox($model,'rememberMe'); ?>
		Запомнить меня
		<?php echo $form->error($model,'rememberMe'); ?></center>
	</div>
<br>
	<div class="row buttons">
		<center><?php echo CHtml::submitButton(' ', array('class'=>'btn-enter')); ?></center>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->


</div>
		<div class="cont-foot"></div>
