<?php
$this->breadcrumbs=array(
	'Fotocopias'=>array('index'),
	'Crear',
);

$this->menu=array(
array('label'=>'Listar Fotocopia','icon'=>'list-alt','url'=>array('index')),
array('label'=>'Busqueda Fotocopia','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Crear Fotocopia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>