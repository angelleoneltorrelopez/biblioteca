<?php
$this->breadcrumbs=array(
	'Pais'=>array('index'),
	'Buscar',
);

$this->menu=array(
array('label'=>'Listar Pais','icon'=>'list-alt','url'=>array('index')),
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

<p>
	Opcionalmente puede ingresar un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	o <b>=</b>) al comienzo de cada uno de sus valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

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
