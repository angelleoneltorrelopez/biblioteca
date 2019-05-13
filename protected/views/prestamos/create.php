<?php
$this->breadcrumbs=array(
	'Prestamos'=>array('index'),
	'Crear',
);

$this->menu=array(
array('label'=>'Listar Prestamos','icon'=>'list-alt','url'=>array('index')),
array('label'=>'Busqueda Prestamos','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Crear Prestamos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
