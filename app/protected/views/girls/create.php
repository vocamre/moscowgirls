<?php
$this->breadcrumbs=array(
	'Girls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Girls', 'url'=>array('index')),
	array('label'=>'Manage Girls', 'url'=>array('admin')),
);
?>

<div class="cont-head anketa">АНКЕТА УЧАСТНИЦЫ</div>
		<div class="cont-body">
				<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
		</div>
		<div class="cont-foot"></div>