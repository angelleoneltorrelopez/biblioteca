<?php
$this->breadcrumbs=array(
	'Ocupacion'=>array('admin'),
	'Crear',
);

$this->menu=array(
array('label'=>'Busqueda Ocupacion','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Crear Ocupacion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
