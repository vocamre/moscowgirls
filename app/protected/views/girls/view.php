<?php
$this->breadcrumbs=array(
	'Girls'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Girls', 'url'=>array('index')),
	array('label'=>'Create Girls', 'url'=>array('create')),
	array('label'=>'Update Girls', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Girls', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Girls', 'url'=>array('admin')),
);
?>

<h1>View Girls #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'day',
		'year',
		'month',
		'phone',
		'email',
		'height',
		'weight',
		'param1',
		'param2',
		'param3',
		'marital',
		'education',
		'experience',
		'qualities',
		'hobby',
		'purpose',
		'demo',
		'portrait',
		'fulllengthportrait',
		'rating',
	),
)); 

echo '<img src="'.$model->portrait.'" />';
?>


