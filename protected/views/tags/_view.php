<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'tags-form',
	'htmlOptions' => array('class' => 'well', 'style'=>'background-color: rgb(174, 222, 170);'),
	'enableAjaxValidation'=>false,
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="row">
	<div class="form-group col-md-6">
	<?php echo $form->textFieldGroup($model,'id_tags',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','readonly'=>'readonly')))); ?>
	</div>
	<div class="form-group col-md-6">
	<?php echo $form->textFieldGroup($model,'nombre_tags',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','readonly'=>'readonly')))); ?>
	</div>
	<div class="form-group col-md-6">
	<?php echo $form->labelEx( $model,'id_categoria', array('class'=>'className') ); ?>
	<?php $this->widget('bootstrap.widgets.TbSelect2',array(
					'model'=>$model,
					'attribute'=>'id_categoria',
					'data'=>CHtml::listData(Categorias::model()->findAll(array('order'=>'nombre_categoria')), 'id_categorias', 'nombre_categoria'),
					'options' => array('width' => '100%'),
					'disabled' => true,
	)); ?>
	</div>
</div>

<?php $this->endWidget(); ?>
