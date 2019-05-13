<?php
$this->breadcrumbs=array(
	'Pais'=>array('index'),
	$model->id_pais=>array('view','id'=>$model->id_pais),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'Listar Pais','icon'=>'list-alt','url'=>array('index')),
	array('label'=>'Crear Pais','icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Vista Pais','icon'=>'eye-open','url'=>array('view','id'=>$model->id_pais)),
	array('label'=>'Buscar Pais','icon'=>'search','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Pais <?php echo $model->id_pais; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>