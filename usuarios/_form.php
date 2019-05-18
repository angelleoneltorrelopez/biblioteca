<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'usuarios-form',
	'htmlOptions' => array('class' => 'well', 'style'=>'background-color: rgb(170, 205, 222);'),
	'enableAjaxValidation'=>true,
)); ?>
<div class="row">
<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>
</div>
<?php echo $form->errorSummary($model); ?>
<div class="row">
	<div class="form-group col-md-4">
	<?php echo $form->textFieldGroup($model,'username',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45)))); ?>
	</div>
	<div class="form-group col-md-4">
	<?php echo $form->passwordFieldGroup($model,'password',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>
	</div>
	<div class="form-group col-md-4">
	<?php echo $form->passwordFieldGroup($model,'repetir_password',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>
	</div>
</div>

<div class="form-group col-md-12">
</div>

<div class="row">
	<div class="form-group col-md-4">
	<?php echo $form->textFieldGroup($model,'email',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>90)))); ?>
	</div>
	<div class="form-group col-md-4">
	<?php echo $form->labelEx( $model,'role', array('label'=>'Role','class'=>'className') ); ?>
		<?php $this->widget('bootstrap.widgets.TbSelect2',array(
						'model'=>$model,
						'attribute'=>'role',
						'data'=>CHtml::listData(Roles::model()->findAll(array('order'=>'description')), 'name', 'description'),
						'options' => array(
												'width' => '100%',),
		)); ?>
	</div>
</div>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Actualizar',
			'icon'=>$model->isNewRecord ? 'plus-sign' : 'refresh',
		)); ?>
</div>
<?php $this->endWidget(); ?>
