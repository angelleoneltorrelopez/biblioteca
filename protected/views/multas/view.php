<?php
$this->breadcrumbs=array(
	'Multas'=>array('index'),
	$model->id_multas,
);

$this->menu=array(
array('label'=>'Listar Multas','icon'=>'list-alt','url'=>array('index')),
array('label'=>'Crear Multas','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Borrar Multas','icon'=>'remove-sign','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_multas),'confirm'=>'¿Seguro que quieres eliminar este elemento?')),
array('label'=>'Actualizar Multas','icon'=>'refresh','url'=>array('update','id'=>$model->id_multas)),
array('label'=>'Buscar Multas','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Vista Multas #<?php echo $model->id_multas; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_multas',
		array(
 		'name'=>'id_visitante',
 		'value'=>$model->idVisitante->nombre,
 		),
		'monto',
		'descripcion',
),
)); ?>
