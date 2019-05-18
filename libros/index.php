<?php
$this->breadcrumbs=array(
	'Libros',
);

$this->menu=array(
array('label'=>'Crear Libros','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Buscar Libros','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Libros</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
