<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_multas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_multas),array('view','id'=>$data->id_multas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_visitante')); ?>:</b>
	<?php echo CHtml::encode($data->idVisitante->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto')); ?>:</b>
	<?php echo CHtml::encode($data->monto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>