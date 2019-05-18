
<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'libros-form',
	'htmlOptions' => array('class' => 'well', 'style'=>'background-color: rgb(174, 222, 170);'),
	'enableAjaxValidation'=>false,
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="row">
	<div class="form-group col-md-4">
		<?php echo $form->textFieldGroup($model,'nombre_libro',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255,'readonly'=>'readonly')))); ?>
	</div>
	<div class="form-group col-md-4">
		<?php echo $form->textFieldGroup($model,'editorial',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45,'readonly'=>'readonly')))); ?>
	</div>
	<div class="form-group col-md-4">
		<?php echo $form->textFieldGroup($model,'autor',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>45,'readonly'=>'readonly')))); ?>
	</div>
</div>

	<div class="row">
		<div class="form-group col-md-4">
			<?php echo $form->labelEx( $model,'categoria', array('class'=>'className') ); ?>
			<?php $this->widget('bootstrap.widgets.TbSelect2',array(
							'model'=>$model,
							'attribute'=>'categoria',
							'data'=>CHtml::listData(Categorias::model()->findAll(array('order'=>'nombre_categoria')), 'id_categorias', 'nombre_categoria'),
							'options' => array('width' => '100%'),
							'disabled' => true,
			)); ?>
		</div>
		<div class="form-group col-md-4">
			<?php echo $form->labelEx( $model,'pais_autor', array('class'=>'className') ); ?>
			<?php $this->widget('bootstrap.widgets.TbSelect2',array(
							'model'=>$model,
							'attribute'=>'pais_autor',
							'data'=>CHtml::listData(Pais::model()->findAll(array('order'=>'nombre_pais')), 'id_pais', 'nombre_pais'),
							'options' => array('width' => '100%'),
							'disabled' => true,
			)); ?>
		</div>
		<div class="form-group col-md-4">
			<?php echo $form->textFieldGroup($model,'numero_paginas',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','readonly'=>'readonly')))); ?>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-4">
			<?php echo $form->textFieldGroup($model,'año_edicion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','readonly'=>'readonly')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>')); ?>
</div>

	<div class="form-group col-md-8">
			<?php echo $form->textAreaGroup($model,'descripcion', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8','readonly'=>'readonly')))); ?>
	</div>
	</div>

<?php $this->endWidget(); ?>
