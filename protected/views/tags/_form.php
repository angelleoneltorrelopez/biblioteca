 <?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'tags-form',
	'enableAjaxValidation'=>true,
)); ?>
<?php echo $form->errorSummary($model); ?>


<div class="well form" style="background-color: rgb(170,205,222);">
<div class="row">
	<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>
	</div>

<div class="row">
	<div class="form-group col-md-4">
		<?php echo $form->textFieldGroup($model,'nombre_tags',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>
	</div>
	<div class="form-group col-md-4">
	<?php echo $form->labelEx( $model,'id_categoria', array('class'=>'className') ); ?>
		<?php $this->widget('bootstrap.widgets.TbSelect2',array(
						'model'=>$model,
						'attribute'=>'id_categoria',
						'data'=>CHtml::listData(Categorias::model()->findAll(array('order'=>'nombre_categoria')), 'id_categorias', 'nombre_categoria'),
						'options' => array('width' => '100%',),
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
</div>

<?php $this->endWidget(); ?>