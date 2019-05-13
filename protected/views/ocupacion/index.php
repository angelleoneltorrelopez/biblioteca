<?php
$this->breadcrumbs=array(
	'Ocupacion',
);

$this->menu=array(
array('label'=>'Crear Ocupacion','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Buscar Ocupacion','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Ocupacion</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
