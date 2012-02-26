<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'girls-form',
	'enableAjaxValidation'=>false,
	///'enctype'=>'multipart/form-data',
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="ank-top">
				<span class="t">Именно Вы можете стать участницей MoscowGirls!</span><br><br>
				<span class="m">Внимательно заполните анкету и мы обязательно рассмотрим вашу кандидатуру!</span><br><br>
				<span class="b">ВСЕ ПОЛЯ ОБЯЗАТЕЛЬНЫ ДЛЯ ЗАПОЛНЕНИЯ</span><br><br>
	</div>
	<div class="txt">Контактные данные</div>
	<table class="tab" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td width="128">Имя и фамилия</td>
					<td><?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50, 'class'=>'text')); ?>
						<?php echo $form->error($model,'name'); ?>
					</td>
				</tr>
				<tr>
					<td>Дата рождения</td>
					<td>
						<?php echo $form->textField($model,'day', array('style'=>'width:37px;', 'value'=>'01')); ?>
						<?php echo $form->error($model,'day'); ?>
						<?php echo $form->textField($model,'month', array('style'=>'width:124px; text-align:center', 'value'=>'январь')); ?>
						<?php echo $form->error($model,'month'); ?>
						<?php echo $form->textField($model,'year', array('style'=>'width:37px;', 'value'=>'2012')); ?>
						<?php echo $form->error($model,'year'); ?>
					</td>
				</tr>
				<tr>
					<td>Номер телефона</td>
					<td>
						<?php echo $form->textField($model,'phone',array('size'=>12,'maxlength'=>12)); ?>
						<?php echo $form->error($model,'phone'); ?>
					</td>
				</tr>
				<tr>
					<td>E-mail</td>
					<td>
						<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>30)); ?>
						<?php echo $form->error($model,'email'); ?>
					</td>
				</tr>
	</table>
	<div class="txt">Антропометрические данные</div>
			<table class="tab" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td width="128">Рост</td>
					<td>
						<?php echo $form->textField($model,'height', array('class'=>'min')); ?>
						<?php echo $form->error($model,'height'); ?> см
					</td>
				</tr>
				<tr>
					<td>Вес</td>
					<td>
						<?php echo $form->textField($model,'weight', array('class'=>'min')); ?>
						<?php echo $form->error($model,'weight'); ?> кг
					</td>
				</tr>
				<tr>
					<td>Параметры</td>
					<td>
						<?php echo $form->textField($model,'param1', array('class'=>'min')); ?>
						<?php echo $form->error($model,'param1'); ?> х 
						<?php echo $form->textField($model,'param2', array('class'=>'min')); ?>
						<?php echo $form->error($model,'param2'); ?> х 
						<?php echo $form->textField($model,'param3', array('class'=>'min')); ?>
						<?php echo $form->error($model,'param3'); ?>
					</td>
				</tr>
	</table>
	<div class="txt">Расскажите о себе</div>
			<table class="tab" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td width="128">Семейное положение</td>
					<td>
						<select>
						  <option>не замужем</option>
						  <option>замужем</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Образование</td>
					<td>
						<select>
						  <option>среднее</option>
						  <option>высшее</option>
						  <option>нет</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="cv">Род занятий,<br>опыт работы</td>
					<td>
						<?php echo $form->textArea($model,'experience'); ?>
						<?php echo $form->error($model,'experience'); ?>
					</td>
				</tr>
				<tr>
					<td class="cv">Личные качества</td>
					<td>
						<?php echo $form->textArea($model,'qualities'); ?>
						<?php echo $form->error($model,'qualities'); ?>
					</td>
				</tr>
				<tr>
					<td class="cv">Хобби,<br>особые навыки</td>
					<td>
						<?php echo $form->textArea($model,'hobby'); ?>
						<?php echo $form->error($model,'hobby'); ?>
					</td>
				</tr>
				<tr>
					<td class="cv">Цель сотрудничества</td>
					<td>
						<?php echo $form->textArea($model,'purpose'); ?>
						<?php echo $form->error($model,'purpose'); ?>
					</td>
				</tr>
			</table>

	<div class="row" style="display:none;">
		<?php echo $form->labelEx($model,'marital'); ?>
		<?php echo $form->textField($model,'marital',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'marital'); ?>
	</div>

	<div class="row" style="display:none;">
		<?php echo $form->labelEx($model,'education'); ?>
		<?php echo $form->textField($model,'education',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'education'); ?>
	</div>

			<div class="txt">Творческие работы</div>
			<table class="tab" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td width="128">Демо-запись</td>
					<td>
						<?php echo $form->fileField($model,'demo',array('class'=>'file')); ?>
					</td>
				</tr>
			</table>
			<div class="txt">Фотографии</div>
			<table class="tab" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td width="128">Портрет</td>
					<td>
						<?php echo $form->fileField($model,'portrait',array('class'=>'file')); ?>
					</td>
				</tr>
				<tr>
					<td width="128">Полный рост</td>
					<td>
						<?php echo $form->fileField($model,'fulllengthportrait',array('class'=>'file')); ?>
					</td>
				</tr>
			</table>
			<div class="send-f">
				<center>
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'send-b', 'value'=>'')); ?>
				</center>
			</div>

<?php $this->endWidget(); ?>

</div>