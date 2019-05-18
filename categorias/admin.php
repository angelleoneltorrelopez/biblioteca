<?php
$this->breadcrumbs=array(
	'Categorias',
	'Buscar',
);

$this->menu=array(
array('label'=>'Crear Categorias', 'icon'=>'plus-sign', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('categorias-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Busqueda Categorias</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'categorias-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
	'id_categorias',
	'nombre_categoria',
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
