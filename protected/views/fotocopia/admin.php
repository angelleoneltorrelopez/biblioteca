<?php
$this->breadcrumbs=array(
	'Fotocopias',
	'Buscar',
);

$this->menu=array(
array('label'=>'Crear Fotocopia', 'icon'=>'plus-sign', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('fotocopia-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Busqueda Fotocopias</h1>
<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/images/pdf.png",'PDF',array("title"=>"Exportar a PDF")),array("generarpdf"));?>
<p>
	Exportar a PDF.
</p>
<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'fotocopia-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_fotocopia',
		array(
		'name'=>'id_visitante',
		'value'=>'$data->idVisitante->nombre',
		),
		array(
		'name'=>'id_libro',
		'value'=>'$data->idLibro->nombre_libro',
		),
		'cantidad',
		'fecha',
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
