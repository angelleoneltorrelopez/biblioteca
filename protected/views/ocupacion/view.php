<?php
$this->breadcrumbs=array(
	'Ocupacion'=>array('index'),
	$model->id_ocupacion,
);

$this->menu=array(
array('label'=>'Listar Ocupacion','icon'=>'list-alt','url'=>array('index')),
array('label'=>'Crear Ocupacion','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Borrar Ocupacion','icon'=>'remove-sign','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ocupacion),'confirm'=>'¿Seguro que quieres eliminar este elemento?')),
array('label'=>'Actualizar Ocupacion','icon'=>'refresh','url'=>array('update','id'=>$model->id_ocupacion)),
array('label'=>'Buscar Ocupacion','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Vista Ocupacion #<?php echo $model->id_ocupacion; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_ocupacion',
		'ocupacion',
),
)); ?>
