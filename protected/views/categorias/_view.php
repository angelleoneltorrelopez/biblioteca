
<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'categorias-form',
	'htmlOptions' => array('class' => 'well', 'style'=>'background-color: rgb(174, 222, 170);'),
	'enableAjaxValidation'=>true,
)); ?>

<div class="row">
<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>
</div>

<?php echo $form->errorSummary($model); ?>

<div class="row">
	<div class="form-group col-md-6">
	<?php echo $form->textFieldGroup($model,'id_categorias',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','readonly'=>'readonly')))); ?>
	</div>
	<div class="form-group col-md-6">
	<?php echo $form->textFieldGroup($model,'nombre_categoria',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','readonly'=>'readonly')))); ?>
	</div>
</div>

<?php $this->endWidget(); ?>