<?php
$this->breadcrumbs=array(
	'Visitantes'=>array('index'),
	'Crear',
);

$this->menu=array(
array('label'=>'Listar Visitantes','icon'=>'list-alt','url'=>array('index')),
array('label'=>'Busqueda Visitantes','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Crear Visitantes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>