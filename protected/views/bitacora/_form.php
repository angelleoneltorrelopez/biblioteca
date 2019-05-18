<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'bitacora-form',
	'htmlOptions' => array('class' => 'well', 'style'=>'background-color: rgb(170, 205, 222);'),
	'enableAjaxValidation'=>true,
)); ?>

<div class="row">
<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>
</div>
<?php echo $form->errorSummary($model); ?>
<div class="row", width="20%">
		<div class="form-group col-md-6">
		<?php echo $form->labelEx( $model,'id_visitante', array('class'=>'className') ); ?>
		<?php $this->widget('bootstrap.widgets.TbSelect2',array('model'=>$model,'attribute'=>'id_visitante','data'=>CHtml::listData(Visitantes::model()->findAll(array('order'=>'nombre')), 'id_visitante', 'nombre'),'options' => array('width' => '100%',),	)); ?>
		</div>
		<div class="form-group col-md-6">
		<?php echo $form->labelEx( $model,'id_libro', array('class'=>'className') ); ?>
		<?php $this->widget('bootstrap.widgets.TbSelect2',array('model'=>$model,'attribute'=>'id_libro','data'=>CHtml::listData(Libros::model()->findAll(array('order'=>'nombre_libro')), 'id_libro', 'nombre_libro'),'options' => array('width' => '100%',),)); ?>
		</div>

		<div class="form-group col-md-4">
		<?php echo $form->labelEx( $model,'hora_ingreso', array('class'=>'className') ); ?>
		<?php $this->widget('bootstrap.widgets.TbTimePicker',array('model'=>$model,'attribute'=>'hora_ingreso','name'=>'hora_ingreso','options' => array('language' => 'es','showMeridian'=>false,'minuteStep'=>1),'noAppend'=>true,)); ?>
		</div>
		<div class="form-group col-md-4">
		<?php echo $form->labelEx( $model,'hora_salida', array('class'=>'className') ); ?>
		<?php $this->widget('bootstrap.widgets.TbTimePicker',array('model'=>$model,'attribute'=>'hora_salida','name'=>'hora_salida','options' => array('language' => 'es','showMeridian'=>false,'minuteStep'=>1),'noAppend'=>true,)); ?>
		</div>
		<div class="form-group col-md-4">
		<?php echo  $form->textFieldGroup($model,'fecha',array('widgetOptions'=>array('options'=>array('language' =>'es','format'=>'yyyy-mm-dd'),'htmlOptions'=>array('class'=>'span5',
		'value'=>date('Y-m-d'),'readOnly'=>'readOnly')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>')); ?>
		    </div>

<div class="form-group col-md-8">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Actualizar',
			'icon'=>$model->isNewRecord ? 'plus-sign' : 'refresh',
		)); ?>
</div>

<?php $this->endWidget(); ?>
