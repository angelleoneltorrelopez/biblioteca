<?php
$this->breadcrumbs=array(
	'Visitantes',
);

$this->menu=array(
array('label'=>'Crear Visitantes','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Buscar Visitantes','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Visitantes</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
