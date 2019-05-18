<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'bitacora-form',
	'htmlOptions' => array('class' => 'well', 'style'=>'background-color: rgb(174, 222, 170);'),
	'enableAjaxValidation'=>true,
)); ?>
<div class="row">

</div>

<div class="row">
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
	<div class="form-group col-md-6">
	<?php echo $form->labelEx( $model,'id_libro', array('class'=>'className') ); ?>
				<?php $this->widget('bootstrap.widgets.TbSelect2',array(
								'model'=>$model,
								'attribute'=>'id_libro',
								'data'=>CHtml::listData(Libros::model()->findAll(array('order'=>'nombre_libro')), 'id_libro', 'nombre_libro'),
								'options' => array('width' => '100%'),
								'disabled' => true,
				)); ?>
	</div>
	
	<div class="form-group col-md-6">
	<?php echo $form->textFieldGroup($model,'hora_ingreso',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','readonly'=>'readonly')))); ?>
	</div>
	<div class="form-group col-md-6">
	<?php echo $form->textFieldGroup($model,'hora_salida',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','readonly'=>'readonly')))); ?>
	</div>

</div>

<?php $this->endWidget(); ?>
