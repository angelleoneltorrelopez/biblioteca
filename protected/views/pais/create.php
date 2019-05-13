<?php
$this->breadcrumbs=array(
	'Pais'=>array('index'),
	'Crear',
);

$this->menu=array(
array('label'=>'Listar Pais','icon'=>'list-alt','url'=>array('index')),
array('label'=>'Busqueda Pais','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Crear Pais</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>