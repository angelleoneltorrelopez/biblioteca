<?php
$this->breadcrumbs=array(
	'Libros'=>array('index'),
	$model->id_libro=>array('view','id'=>$model->id_libro),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'Listar Libros','icon'=>'list-alt','url'=>array('index')),
	array('label'=>'Crear Libros','icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Vista Libros','icon'=>'eye-open','url'=>array('view','id'=>$model->id_libro)),
	array('label'=>'Buscar Libros','icon'=>'search','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Libros <?php echo $model->id_libro; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
