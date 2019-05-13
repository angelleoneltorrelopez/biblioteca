<?php
$this->breadcrumbs=array(
	'Fotocopias'=>array('index'),
	$model->id_fotocopia,
);

$this->menu=array(
array('label'=>'Listar Fotocopia','icon'=>'list-alt','url'=>array('index')),
array('label'=>'Crear Fotocopia','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Borrar Fotocopia','icon'=>'remove-sign','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_fotocopia),'confirm'=>'¿Seguro que quieres eliminar este elemento?')),
array('label'=>'Actualizar Fotocopia','icon'=>'refresh','url'=>array('update','id'=>$model->id_fotocopia)),
array('label'=>'Buscar Fotocopia','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Vista Fotocopia #<?php echo $model->id_fotocopia; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_fotocopia',
		array(
 		'name'=>'id_visitante',
 		'value'=>$model->idVisitante->nombre,
 		),
		array(
		'name'=>'id_libro',
		'value'=>$model->idLibro->nombre_libro,
		),
		'cantidad',
		'fecha',
),
)); ?>
