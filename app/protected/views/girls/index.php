<?php
$this->breadcrumbs=array(
	'Girls',
);

$this->menu=array(
	array('label'=>'Create Girls', 'url'=>array('create')),
	array('label'=>'Manage Girls', 'url'=>array('admin')),
);
?>

<h1>Girls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
