
<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'multas-form',
	'htmlOptions' => array('class' => 'well', 'style'=>'background-color: rgb(174, 222, 170);'),
	'enableAjaxValidation'=>true,
)); ?>

<div class="row">
<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>
</div>

<?php echo $form->errorSummary($model); ?>

<div class="row">
	<div class="form-group col-md-6">
	<?php echo $form->textFieldGroup($model,'id_multas',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','readonly'=>'readonly')))); ?>
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
	<div class="form-group col-md-6">
	<?php echo $form->textFieldGroup($model,'monto',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','readonly'=>'readonly')))); ?>
	</div>
	<div class="form-group col-md-6">
	<?php echo $form->textFieldGroup($model,'descripcion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','readonly'=>'readonly')))); ?>
	</div>
</div>

<?php $this->endWidget(); ?>
