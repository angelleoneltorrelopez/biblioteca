<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_fotocopia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_fotocopia),array('view','id'=>$data->id_fotocopia)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_visitante')); ?>:</b>
	<?php echo CHtml::encode($data->idVisitante->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_libro')); ?>:</b>
	<?php echo CHtml::encode($data->idLibro->nombre_libro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />


</div>