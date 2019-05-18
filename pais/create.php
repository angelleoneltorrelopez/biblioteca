<?php
$this->breadcrumbs=array(
	'Pais'=>array('admin'),
	'Crear',
);

$this->menu=array(
array('label'=>'Busqueda Pais','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Crear Pais</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
