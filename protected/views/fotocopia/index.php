<?php
$this->breadcrumbs=array(
	'Fotocopias',
);

$this->menu=array(
array('label'=>'Crear Fotocopia','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Buscar Fotocopia','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Fotocopias</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
