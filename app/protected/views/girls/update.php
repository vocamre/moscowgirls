<?php
$this->breadcrumbs=array(
	'Girls'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Girls', 'url'=>array('index')),
	array('label'=>'Create Girls', 'url'=>array('create')),
	array('label'=>'View Girls', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Girls', 'url'=>array('admin')),
);
?>

<h1>Update Girls <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>