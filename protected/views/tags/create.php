<?php
$this->breadcrumbs=array(
	'Tags'=>array('admin'),
	'Crear',
);

$this->menu=array(
array('label'=>'Busqueda Tags','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Crear Tags</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
