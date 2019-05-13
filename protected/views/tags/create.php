<?php
$this->breadcrumbs=array(
	'Tags'=>array('index'),
	'Crear',
);

$this->menu=array(
array('label'=>'Listar Tags','icon'=>'list-alt','url'=>array('index')),
array('label'=>'Busqueda Tags','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Crear Tags</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>