<?php
/* @var $this UsuarioController */

$this->breadcrumbs=array(
	'Password',
);
?>
<h1 style="font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;
    font-weight: 700;"
	>Restablecer tu contraseña</h1>

<h4>
Ingresa y confirma tu nueva contraseña
</h4>

<br>
<br>
<div class="container">

	<div class="row text-info">
	<?php if(Yii::app()->user->hasFlash('fine')): ?>
			<div class="flash-success" style="font-size: 14px;
			font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;">
			<?php echo TbHtml::alert(TbHtml::ALERT_COLOR_SUCCESS, 'Sus datos han sido actualizados'); ?>
			</div>
		<?php endif;?>	</div>
	<div class="row justify-content-center">
				
		<div class="form">

				<?php $form=$this->beginWidget('CActiveForm', array(
			
					'enableClientValidation'=>true,
					'clientOptions'=>array(
						'validateOnSubmit'=>true,
					),
				)); ?>

					<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

					<?php echo $form->errorSummary($model); ?>
					<div class="row form-group justify-content-center">
					<div class="col-12 col-sm-6">
					<?php echo $form->labelEx($model,'nueva',$htmloptions=array('style'=>'font-size:14px;')); ?>
						<?php echo $form->PasswordField($model,'nueva',$htmloptions=array('class'=>'form-control')); ?>
						<?php echo $form->error($model,'nueva',$htmloptions=array('class'=>'text-danger')); ?>
					</div>
					</div>

					<div class="row form-group justify-content-center">
					<div class="col-12 col-sm-6 ">
						<?php echo $form->labelEx($model,'confirm',$htmloptions=array('style'=>'font-size:14px;')); ?>
						<?php echo $form->PasswordField($model,'confirm',$htmloptions=array('class'=>'form-control')); ?>
						<?php echo $form->error($model,'confirm',$htmloptions=array('class'=>'text-danger')); ?>
					<div>
					</div>
					<br>
					

					<div class="row buttons">
					<div class="col-12 col-sm-6">
					<?php echo CHtml::submitButton('Restablecer mi contraseña',$htmloptions=array('class'=>'btn btn-lg btn-block',
					'style'=>'weight:50px;background-color:#0aeba5; hover:#0aeba0; font-size:17px; font-weight:bold;    font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;')); ?>
					</div>
					</div>

					<?php $this->endWidget(); ?>
		</div><!-- form -->
			
		
	

	</div>
</div>
