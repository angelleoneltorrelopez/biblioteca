<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_visitante')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_visitante),array('view','id'=>$data->id_visitante)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->apellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_nacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ocupacion')); ?>:</b>
	<?php echo CHtml::encode($data->ocupacion0->ocupacion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('institucion')); ?>:</b>
	<?php echo CHtml::encode($data->institucion); ?>
	<br />

	*/ ?>

</div>