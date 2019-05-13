<?php
$this->breadcrumbs=array(
	'Multas',
);

$this->menu=array(
array('label'=>'Crear Multas','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Buscar Multas','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Multas</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
