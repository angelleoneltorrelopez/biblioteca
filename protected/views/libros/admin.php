<?php
$this->breadcrumbs=array(
	'Libros',
	'Buscar',
);

$this->menu=array(
array('label'=>'Crear Libros', 'icon'=>'plus-sign', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('libros-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Busqueda Libros</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'libros-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_libro',
		'nombre_libro',
		'editorial',
		'autor',
		array(
		'name'=>'categoria',
		'value'=>'$data->categoria0->nombre_categoria',
		),
		array(
		'name'=>'pais_autor',
		'value'=>'$data->paisAutor->nombre_pais',
		),
		array(
			'name' => 'estado',
			'filter' => array('0'=>'Disponible','1'=>'No Disponible'),
			'value'=> function($model){
					if ($model->estado == 0) {	$result = "Disponible";	}
					if ($model->estado == 1) {	$result = "No Disponible";	}
											return $result;

							}
				),
		/*
		'numero_paginas',
		'año_edicion',
		'imagen',
		'descripcion',
		'estado',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
