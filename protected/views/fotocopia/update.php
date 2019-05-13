<?php
$this->breadcrumbs=array(
	'Fotocopias'=>array('index'),
	$model->id_fotocopia=>array('view','id'=>$model->id_fotocopia),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'Listar Fotocopia','icon'=>'list-alt','url'=>array('index')),
	array('label'=>'Crear Fotocopia','icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Vista Fotocopia','icon'=>'eye-open','url'=>array('view','id'=>$model->id_fotocopia)),
	array('label'=>'Buscar Fotocopia','icon'=>'search','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Fotocopia <?php echo $model->id_fotocopia; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>