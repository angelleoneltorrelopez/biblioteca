<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_categorias')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_categorias),array('view','id'=>$data->id_categorias)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_categoria')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_categoria); ?>
	<br />


</div>
