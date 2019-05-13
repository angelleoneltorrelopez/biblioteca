<?php
$this->breadcrumbs=array(
	'Bitacora'=>array('index'),
	$model->id_bitacora=>array('view','id'=>$model->id_bitacora),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'Listar Bitacora','icon'=>'list-alt','url'=>array('index')),
	array('label'=>'Crear Bitacora','icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Vista Bitacora','icon'=>'eye-open','url'=>array('view','id'=>$model->id_bitacora)),
	array('label'=>'Buscar Bitacora','icon'=>'search','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Bitacora <?php echo $model->id_bitacora; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>