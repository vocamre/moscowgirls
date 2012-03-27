<?php 
	$this->pageTitle=$page->title; 
	Yii::app()->clientScript->registerMetaTag($page->description, 'Description');
?>
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
				<input class="btn-ank-ch"  name="PreAnketa[fl]" type="checkbox" value="111">&nbsp; C <span class="btn-popup">правилами</span> участия ознакомлена.
			</div>

				<div class="popup-mes"><span>Закрыть</span><div class="clear"></div><br>
					Правила участия:<br><br>
					<ul>
						<li>Информация, которая стала Вам известна в ходе участия в проекте Moscow Girls признается конфидециальной. В случае разглашения информации организатор оставляет за собой право денежной компенсации;
</li>
						<li>Предоставляя нам личную информацию и персональный данные Вы подтверждаете свое согласие на обработку всех материалов в рамках проекта Moscow girls;</li>
						<li>Обработка и передача персональных данных осуществляется в соответствии с законодательством Российской Федерации. </li>
					</ul>
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