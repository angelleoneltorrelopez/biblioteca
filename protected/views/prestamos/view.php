<?php
$this->breadcrumbs=array(
	'Prestamos'=>array('admin'),
	$model->id_prestamo,
);

$this->menu=array(
array('label'=>'Crear Prestamos','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Borrar Prestamos','icon'=>'remove-sign','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_prestamo),'confirm'=>'¿Seguro que quieres eliminar este elemento?')),
array('label'=>'Actualizar Prestamos','icon'=>'refresh','url'=>array('update','id'=>$model->id_prestamo)),
array('label'=>'Buscar Prestamos','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Vista Prestamos #<?php echo $model->id_prestamo; ?></h1>

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>
