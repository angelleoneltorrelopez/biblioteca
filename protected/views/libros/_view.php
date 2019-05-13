<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_libro')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_libro),array('view','id'=>$data->id_libro)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_libro')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_libro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('editorial')); ?>:</b>
	<?php echo CHtml::encode($data->editorial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('autor')); ?>:</b>
	<?php echo CHtml::encode($data->autor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoria')); ?>:</b>
	<?php echo CHtml::encode($data->categoria0->nombre_categoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pais_autor')); ?>:</b>
	<?php echo CHtml::encode($data->paisAutor->nombre_pais); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_paginas')); ?>:</b>
	<?php echo CHtml::encode($data->numero_paginas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('año_edicion')); ?>:</b>
	<?php echo CHtml::encode($data->año_edicion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen')); ?>:</b>
	<?php echo CHtml::encode($data->imagen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />



</div>
