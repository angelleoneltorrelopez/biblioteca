<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_pais')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pais),array('view','id'=>$data->id_pais)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_pais')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_pais); ?>
	<br />


</div>