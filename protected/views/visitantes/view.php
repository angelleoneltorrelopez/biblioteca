<?php
$this->breadcrumbs=array(
	'Visitantes'=>array('index'),
	$model->id_visitante,
);

$this->menu=array(
array('label'=>'Listar Visitantes','icon'=>'list-alt','url'=>array('index')),
array('label'=>'Crear Visitantes','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Borrar Visitantes','icon'=>'remove-sign','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_visitante),'confirm'=>'¿Seguro que quieres eliminar este elemento?')),
array('label'=>'Actualizar Visitantes','icon'=>'refresh','url'=>array('update','id'=>$model->id_visitante)),
array('label'=>'Buscar Visitantes','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Vista Visitantes #<?php echo $model->id_visitante; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_visitante',
		'nombre',
		'apellidos',
		'direccion',
		'telefono',
		'fecha_nacimiento',
		array(
	 	'name'=>'ocupacion',
		'value'=>$model->ocupacion0->ocupacion,
	 	 ),
		'institucion',
),
)); ?>
