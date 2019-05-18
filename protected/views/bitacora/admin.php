<?php
$this->breadcrumbs=array(
	'Bitacora',
	'Buscar',
);

$this->menu=array(
array('label'=>'Crear Bitacora', 'icon'=>'plus-sign', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('bitacora-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Busqueda Bitacora</h1>
<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/images/pdf.png",'PDF',array("title"=>"Exportar a PDF")),array("generarpdf"));?>
<p>
	Exportar a PDF.
</p>
<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'bitacora-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_bitacora',
	    array(
		'name'=>'id_visitante',
		'value'=>'$data->idVisitante->nombre',
		),
		array(
		'name'=>'id_libro',
		'value'=>'$data->idLibro->nombre_libro',
		),
		'hora_ingreso',
		'hora_salida',
		'fecha',
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
