<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'prestamos-form',
	'enableAjaxValidation'=>true,
)); ?>

<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>


	<?php echo $form->labelEx( $model,'codigo_libro', array('class'=>'className') ); ?>
				<?php $this->widget('bootstrap.widgets.TbSelect2',array(
								'model'=>$model,
								'attribute'=>'codigo_libro',
								'data'=>CHtml::listData(Libros::model()->findAll(array('order'=>'nombre_libro')), 'id_libro', 'nombre_libro'),
								'options' => array('width' => '100%',),
				)); ?>

	<?php echo $form->labelEx( $model,'id_visitante', array('class'=>'className') ); ?>
		<?php $this->widget('bootstrap.widgets.TbSelect2',array(
						'model'=>$model,
						'attribute'=>'id_visitante',
						'data'=>CHtml::listData(Visitantes::model()->findAll(array('order'=>'nombre')), 'id_visitante', 'nombre'),
						'options' => array('width' => '100%',),
		)); ?>


	<?php echo $form->datePickerGroup($model,'fecha_salida',array('widgetOptions'=>array('options'=>array('language' =>'es','format'=>'yyyy-mm-dd'),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Haga clic en Mes / Año para seleccionar un Mes / Año diferente.')); ?>

	<?php echo $form->datePickerGroup($model,'fecha_maxima',array('widgetOptions'=>array('options'=>array('language' =>'es','format'=>'yyyy-mm-dd'),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Haga clic en Mes / Año para seleccionar un Mes / Año diferente.')); ?>

	<?php echo $form->datePickerGroup($model,'fecha_devolucion',array('widgetOptions'=>array('options'=>array('language' =>'es','format'=>'yyyy-mm-dd'),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Haga clic en Mes / Año para seleccionar un Mes / Año diferente.')); ?>

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
