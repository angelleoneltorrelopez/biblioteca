<?php
$this->breadcrumbs=array(
	'Pais'=>array('admin'),
	$model->id_pais,
);

$this->menu=array(
array('label'=>'Crear Pais','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Borrar Pais','icon'=>'remove-sign','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pais),'confirm'=>'¿Seguro que quieres eliminar este elemento?')),
array('label'=>'Actualizar Pais','icon'=>'refresh','url'=>array('update','id'=>$model->id_pais)),
array('label'=>'Buscar Pais','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Vista Pais #<?php echo $model->id_pais; ?></h1>

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>
