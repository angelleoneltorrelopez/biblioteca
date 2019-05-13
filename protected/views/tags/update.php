<?php
$this->breadcrumbs=array(
	'Tags'=>array('index'),
	$model->id_tags=>array('view','id'=>$model->id_tags),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'Listar Tags','icon'=>'list-alt','url'=>array('index')),
	array('label'=>'Crear Tags','icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Vista Tags','icon'=>'eye-open','url'=>array('view','id'=>$model->id_tags)),
	array('label'=>'Buscar Tags','icon'=>'search','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Tags <?php echo $model->id_tags; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>