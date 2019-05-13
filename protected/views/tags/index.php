<?php
$this->breadcrumbs=array(
	'Tags',
);

$this->menu=array(
array('label'=>'Crear Tags','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Buscar Tags','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Tags</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
