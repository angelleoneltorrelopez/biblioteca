<?php
$this->breadcrumbs=array(
	'Libros'=>array('admin'),
	$model->id_libro,
);

$this->menu=array(
array('label'=>'Crear Libros','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Borrar Libros','icon'=>'remove-sign','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_libro),'confirm'=>'¿Seguro que quieres eliminar este elemento?')),
array('label'=>'Actualizar Libros','icon'=>'refresh','url'=>array('update','id'=>$model->id_libro)),
array('label'=>'Buscar Libros','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Vista Libros #<?php echo $model->id_libro; ?></h1>

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>
