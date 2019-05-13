<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'libros-form',
	'enableAjaxValidation'=>true,
)); ?>

<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'id_libro',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'nombre_libro',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

	<?php echo $form->textFieldGroup($model,'editorial',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45)))); ?>

	<?php echo $form->textFieldGroup($model,'autor',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45)))); ?>

	<?php echo $form->labelEx( $model,'categoria', array('class'=>'className') ); ?>
		<?php $this->widget('bootstrap.widgets.TbSelect2',array(
						'model'=>$model,
						'attribute'=>'categoria',
						'data'=>CHtml::listData(Categorias::model()->findAll(array('order'=>'nombre_categoria')), 'id_categorias', 'nombre_categoria'),
						'options' => array('width' => '100%',),
		)); ?>

	<?php echo $form->labelEx( $model,'pais_autor', array('class'=>'className') ); ?>
		<?php $this->widget('bootstrap.widgets.TbSelect2',array(
						'model'=>$model,
						'attribute'=>'pais_autor',
						'data'=>CHtml::listData(Pais::model()->findAll(array('order'=>'nombre_pais')), 'id_pais', 'nombre_pais'),
						'options' => array('width' => '100%',),
		)); ?>

	<?php echo $form->textFieldGroup($model,'numero_paginas',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->datePickerGroup($model,'año_edicion',array('widgetOptions'=>array('options'=>array('language' =>'es','format'=>'yyyy'),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Haga clic en Mes / Año para seleccionar un Mes / Año diferente.')); ?>

	<?php echo $form->textFieldGroup($model,'imagen',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textAreaGroup($model,'descripcion', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>

	<?php echo $form->textFieldGroup($model,'estado',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Actualizar',
			'icon'=>$model->isNewRecord ? 'plus-sign' : 'refresh',
		)); ?>
</div>

<?php $this->endWidget(); ?>
