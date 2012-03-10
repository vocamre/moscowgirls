<?php
$this->breadcrumbs=array(
	'Girls'=>array('index'),
	$model->name,
);

?>

<div class="cont-head anketa">АНКЕТА УЧАСТНИЦЫ</div>
	<div class="scroll-pane" style="padding-top:0px;">
		<div class="cont-body" >
			<center>
			<a target="_blank" href="<?php echo substr($model->portrait,0,strrpos($model->portrait,".")).'_big.'.end(explode(".", $model->portrait)); ?>">
				<?php echo '<img width="200" src="'.$model->portrait.'" />'; ?>
			</a>
			</center>
			<div class="txt">Контактные данные</div>
			<table class="tab" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td width="128">Имя и фамилия</td>
					<td>
						<?php echo $model->name; ?>
					</td>
				</tr>
				<tr>
					<td>Гражданство</td>
					<td>
						<?php echo $model->nationality; ?>
					</td>
				</tr>
				<tr>
					<td>Место фактического проживания</td>
					<td>
						<?php echo $model->registration; ?>
					</td>
				</tr>
				<tr>
					<td>Дата рождения</td>
					<td>
						<?php echo $model->day.'  '.$model->month.'  '.$model->year; ?> 
					</td>
				</tr>
				<tr>
					<td>Номер телефона</td>
					<td>
						<?php echo $model->phone; ?>
					</td>
				</tr>
				<tr>
					<td>E-mail</td>
					<td>
						<?php echo $model->email; ?>
					</td>
				</tr>
	</table>
	<div class="txt">Антропометрические данные</div>
			<table class="tab" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td width="128">Рост</td>
					<td>
						<?php echo $model->height; ?> см
					</td>
				</tr>
				<tr>
					<td>Вес</td>
					<td>
						<?php echo $model->weight; ?> кг
					</td>
				</tr>
				<tr>
					<td>Параметры</td>
					<td>
						<?php echo $model->param1; ?> х 
						<?php echo $model->param2; ?> х
						<?php echo $model->param3; ?>						
					</td>
				</tr>
	</table>
	<div class="txt">Расскажите о себе</div>
			<table class="tab" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td width="128">Семейное положение</td>
					<td>
						<?php echo $model->marital; ?>
					</td>
				</tr>
				<tr>
					<td>Образование</td>
					<td>
						<?php echo $model->education; ?>
					</td>
				</tr>
				<tr>
					<td class="cv">Род занятий,<br>опыт работы</td>
					<td>
						<?php echo $model->experience; ?>
					</td>
				</tr>
				<tr>
					<td class="cv">Личные качества</td>
					<td>
						<?php echo $model->qualities; ?>
					</td>
				</tr>
				<tr>
					<td class="cv">Хобби,<br>особые навыки</td>
					<td>
						<?php echo $model->hobby; ?>
					</td>
				</tr>
				<tr>
					<td class="cv">Цель сотрудничества</td>
					<td>
						<?php echo $model->purpose; ?>
					</td>
				</tr>
				<tr>
					<td class="cv">Есть ли действующие контракты-договоры с ПЦ, рекламными агентствами и т.п.</td>
					<td>
						<?php echo $model->contracts; ?>
					</td>
				</tr>
			</table>

			<div class="txt">Творческие работы</div>
			<table class="tab" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td>Ссылки на аудио или видео с вашим участием</td>
					<td>
						<?php echo $model->links; ?>
					</td>
				</tr>
			
				<tr>
					<td width="128">Демо-запись</td>
					<td>
					
					<div class="player">
							<object type="application/x-shockwave-flash" data="http://flv-mp3.com/i/pic/ump3player_500x70.swf" height="43" width="287"><param name="wmode" value="transparent" /><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><param name="movie" value="http://flv-mp3.com/i/pic/ump3player_500x70.swf" /><param name="FlashVars" value="way=<?php echo $model->demo; ?>&amp;swf=http://flv-mp3.com/i/pic/ump3player_500x70.swf&amp;w=287&amp;h=43&amp;time_seconds=164&amp;autoplay=0&amp;q=1&amp;skin=white&amp;volume=70&amp;comment=" /></object>
						</div>
					</td>
				</tr>
			</table>
			<div class="txt">Фотографии</div>
			<table class="tab" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td width="128">Портрет</td>
					<td>
						<a target="_blank" href="<?php echo substr($model->portrait,0,strrpos($model->portrait,".")).'_big.'.end(explode(".", $model->portrait)); ?>">
						<?php echo '<img width="200" src="'.$model->portrait.'" />'; ?>
						</a>
					</td>
				</tr>
				<tr>
					<td width="128">Полный рост</td>
					<td>
					<a target="_blank" href="<?php echo substr($model->fulllengthportrait,0,strrpos($model->fulllengthportrait,".")).'_big.'.end(explode(".", $model->fulllengthportrait)); ?>">
						<?php echo '<img width="200" src="'.$model->fulllengthportrait.'" />'; ?>
					</a>
					</td>
				</tr>
				<?php /*
				<tr>
					<td width="128">Рейтинг</td>
					<td>
						<?php echo $model->rating; ?>
					</td>
				</tr>
				
				*/?>
			</table>
		</div>
	</div>
	<div class="cont-foot"></div>


