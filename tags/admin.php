<?php
$this->breadcrumbs=array(
	'Tags',
	'Buscar',
);

$this->menu=array(
array('label'=>'Crear Tags', 'icon'=>'plus-sign', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('tags-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Busqueda Tags</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'tags-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_tags',
		'nombre_tags',
		array(
		'name'=>'id_categoria',
		'value'=>'$data->idCategoria->nombre_categoria',
		),
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
