<div class="cont-head">КАСТИНГ</div>
<div class="scroll-pane">
		<div class="cont-body">
			<?php echo $page->content; ?>
		<div style="height:200px; margin-bottom:0px;">
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'cform',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
				),
			)); ?>

			
			<div class="ch">
				<input class="btn-ank-ch"  name="PreAnketa[fl]" type="checkbox" value="111">&nbsp; C правилами участия ознакомлена.
			</div>
			Для получения доступа к анкете введите цифры:<br><br>
			
			<div style="margin:10px; width:303px; margin:0 auto;">
				<?php $this->widget('CCaptcha'); ?>
				<?php echo $form->textField($model,'verifyCode'); ?>
			</div>
			<div style="margin:10px"><?php echo $model->er; ?></div>
			<br>
			
			
			<div style="height:40px;"><center><input type="submit" class="btn-ank no-act" value=""></center></div>
			<?php $this->endWidget(); ?>
			
		</div>
		</div>
</div>
		<div class="cont-foot"></div>