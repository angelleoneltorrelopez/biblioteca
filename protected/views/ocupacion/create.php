<?php
$this->breadcrumbs=array(
	'Ocupacion'=>array('index'),
	'Crear',
);

$this->menu=array(
array('label'=>'Listar Ocupacion','icon'=>'list-alt','url'=>array('index')),
array('label'=>'Busqueda Ocupacion','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Crear Ocupacion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
