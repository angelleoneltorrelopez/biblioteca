<?php
/* @var $this UsuarioController */

$this->breadcrumbs=array(
	'Config',
);
?>
	<h1 style="font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;
    font-weight: 700;"
	>Configuración de la Cuenta</h1>

<h4>
Información básica de la cuenta
</h4>
<p>
Estas configuraciones incluyen información básica sobre tu cuenta.
</p>
<br>
<br>
<div class="container">

	<div class="row text-info">
		<?php if(Yii::app()->user->hasFlash('error')): ?>
			<div class="flash-success" style="font-size: 14px;
			font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;">
			<?php echo TbHtml::alert(TbHtml::ALERT_COLOR_DANGER, 'Error en la actualizacion'); ?>
			</div>
		<?php endif;?>
		<?php if(Yii::app()->user->hasFlash('error_correo')): ?>
			<div class="flash-success" style="font-size: 14px;
			font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;">
			<?php echo TbHtml::alert(TbHtml::ALERT_COLOR_DANGER, 'Este correo ya ha sido usado en otra cuenta.'); ?>
			</div>
		<?php endif;?>
		<?php if(Yii::app()->user->hasFlash('fine')): ?>
			<div class="flash-success" style="font-size: 14px;
			font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;">
			<?php echo TbHtml::alert(TbHtml::ALERT_COLOR_SUCCESS, 'Sus datos han sido actualizados'); ?>
			</div>
		<?php endif;?>
		
	</div>
	<div class="row">
				
		<div class="form">

				<?php $form=$this->beginWidget('CActiveForm', array(
			
					'enableClientValidation'=>true,
					'clientOptions'=>array(
						'validateOnSubmit'=>true,
					),
				)); ?>

					<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

					<?php echo $form->errorSummary($model); ?>
					<?php $model->username=$usuario->username;?>
					<div class="row form-group">
					<div class="col-12 col-sm-6">
					<?php echo $form->labelEx($model,'username',$htmloptions=array('style'=>'font-size:14px;')); ?>
						<?php echo $form->textField($model,'username',$htmloptions=array('class'=>'form-control','readonly'=>'readonly')); ?>
						<?php echo $form->error($model,'username',$htmloptions=array('class'=>'text-danger')); ?>
					</div>
					<div class="col-12 col-sm-6" style="padding-top:20px;">
					<label class="text-info">El nombre que lo identifica en <?php echo Yii::app()->name?> . No puede cambiar el nombre de usuario.</label>

					</div>
					</div>

					<div class="row form-group">
					<?php $model->email=$usuario->email;?>
					<div class="col-12 col-sm-6">
						<?php echo $form->labelEx($model,'email',$htmloptions=array('style'=>'font-size:14px;')); ?>
						<?php echo $form->textField($model,'email',$htmloptions=array('class'=>'form-control')); ?>
						<?php echo $form->error($model,'email',$htmloptions=array('class'=>'text-danger')); ?>
					</div>
						<div class="col-12 col-sm-6" style="padding-top:20px;">
						<label class="text-info">Recibe mensajes de <?php echo Yii::app()->name?> en esta dirección.</label>
						</div>
					</div>


					<div class="row buttons">
					<div class="col-12 col-sm-6">
					<?php echo CHtml::submitButton('Actualizar',$htmloptions=array('class'=>'btn btn-lg btn-block',
					'style'=>'weight:50px;background-color:#0aeba5; hover:#0aeba0; font-size:17px; font-weight:bold;    font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;')); ?>
					</div>
					</div>

					<?php $this->endWidget(); ?>
		</div><!-- form -->
			
		
	

	</div>
</div>
