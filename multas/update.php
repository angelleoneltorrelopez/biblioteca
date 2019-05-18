<?php
$this->breadcrumbs=array(
	'Multas'=>array('admin'),
	$model->id_multas=>array('view','id'=>$model->id_multas),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'Crear Multas','icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Vista Multas','icon'=>'eye-open','url'=>array('view','id'=>$model->id_multas)),
	array('label'=>'Buscar Multas','icon'=>'search','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Multas <?php echo $model->id_multas; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
