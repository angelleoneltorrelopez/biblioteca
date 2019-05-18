<?php
$this->breadcrumbs=array(
	'Multas',
	'Buscar',
);

$this->menu=array(
array('label'=>'Crear Multas', 'icon'=>'plus-sign', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('multas-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Busqueda Multas</h1>
<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/images/pdf.png",'PDF',array("title"=>"Exportar a PDF")),array("generarpdf"));?>
<p>
	Exportar a PDF.
</p>
<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'multas-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_multas',
		array(
		'name'=>'id_visitante',
		'value'=>'$data->idVisitante->nombre',
		),
		'monto',
		'descripcion',
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
