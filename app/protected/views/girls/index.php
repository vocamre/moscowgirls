<?php
$this->breadcrumbs=array(
	'Girls',
);

$this->menu=array(
	array('label'=>'Create Girls', 'url'=>array('create')),
	array('label'=>'Manage Girls', 'url'=>array('admin')),
);
?>

<div class="cont-head">УЧАСТНИЦЫ</div>
		<div class="cont-body">
			<b>Уважаемые члены жюри!</b><br>
			Отметьте звездочкой понравившихся участниц<br>
			и нажмите кнопку ОБНОВИТЬ в конце списка!<br>

			
			
			
	<?php	foreach($dataProvider->data as $girl) {	?>
			
			<div class="g-item">
				<div class="point up"> <?php echo $girl->name; ?>, Москва</div>
				<div class="g-body">
					<div class="g-item-img"><div class="bord-img"></div>
						<img src="<?php echo $girl->portrait; ?>" width="66" height="66" border="0">
					</div>
					<div class="g-item-text">
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td width="70">Возраст:</td>
								<td> <?php echo  (date('Y')-$girl->year); ?></td>
							</tr>
							<tr>
								<td>Рост:</td>
								<td><?php echo $girl->height; ?></td>
							</tr>
						</table>
						<a href="<?php echo Yii::app()->request->baseUrl.'/index.php?r=girls/view&id='.$girl->id; ?>">Подробнее...</a>
						<div class="player">I can see.pm3</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			
			
		<?php } ?>	
			
		<div class="pagerdiv">	
		<?php $this->widget('CLinkPager',array('pages'=>$dataProvider->pagination)); ?>	
		</div>
			
			
			
			
			
			<div class="save"></div>
			
		</div>
		<div class="cont-foot"></div>
	</div>
	<div class="soc">1</div>

<?php/* $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */?>
