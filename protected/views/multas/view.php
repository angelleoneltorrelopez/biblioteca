<?php
$this->breadcrumbs=array(
	'Multas'=>array('admin'),
	$model->id_multas,
);

$this->menu=array(
array('label'=>'Crear Multas','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Borrar Multas','icon'=>'remove-sign','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_multas),'confirm'=>'¿Seguro que quieres eliminar este elemento?')),
array('label'=>'Actualizar Multas','icon'=>'refresh','url'=>array('update','id'=>$model->id_multas)),
array('label'=>'Buscar Multas','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Vista Multas #<?php echo $model->id_multas; ?></h1>

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>
