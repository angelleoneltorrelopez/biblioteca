<?php
$this->breadcrumbs=array(
	'Prestamos'=>array('admin'),
	$model->id_prestamo=>array('view','id'=>$model->id_prestamo),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'Crear Prestamos','icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Vista Prestamos','icon'=>'eye-open','url'=>array('view','id'=>$model->id_prestamo)),
	array('label'=>'Buscar Prestamos','icon'=>'search','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Prestamos <?php echo $model->id_prestamo; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
