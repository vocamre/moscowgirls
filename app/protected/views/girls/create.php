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

<h1>Create Girls</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>