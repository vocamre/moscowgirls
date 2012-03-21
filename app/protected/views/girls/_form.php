<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'girls-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
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
						<?php echo $form->dropDownList($model,'month',array('1'=>'январь', '2'=>'февраль', '3'=>'март', '4'=>'апрель', '5'=>'май', '6'=>'июнь', '7'=>'июль', '8'=>'август', '9'=>'сентябрь', '10'=>'октябрь', '11'=>'ноябрь', '12'=>'декабрь'), array('size'=>1,'maxlength'=>20)); ?>
						<?php echo $form->error($model,'month'); ?>
						<?php echo $form->textField($model,'year', array('style'=>'width:37px;', 'value'=>'2012')); ?>
						<?php echo $form->error($model,'year'); ?>
					</td>
				</tr>
				<tr>
					<td>Гражданство</td>
					<td>
						<?php echo $form->textField($model,'nationality',array('size'=>50,'maxlength'=>50)); ?>
						<?php echo $form->error($model,'nationality'); ?>
					</td>
				</tr>
				<tr>
					<td>Место фактического проживания</td>
					<td>
						<?php echo $form->textField($model,'registration',array('size'=>100,'maxlength'=>100)); ?>
						<?php echo $form->error($model,'registration'); ?>
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
					<?php echo $form->dropDownList($model,'marital',array('не замужем'=>'не замужем', 'замужем'=>'замужем', 'разведена'=>'разведена', 'вдова'=>'вдова', 'другое'=>'другое'), array('size'=>1,'maxlength'=>20)); ?>
					</td>
				</tr>
				<tr>
					<td>Образование</td>
					<td>
						<?php echo $form->dropDownList($model,'education',array('высшее'=>'высшее', 'неоконченное высшее'=>'неоконченное высшее', 'среднее'=>'среднее', 'нет'=>'нет', 'другое'=>'другое'), array('size'=>1,'maxlength'=>20)); ?>
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
				<tr>
					<td class="cv">Есть ли действующие контракты-договоры с ПЦ, рекламными агентствами и т.п.</td>
					<td>
						<?php echo $form->textArea($model,'contracts'); ?>
						<?php echo $form->error($model,'contracts'); ?>
					</td>
				</tr>
			</table>

	

			<div class="txt">Творческие работы</div>
			<table class="tab" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td width="128">Ссылки на аудио или видео с вашим участием</td>
					<td>
						<?php echo $form->textArea($model,'links'); ?>
						<?php echo $form->error($model,'links'); ?>
					</td>
				</tr>
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
						<?php echo $form->fileField($model,'fulllengthportrait',array('class'=>'file last-file')); ?>
					</td>
				</tr>
			</table>
			<div class="send-f">
				<center>
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'send-b no-act', 'value'=>'')); ?>
				</center>
			</div>

<?php $this->endWidget(); ?>

</div>
