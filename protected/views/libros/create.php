<?php
$this->breadcrumbs=array(
	'Libros'=>array('index'),
	'Crear',
);

$this->menu=array(
array('label'=>'Listar Libros','icon'=>'list-alt','url'=>array('index')),
array('label'=>'Busqueda Libros','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Crear Libros</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
