<div class="cont-head">КАСТИНГ</div>
		<div class="cont-body">
			<div class="kast-top">Кастинг будет проходить в 3 этапа:</div>
			<br>
			1 этап<br><br>
			2 этап<br><br>
			3 этап<br><br>
			Чтобы принять участие,<br>необходимо заполнить и отправить анкету участницы.
			
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'cform',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
				),
			)); ?>
			
			<div class="ch">
				<?php echo $form->checkBox($model,'fl',array('class'=>'ch-bt','value'=>'1')); ?>&nbsp; C правилами участия ознакомлена.
			</div>
			Для получения доступа к анкете введите цифры:<br><br>
			
			<div style="margin:10px;">
			<?php $this->widget('CCaptcha'); ?>
			<?php echo $form->textField($model,'verifyCode'); ?>
			</div>
			<div><?php echo $model->er; ?></div>
			
			<center><input type="submit" class="btn-ank" value=""></center>
			<?php $this->endWidget(); ?>
		</div>
		<div class="cont-foot"></div>