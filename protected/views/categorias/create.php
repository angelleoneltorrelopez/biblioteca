<?php
$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'Listar Categorias','icon'=>'list-alt','url'=>array('index')),
array('label'=>'Busqueda Categorias','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Crear Categorias</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
