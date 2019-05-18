

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'categorias-form',
	'enableAjaxValidation'=>true,
)); ?>


<?php echo $form->errorSummary($model); ?>


<div class="well form" style="background-color: rgb(170,205,222);">
<div class="row">
		<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>
	</div>
	<div class="row">
		<div class="form-group col-md-4">
		<?php echo $form->textFieldGroup($model,'nombre_categoria',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>
		</div>
	</div>
	<div class="row">
	<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Actualizar',
			'icon'=>$model->isNewRecord ? 'plus-sign' : 'refresh',
		)); ?>
</div>
	</div>
</div>

	<?php $this->endWidget(); ?>	





