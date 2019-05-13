<?php
$this->breadcrumbs=array(
	'Pais',
);

$this->menu=array(
array('label'=>'Crear Pais','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Buscar Pais','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Pais</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
