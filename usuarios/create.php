<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('admin'),
	'Crear',
);
?>
<div class="container">
<?php

$this->menu=array(
$htmloptions=array('class'=>'row','width'=>'100%;'),
array('label'=>'Busqueda Usuarios','icon'=>'search','url'=>array('admin')),
);
?>
</div>
<h1>Crear Usuarios</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
