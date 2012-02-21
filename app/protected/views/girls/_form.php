<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'girls-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'day'); ?>
		<?php echo $form->textField($model,'day'); ?>
		<?php echo $form->error($model,'day'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textField($model,'year'); ?>
		<?php echo $form->error($model,'year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'month'); ?>
		<?php echo $form->textField($model,'month'); ?>
		<?php echo $form->error($model,'month'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'height'); ?>
		<?php echo $form->textField($model,'height'); ?>
		<?php echo $form->error($model,'height'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'param1'); ?>
		<?php echo $form->textField($model,'param1'); ?>
		<?php echo $form->error($model,'param1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'param2'); ?>
		<?php echo $form->textField($model,'param2'); ?>
		<?php echo $form->error($model,'param2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'param3'); ?>
		<?php echo $form->textField($model,'param3'); ?>
		<?php echo $form->error($model,'param3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marital'); ?>
		<?php echo $form->textField($model,'marital',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'marital'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'education'); ?>
		<?php echo $form->textField($model,'education',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'education'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'experience'); ?>
		<?php echo $form->textArea($model,'experience',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'experience'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qualities'); ?>
		<?php echo $form->textArea($model,'qualities',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'qualities'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hobby'); ?>
		<?php echo $form->textArea($model,'hobby',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'hobby'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purpose'); ?>
		<?php echo $form->textArea($model,'purpose',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'purpose'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'demo'); ?>
		<?php echo $form->textField($model,'demo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'demo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'portrait'); ?>
		<?php echo $form->textField($model,'portrait',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'portrait'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fulllengthportrait'); ?>
		<?php echo $form->textField($model,'fulllengthportrait',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'fulllengthportrait'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rating'); ?>
		<?php echo $form->textField($model,'rating'); ?>
		<?php echo $form->error($model,'rating'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->