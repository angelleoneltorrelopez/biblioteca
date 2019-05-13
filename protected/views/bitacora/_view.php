<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_bitacora')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_bitacora),array('view','id'=>$data->id_bitacora)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_visitante')); ?>:</b>
	<?php echo CHtml::encode($data->idVisitante->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_libro')); ?>:</b>
	<?php echo CHtml::encode($data->idLibro->nombre_libro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->hora_ingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_salida')); ?>:</b>
	<?php echo CHtml::encode($data->hora_salida); ?>
	<br />


</div>
