<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'Crear Usuarios','icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Vista Usuarios','icon'=>'eye-open','url'=>array('view','id'=>$model->id)),
	array('label'=>'Buscar Usuarios','icon'=>'search','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Usuarios <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
