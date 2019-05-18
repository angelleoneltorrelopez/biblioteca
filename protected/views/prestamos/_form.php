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
								'data'=>CHtml::listData(Libros::model()->findAll(array('condition'=>'estado = 0','order'=>'nombre_libro')), 'id_libro', 'nombre_libro'),
								'options' => array('width' => '100%',),
				)); ?>
</div>
		<div class="form-group col-md-6">
	<?php echo $form->labelEx( $model,'id_visitante', array('class'=>'className') ); ?>
		<?php $this->widget('bootstrap.widgets.TbSelect2',array(
						'model'=>$model,
						'attribute'=>'id_visitante',
						'data'=>CHtml::listData(Visitantes::model()->findAll(array('order'=>'nombre')), 'id_visitante', 'nombre'),
						'options' => array('width' => '100%',),
		)); ?>
		</div>
</div>

<div class="row">
    <div class="form-group col-md-4">
	<?php echo $form->datePickerGroup($model,'fecha_salida',array('widgetOptions'=>array('options'=>array('language' =>'es','format'=>'yyyy-mm-dd'),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>')); ?>
</div>
		<div class="form-group col-md-4">
	<?php echo $form->datePickerGroup($model,'fecha_maxima',array('widgetOptions'=>array('options'=>array('language' =>'es','format'=>'yyyy-mm-dd'),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>')); ?>
</div>
	<?php echo $form->hiddenField($model,'fecha_devolucion',array('value'=>'')); ?></div>
	<?php echo $form->hiddenField($model,'estado',array('value'=>'1')); ?>


<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Actualizar',
			'icon'=>$model->isNewRecord ? 'plus-sign' : 'refresh',
		)); ?>
</div>
</div>
<?php $this->endWidget(); ?>
