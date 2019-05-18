<?php
$this->breadcrumbs=array(
	'Visitantes'=>array('admin'),
	'Crear',
);

$this->menu=array(
array('label'=>'Busqueda Visitantes','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Crear Visitantes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
