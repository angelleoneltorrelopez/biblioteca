<?php
$this->breadcrumbs=array(
	'Prestamos'=>array('index'),
	$model->id_prestamo,
);

$this->menu=array(
array('label'=>'Listar Prestamos','icon'=>'list-alt','url'=>array('index')),
array('label'=>'Crear Prestamos','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Borrar Prestamos','icon'=>'remove-sign','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_prestamo),'confirm'=>'¿Seguro que quieres eliminar este elemento?')),
array('label'=>'Actualizar Prestamos','icon'=>'refresh','url'=>array('update','id'=>$model->id_prestamo)),
array('label'=>'Buscar Prestamos','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Vista Prestamos #<?php echo $model->id_prestamo; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_prestamo',
		array(
		'name'=>'codigo_libro',
		'value'=>$model->codigoLibro->nombre_libro,
		),
		array(
 		'name'=>'id_visitante',
 		'value'=>$model->idVisitante->nombre,
 		),
		'fecha_salida',
		'fecha_maxima',
		'fecha_devolucion',
		'estado',
),
)); ?>
