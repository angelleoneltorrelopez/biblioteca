<?php
$this->breadcrumbs=array(
	'Prestamos'=>array('admin'),
	'Crear',
);

$this->menu=array(
array('label'=>'Busqueda Prestamos','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Crear Prestamos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
