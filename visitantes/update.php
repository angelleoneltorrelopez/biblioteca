<?php
$this->breadcrumbs=array(
	'Visitantes'=>array('admin'),
	$model->id_visitante=>array('view','id'=>$model->id_visitante),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'Crear Visitantes','icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Vista Visitantes','icon'=>'eye-open','url'=>array('view','id'=>$model->id_visitante)),
	array('label'=>'Buscar Visitantes','icon'=>'search','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Visitantes <?php echo $model->id_visitante; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
