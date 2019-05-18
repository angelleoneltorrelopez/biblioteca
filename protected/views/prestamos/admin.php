<?php
$this->breadcrumbs=array(
	'Prestamos',
	'Buscar',
);

$this->menu=array(
array('label'=>'Crear Prestamos', 'icon'=>'plus-sign', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('prestamos-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Busqueda Prestamos</h1>
<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/images/pdf.png",'PDF',array("title"=>"Exportar a PDF")),array("generarpdf"));?>
<p>
	Exportar a PDF.
</p>
<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'prestamos-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_prestamo',
		array(
		'name'=>'codigo_libro',
		'value'=>'$data->codigoLibro->nombre_libro',
		),
		array(
		'name'=>'id_visitante',
		'value'=>'$data->idVisitante->nombre',
		),
		'fecha_salida',
		'fecha_maxima',
		'fecha_devolucion',
		array(
			'name' => 'estado',
			'filter' => array('0'=>'Disponible','1'=>'No Disponible'),
			'value'=> function($model){
					if ($model->estado == 0) {	$result = "Disponible";	}
					if ($model->estado == 1) {	$result = "No Disponible";	}
											return $result;

							}
				),
array(
'class'=>'booster.widgets.TbButtonColumn',
),
array(
	'class'=>'booster.widgets.TbButtonColumn',
	// Template to set order of buttons
	'template' => '{signed}',
	'buttons' => array(
		'signed' => array(

			'label' => 'Devolucion',     // text label of the button
			'url'=>'Yii::app()->createUrl("/prestamos/devo", array("id"=>$data["id_prestamo"]))',
			'options' => array('class'=>'btn btn-danger btn-sm'), // HTML options for the button tag
		),

	),
),
),
)); ?>
