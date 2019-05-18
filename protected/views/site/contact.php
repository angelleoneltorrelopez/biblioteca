<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contacto';
$this->breadcrumbs=array(
	'Contacto',
);
?>
<div class="container-fluid">
    <div class="row">
	<?php if(Yii::app()->user->hasFlash('contact')): ?>
	<h1 class="text-center" style="font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;
    font-weight: 700;">Contactanos</h1>
						<div class="flash-success" style="font-size: 17px;
    font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;">
	<?php echo TbHtml::alert(TbHtml::ALERT_COLOR_SUCCESS, '¡Gracias por contactarnos! Te responderemos tan pronto como sea posible'); ?>
	</div>

					<?php else: ?>
	<div class="col-12 col-sm-4 bg-light" style="padding:25px;">
	<h1 style="font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;
    font-weight: 700;">Contactanos</h1>

	<p style="font-size: 17px;
    font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;">
	Si tienes preguntas o quieres compartirnos algo, por favor llena el siguiente formularios. Gracias.
	</p>
	
    </div>
	<div class="col-12 col-sm-8" style="padding:80px; padding-top:50px;padding-bottom:50px;"> 

				
			<div class="form">

				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'contact-form',
					'enableClientValidation'=>true,
					'clientOptions'=>array(
						'validateOnSubmit'=>true,
					),
				)); ?>

					<p class="note">Fields with <span class="required">*</span> are required.</p>

					<?php echo $form->errorSummary($model); ?>

					<div class="row form-group">
						<?php echo $form->labelEx($model,'name',$htmloptions=array('style'=>'font-size:14px;')); ?>
						<?php echo $form->textField($model,'name',$htmloptions=array('class'=>'form-control')); ?>
						<?php echo $form->error($model,'name',$htmloptions=array('class'=>'text-danger')); ?>
					</div>

					<div class="row form-group">
						<?php echo $form->labelEx($model,'email',$htmloptions=array('style'=>'font-size:14px;')); ?>
						<?php echo $form->textField($model,'email',$htmloptions=array('class'=>'form-control')); ?>
						<?php echo $form->error($model,'email',$htmloptions=array('class'=>'text-danger')); ?>
					</div>

					<div class="row form-group">
						<?php echo $form->labelEx($model,'subject',$htmloptions=array('style'=>'font-size:14px;')); ?>
						<?php echo $form->textField($model,'subject',$htmloptions=array('class'=>'form-control'),array('size'=>60,'maxlength'=>128)); ?>
						<?php echo $form->error($model,'subject',$htmloptions=array('class'=>'text-danger')); ?>
					</div>

					<div class="row form-group">
						<?php echo $form->labelEx($model,'body',$htmloptions=array('style'=>'font-size:14px;')); ?>
						<?php echo $form->textArea($model,'body',$htmloptions=array('class'=>'form-control'),array('rows'=>30, 'cols'=>50)); ?>
						<?php echo $form->error($model,'body',$htmloptions=array('class'=>'text-danger')); ?>
					</div>


					<div class="row buttons">
					<?php echo CHtml::submitButton('Enviar correo',$htmloptions=array('class'=>'btn btn-lg btn-block',
					'style'=>'weight:50px;background-color:#0aeba5; hover:#0aeba0; font-size:17px; font-weight:bold;    font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;')); ?>
					</div>

					<?php $this->endWidget(); ?>
				</div><!-- form -->
				<?php endif; ?>
				</div>
</div>
