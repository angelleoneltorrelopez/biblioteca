<?php
$this->breadcrumbs=array(
	'Prestamos',
);

$this->menu=array(
array('label'=>'Crear Prestamos','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Buscar Prestamos','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Prestamos</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
