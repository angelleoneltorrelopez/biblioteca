<?php
$this->breadcrumbs=array(
	'Usuarios',
	'Buscar',
);

$this->menu=array(
array('label'=>'Crear Usuarios', 'icon'=>'plus-sign', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('usuarios-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Busqueda Usuarios</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'usuarios-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id',
		'username',
		'password',
		'email',
		'role',
array(
'class'=>'booster.widgets.TbButtonColumn',
	'buttons'=>array(
				
				'update'=>array(
			
					'visible'=>'false',
					

				),

			),
),
),
)); ?>
