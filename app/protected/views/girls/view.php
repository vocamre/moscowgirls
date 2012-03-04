<?php
$this->breadcrumbs=array(
	'Girls'=>array('index'),
	$model->name,
);

?>

<div class="cont-head anketa">АНКЕТА УЧАСТНИЦЫ</div>
	<div class="scroll-pane" style="padding-top:0px;">
		<div class="cont-body" >
			<center><?php echo '<img width="200" src="'.$model->portrait.'" />'; ?></center>
			<div class="txt">Контактные данные</div>
			<table class="tab" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td width="128">Имя и фамилия</td>
					<td>
						<?php echo $model->name; ?>
					</td>
				</tr>
				<tr>
					<td>Дата рождения</td>
					<td>
						<?php echo $model->day; ?>
						<?php echo $model->month; ?>
						<?php echo $model->year; ?>
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
			</table>

			<div class="txt">Творческие работы</div>
			<table class="tab" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td width="128">Демо-запись</td>
					<td>
						<?php echo $model->demo; ?>
					</td>
				</tr>
			</table>
			<div class="txt">Фотографии</div>
			<table class="tab" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td width="128">Портрет</td>
					<td>
						<?php echo $model->portrait; ?>
					</td>
				</tr>
				<tr>
					<td width="128">Полный рост</td>
					<td>
						<?php echo $model->fulllengthportrait; ?>
					</td>
				</tr>
				<tr>
					<td width="128">Рейтинг</td>
					<td>
						<?php echo $model->rating; ?>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="cont-foot"></div>


