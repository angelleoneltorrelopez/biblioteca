<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'prestamos-form',
	'htmlOptions' => array('class' => 'well', 'style'=>'background-color: rgb(170, 205, 222);'),
	'enableAjaxValidation'=>true,
)); ?>

<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

<div class="row">
    <div class="form-group col-md-6">
	<?php echo $form->labelEx( $model,'codigo_libro', array('class'=>'className') ); ?>
				<?php $this->widget('bootstrap.widgets.TbSelect2',array(
								'model'=>$model,
								'attribute'=>'codigo_libro',
								'data'=>CHtml::listData(Libros::model()->findAll(array('order'=>'nombre_libro')), 'id_libro', 'nombre_libro'),
								'options' => array('width' => '100%'),
								'disabled' => true,
				)); ?>
</div>
		<div class="form-group col-md-6">
	<?php echo $form->labelEx( $model,'id_visitante', array('class'=>'className') ); ?>
		<?php $this->widget('bootstrap.widgets.TbSelect2',array(
						'model'=>$model,
						'attribute'=>'id_visitante',
						'data'=>CHtml::listData(Visitantes::model()->findAll(array('order'=>'nombre')), 'id_visitante', 'nombre'),
						'options' => array('width' => '100%'),
						'disabled' => true,
		)); ?>
		</div>
</div>

<div class="row">
    <div class="form-group col-md-4">
	<?php echo $form->textFieldGroup($model,'fecha_salida',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','readonly'=>'readonly')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>')); ?>
</div>
		<div class="form-group col-md-4">
	<?php echo $form->textFieldGroup($model,'fecha_maxima',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','readonly'=>'readonly')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>')); ?>
</div>
<div class="form-group col-md-4">
	<?php echo $form->datePickerGroup($model,'fecha_devolucion',array('widgetOptions'=>array('options'=>array('language' =>'es','format'=>'yyyy-mm-dd'),'htmlOptions'=>array('class'=>'span2')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>')); ?>
</div>
</div>
	<?php echo $form->hiddenField($model,'estado',array('value'=>'0')); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Aceptar',
			'icon'=>$model->isNewRecord ? 'plus-sign' : 'refresh',
		)); ?>
</div>

<?php $this->endWidget(); ?>
