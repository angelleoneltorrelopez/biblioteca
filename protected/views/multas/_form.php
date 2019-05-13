<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'multas-form',
	'enableAjaxValidation'=>true,
)); ?>

<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->labelEx( $model,'id_visitante', array('class'=>'className') ); ?>
		<?php $this->widget('bootstrap.widgets.TbSelect2',array(
						'model'=>$model,
						'attribute'=>'id_visitante',
						'data'=>CHtml::listData(Visitantes::model()->findAll(array('order'=>'nombre')), 'id_visitante', 'nombre'),
						'options' => array('width' => '100%',),
		)); ?>

	<?php echo $form->textFieldGroup($model,'monto',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'descripcion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Actualizar',
			'icon'=>$model->isNewRecord ? 'plus-sign' : 'refresh',
		)); ?>
</div>

<?php $this->endWidget(); ?>
