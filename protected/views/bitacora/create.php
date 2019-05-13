<?php
$this->breadcrumbs=array(
	'Bitacora'=>array('index'),
	'Crear',
);

$this->menu=array(
array('label'=>'Listar Bitacora','icon'=>'list-alt','url'=>array('index')),
array('label'=>'Busqueda Bitacora','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Crear Bitacora</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>