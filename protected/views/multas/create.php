<?php
$this->breadcrumbs=array(
	'Multas'=>array('index'),
	'Crear',
);

$this->menu=array(
array('label'=>'Listar Multas','icon'=>'list-alt','url'=>array('index')),
array('label'=>'Busqueda Multas','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Crear Multas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>