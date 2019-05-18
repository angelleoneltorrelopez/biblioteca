<<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'usuarios-form',
	'htmlOptions' => array('class' => 'well', 'style'=>'background-color: rgb(174, 222, 170);'),
	'enableAjaxValidation'=>true,
)); ?>
<div class="row">
<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>
</div>
<?php echo $form->errorSummary($model); ?>
<div class="row">
	<div class="form-group col-md-4">
	<?php echo $form->textFieldGroup($model,'username',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45,'readonly'=>'readonly')))); ?>
	</div>
	<div class="form-group col-md-4">
	<?php echo $form->textFieldGroup($model,'email',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>90,'readonly'=>'readonly')))); ?>
	</div>
	<div class="form-group col-md-4">
	<?php echo $form->labelEx( $model,'role', array('label'=>'Role','class'=>'className') ); ?>
		<?php $this->widget('bootstrap.widgets.TbSelect2',array(
						'model'=>$model,
						'attribute'=>'role',
						'data'=>CHtml::listData(Roles::model()->findAll(array('order'=>'description')), 'name', 'description'),
						'options' => array('width' => '100%',),
						'disabled' => true,'readonly'=>'readonly'
		)); ?>
	</div>
</div>

<?php $this->endWidget(); ?>
