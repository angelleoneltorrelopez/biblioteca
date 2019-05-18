<?php
$this->breadcrumbs=array(
	'Ocupacion',
	'Buscar',
);

$this->menu=array(
array('label'=>'Crear Ocupacion', 'icon'=>'plus-sign', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('ocupacion-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Busqueda Ocupacion</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'ocupacion-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_ocupacion',
		'ocupacion',
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
