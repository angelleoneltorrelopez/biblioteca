<?php
$this->breadcrumbs=array(
	'Libros'=>array('index'),
	$model->id_libro,
);

$this->menu=array(
array('label'=>'Listar Libros','icon'=>'list-alt','url'=>array('index')),
array('label'=>'Crear Libros','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Borrar Libros','icon'=>'remove-sign','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_libro),'confirm'=>'¿Seguro que quieres eliminar este elemento?')),
array('label'=>'Actualizar Libros','icon'=>'refresh','url'=>array('update','id'=>$model->id_libro)),
array('label'=>'Buscar Libros','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Vista Libros #<?php echo $model->id_libro; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_libro',
		'nombre_libro',
		'editorial',
		'autor',
		array(
		'name'=>'categoria',
		'value'=>$model->categoria0->nombre_categoria,
		),
		array(
		'name'=>'pais_autor',
		'value'=>$model->paisAutor->nombre_pais,
		),
		'numero_paginas',
		'año_edicion',
		'imagen',
		'descripcion',
		'estado',
),
)); ?>
