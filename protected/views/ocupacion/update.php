<?php
$this->breadcrumbs=array(
	'Ocupacion'=>array('index'),
	$model->id_ocupacion=>array('view','id'=>$model->id_ocupacion),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'Listar Ocupacion','icon'=>'list-alt','url'=>array('index')),
	array('label'=>'Crear Ocupacion','icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Vista Ocupacion','icon'=>'eye-open','url'=>array('view','id'=>$model->id_ocupacion)),
	array('label'=>'Buscar Ocupacion','icon'=>'search','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Ocupacion <?php echo $model->id_ocupacion; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
