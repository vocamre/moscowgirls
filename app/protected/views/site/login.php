<?php
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="cont-head">ВХОД НА САЙТ</div>
		<div class="cont-body" style="width:410px;">

<br>
<p>Пожалуйста введите логин и пароль:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Поля, отмеченные <span class="required">*</span> обязательны.</p>
<br>
	<div class="row" style="margin-bottom:5px;">
		Логин:&nbsp;&nbsp;&nbsp;&nbsp;
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
	
	<div class="row">
		Пароль:&nbsp;
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		
	</div>
<br>
	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		Запомнить меня
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
<br><br>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Войти'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->


</div>
		<div class="cont-foot"></div>
