<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_prestamo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_prestamo),array('view','id'=>$data->id_prestamo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_libro')); ?>:</b>
	<?php echo CHtml::encode($data->codigoLibro->nombre_libro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_visitante')); ?>:</b>
	<?php echo CHtml::encode($data->idVisitante->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_salida')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_salida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_maxima')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_maxima); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_devolucion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_devolucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>