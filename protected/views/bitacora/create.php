<?php
$this->breadcrumbs=array(
	'Bitacora'=>array('admin'),
	'Crear',
);

$this->menu=array(
array('label'=>'Busqueda Bitacora','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Crear Bitacora</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>