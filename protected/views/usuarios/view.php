<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('admin'),
	$model->id,
);

$this->menu=array(
array('label'=>'Crear Usuarios','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Borrar Usuarios','icon'=>'remove-sign','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Seguro que quieres eliminar este elemento?')),
array('label'=>'Buscar Usuarios','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Vista Usuarios #<?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>
