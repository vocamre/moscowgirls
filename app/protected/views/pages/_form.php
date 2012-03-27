
<div class="cont-body">
	<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pages-form',
	'enableAjaxValidation'=>false,
)); ?>



	<?php echo $form->errorSummary($model); ?>

	<?php/*
	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
	*/?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>72)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>
	<br>
	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>2, 'cols'=>56)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>
	<br>
	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>25, 'cols'=>56)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>
<br>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Обновить'); ?>
		
		<input type="button" value="Назад" onclick="document.location='<?php echo Yii::app()->request->baseUrl.'/index.php?r=pages/admin'; ?>'">
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>

<div class="cont-foot"></div>