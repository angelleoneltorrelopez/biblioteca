<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_ocupacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_ocupacion),array('view','id'=>$data->id_ocupacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ocupacion')); ?>:</b>
	<?php echo CHtml::encode($data->ocupacion); ?>
	<br />


</div>