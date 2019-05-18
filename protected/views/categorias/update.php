<?php
$this->breadcrumbs=array(
	'Categorias'=>array('admin'),
	$model->id_categorias=>array('view','id'=>$model->id_categorias),
	'Update',
);

	$this->menu=array(
	array('label'=>'Crear Categorias','icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Vista Categorias','icon'=>'eye-open','url'=>array('view','id'=>$model->id_categorias)),
	array('label'=>'Buscar Categorias','icon'=>'search','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Categorias <?php echo $model->id_categorias; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
