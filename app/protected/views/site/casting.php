<div class="cont-head">КАСТИНГ</div>
<div class="scroll-pane">
		<div class="cont-body">
			<div class="kast-top">«Moscow Girls»</div>
			<br>
			Компания «Kremlin Multimedia» в рамках проекта нового бренда Москвы «Wow Moscow» приглашает талантливых исполнительниц принять участие в создании музыкального проекта - группы <b>«Moscow Girls»</b>. В первую очередь нас интересуют Ваши вокальные данные и артистичная внешность. Если вы амбициозны, уверены в своем таланте и хотите добиться успеха в качестве поп-исполнительниц, то этот уникальный шанс для вас.<br><br>
			<b>Moscowgirls</b> станут неофициальными символами <i>новой</i> Москвы. Возможно, именно Вы будете носить это гордое звание. <br><br>
			<div class="kast-top">Предположительно кастинг будет проходить в два этапа</div>
			<br>
			Этапы кастинга:<br>
			<ul>
				<li>с «19» марта 2012 года по «19» апреля 2012 г прием заявок и просмотр участниц онлайн с которыми жюри встретятся уже на втором этапе кастинга;</li>
				<li>После завершение первого этапа, мы свяжемся с участницами, которые больше всего понравились нашему жюри и пригласим их на личное прослушивание. Дата и место прослушивания уточняется администратором;</li>
				<li>В случае необходимости мы оставляем за собой возможность проведения дополнительного этапа кастинга.</li>
			</ul>
		<div style="height:200px; margin-bottom:15px;">
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
			<div style="margin:10px"><?php echo $model->er; ?></div>
			
			
			
			<div style="height:40px;"><center><input type="submit" class="btn-ank" value=""></center></div>
			<?php $this->endWidget(); ?>
			
		</div>
		</div>
</div>
		<div class="cont-foot"></div>