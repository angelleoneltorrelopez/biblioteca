<?php
$this->breadcrumbs=array(
	'Visitantes',
	'Buscar',
);

$this->menu=array(
array('label'=>'Crear Visitantes', 'icon'=>'plus-sign', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('visitantes-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Busqueda Visitantes</h1>
<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/images/pdf.png",'PDF',array("title"=>"Exportar a PDF")),array("generarpdf"));?>
<p>
	Exportar a PDF.
</p>
<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'visitantes-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'identificador',
		'nombre',
		'apellidos',
		'direccion',
		'telefono',
		'fecha_nacimiento',
		array(
		'name'=>'ocupacion',
		'value'=>'$data->ocupacion0->ocupacion',
		),
		'institucion',
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
