<?php
$this->breadcrumbs=array(
	'Multas'=>array('admin'),
	'Crear',
);

$this->menu=array(
array('label'=>'Busqueda Multas','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Crear Multas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
