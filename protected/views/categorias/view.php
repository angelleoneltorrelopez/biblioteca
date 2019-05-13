<?php
$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	$model->id_categorias,
);

$this->menu=array(
array('label'=>'Listar Categorias','icon'=>'list-alt','url'=>array('index')),
array('label'=>'Crear Categorias','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Borrar Categorias','icon'=>'remove-sign','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_categorias),'confirm'=>'¿Seguro que quieres eliminar este elemento?')),
array('label'=>'Actualizar Categorias','icon'=>'refresh','url'=>array('update','id'=>$model->id_categorias)),
array('label'=>'Buscar Categorias','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Vista Categorias #<?php echo $model->id_categorias; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
	'id_categorias',
	'nombre_categoria',
),
)); ?>
