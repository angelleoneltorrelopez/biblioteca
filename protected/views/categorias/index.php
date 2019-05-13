<?php
$this->breadcrumbs=array(
	'Categorias',
);

$this->menu=array(
array('label'=>'Crear Categorias','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Buscar Categorias','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Categorias</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
