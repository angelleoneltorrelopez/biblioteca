<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldGroup($model,'id_visitante',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->textFieldGroup($model,'nombre',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

		<?php echo $form->textFieldGroup($model,'apellidos',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

		<?php echo $form->textFieldGroup($model,'direccion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45)))); ?>

		<?php echo $form->textFieldGroup($model,'telefono',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->datePickerGroup($model,'fecha_nacimiento',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click on Month/Year to select a different Month/Year.')); ?>

		<?php echo $form->textFieldGroup($model,'ocupacion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->textFieldGroup($model,'institucion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45)))); ?>

	<div class="form-actions">
		<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType' => 'submit',
			'context'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
