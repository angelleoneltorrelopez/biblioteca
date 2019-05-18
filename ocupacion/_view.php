<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'ocupacion-form',
	'htmlOptions' => array('class' => 'well', 'style'=>'background-color: rgb(174, 222, 170);'),
	'enableAjaxValidation'=>true,
)); ?>

<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'ocupacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255, 'readonly'=>'readonly')))); ?>

<?php $this->endWidget(); ?>
