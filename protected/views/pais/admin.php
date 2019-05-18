<?php
$this->breadcrumbs=array(
	'Pais',
	'Buscar',
);

$this->menu=array(
array('label'=>'Crear Pais', 'icon'=>'plus-sign', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('pais-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Busqueda Pais</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'pais-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_pais',
		'nombre_pais',
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
