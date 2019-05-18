<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'fotocopia-form',
	'htmlOptions' => array('class' => 'well', 'style'=>'background-color: rgb(170, 205, 222);'),
	'enableAjaxValidation'=>true,
)); ?>

<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

<?php echo $form->errorSummary($model); ?>
<div class="row">
    <div class="form-group col-md-6">
	<?php echo $form->labelEx($model,'id_visitante',array('class'=>'className') ); ?>
	<?php $this->widget('bootstrap.widgets.TbSelect2',array(
						'model'=>$model,
						'attribute'=>'id_visitante',
						'data'=>CHtml::listData(Visitantes::model()->findAll(array('order'=>'nombre')), 'id_visitante', 'nombre'),
						'options' => array('width' => '100%',),
				)); ?>

    </div>
		<div class="form-group col-md-6">
	<?php echo $form->labelEx($model,'id_libro',array('class'=>'className') ); ?>
	<?php $this->widget('bootstrap.widgets.TbSelect2',array(
								'model'=>$model,
								'attribute'=>'id_libro',
								'data'=>CHtml::listData(Libros::model()->findAll(array('order'=>'nombre_libro')), 'id_libro', 'nombre_libro'),
								'options' => array('width' => '100%',),
				)); ?>
    </div>
		</div>
		<div class="row">
    <div class="form-group col-md-6">
	<?php echo $form->textFieldGroup($model,'cantidad',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>
	</div>

<div class="form-group col-md-6">
<?php echo  $form->textFieldGroup($model,'fecha',array('widgetOptions'=>array('options'=>array('language' =>'es','format'=>'yyyy-mm-dd'),'htmlOptions'=>array('class'=>'span5',
'value'=>date('Y-m-d'),'readOnly'=>'readOnly')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>')); ?>
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
