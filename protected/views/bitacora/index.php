<?php
$this->breadcrumbs=array(
	'Bitacora',
);

$this->menu=array(
array('label'=>'Crear Bitacora','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Buscar Bitacora','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Bitacora</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
