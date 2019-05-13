<?php
$this->breadcrumbs=array(
	'Tags'=>array('index'),
	$model->id_tags,
);

$this->menu=array(
array('label'=>'Listar Tags','icon'=>'list-alt','url'=>array('index')),
array('label'=>'Crear Tags','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Borrar Tags','icon'=>'remove-sign','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tags),'confirm'=>'¿Seguro que quieres eliminar este elemento?')),
array('label'=>'Actualizar Tags','icon'=>'refresh','url'=>array('update','id'=>$model->id_tags)),
array('label'=>'Buscar Tags','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Vista Tags #<?php echo $model->id_tags; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_tags',
		'nombre_tags',
		array(
 		'name'=>'id_categoria',
 		'value'=>$model->idCategoria->nombre_categoria,
 		),
		'',
),
)); ?>
