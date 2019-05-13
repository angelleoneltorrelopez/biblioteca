<?php
$this->breadcrumbs=array(
	'Usuarios',
);
?>
<div class="container">

<?php
$this->menu=array(
$htmloptions=array('class'=>'row','style'=>'width:100%;'),
array('label'=>'Crear Usuarios','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Buscar Usuarios','icon'=>'search','url'=>array('admin')),
);
?>
</div>

<h1>Usuarios</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
