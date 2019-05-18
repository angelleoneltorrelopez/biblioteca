<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'visitantes-form',
	'htmlOptions' => array('class' => 'well', 'style'=>'background-color: rgb(170, 205, 222);'),
	'enableAjaxValidation'=>true,
)); ?>
<div class="row">
<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>
</div>
<?php echo $form->errorSummary($model); ?>
<div class="row">
    <div class="form-group col-md-4">
	<?php echo $form->textFieldGroup($model,'identificador',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
    </div>
		<div class="form-group col-md-4">
	<?php echo $form->textFieldGroup($model,'nombre',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>
    </div>
    <div class="form-group col-md-4">
	<?php echo $form->textFieldGroup($model,'apellidos',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>
    </div>
</div>

<div class="form-group col-md-12">
</div>

<div class="row">
    <div class="form-group col-md-4">
	<?php echo $form->textFieldGroup($model,'direccion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45)))); ?>
    </div>
    <div class="form-group col-md-4">
	<?php echo $form->textFieldGroup($model,'telefono',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>
		</div>
		<div class="form-group col-md-4">
	<?php echo $form->datePickerGroup($model,'fecha_nacimiento',array('widgetOptions'=>array('options'=>array('language' =>'es','format'=>'yyyy-mm-dd'),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>')); ?>
    </div>
</div>

<div class="form-group col-md-12">
</div>

<div class="row">
    <div class="form-group col-md-6">
	<?php echo $form->labelEx( $model,'ocupacion', array('class'=>'className') ); ?>
		<?php $this->widget('bootstrap.widgets.TbSelect2',array(
						'model'=>$model,
						'attribute'=>'ocupacion',
						'data'=>CHtml::listData(Ocupacion::model()->findAll(array('order'=>'ocupacion')), 'id_ocupacion', 'ocupacion'),
						'options' => array('width' => '100%',),
		)); ?>
	</div>
	<div class="form-group col-md-6">
	<?php echo $form->textFieldGroup($model,'institucion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45)))); ?>
  </div>
</div>


<div class="form-actions ">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Actualizar',
			'icon'=>$model->isNewRecord ? 'plus-sign' : 'refresh',
		)); ?>
</div>

<?php $this->endWidget(); ?>
