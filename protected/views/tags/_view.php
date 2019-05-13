<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_tags')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tags),array('view','id'=>$data->id_tags)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_tags')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_tags); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_categoria')); ?>:</b>
	<?php echo CHtml::encode($data->idCategoria->nombre_categoria); ?>
	<br />


</div>