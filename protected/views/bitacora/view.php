<?php
$this->breadcrumbs=array(
	'Bitacora'=>array('admin'),
	$model->id_bitacora,
);

$this->menu=array(
array('label'=>'Crear Bitacora','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Borrar Bitacora','icon'=>'remove-sign','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_bitacora),'confirm'=>'¿Seguro que quieres eliminar este elemento?')),
array('label'=>'Actualizar Bitacora','icon'=>'refresh','url'=>array('update','id'=>$model->id_bitacora)),
array('label'=>'Buscar Bitacora','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Vista Bitacora #<?php echo $model->id_bitacora; ?></h1>

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>