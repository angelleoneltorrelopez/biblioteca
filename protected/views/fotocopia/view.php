<?php
$this->breadcrumbs=array(
	'Fotocopias'=>array('admin'),
	$model->id_fotocopia,
);

$this->menu=array(
array('label'=>'Crear Fotocopia','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Borrar Fotocopia','icon'=>'remove-sign','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_fotocopia),'confirm'=>'¿Seguro que quieres eliminar este elemento?')),
array('label'=>'Actualizar Fotocopia','icon'=>'refresh','url'=>array('update','id'=>$model->id_fotocopia)),
array('label'=>'Buscar Fotocopia','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Vista Fotocopia #<?php echo $model->id_fotocopia; ?></h1>

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>
