<?php

$this->pageTitle=Yii::app()->name . ' - Recuperar Contraseña';
$this->breadcrumbs=array(
	'Restablacer Contraseña',
);
?>
<div class="container-fluid">
<div class="row">
	<div class="col-12 col-sm-4 bg-light" style="padding:25px;">
	<h1 style="font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;
    font-weight: 700;"
	>Restablecer Contraseña</h1>

	<p style="font-size: 17px;
    font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;"
	>Complete el siguiente formulario el restablecimiento de su contraseña:</p>

    </div>
	<div class="col-12 col-sm-8" style="padding:80px; padding-top:50px;padding-bottom:50px;"> 
		
			<div class="row text-info">

			<?php if(Yii::app()->user->hasFlash('send')): ?>
					
					<div class="flash-success" style="font-size: 14px;
					font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;">
					<?php echo TbHtml::alert(TbHtml::ALERT_COLOR_SUCCESS, 'Enhorabuena!, la contraseña ha sido restablecida correctamente, redireccionando a la página de inicio de sesión ...'); ?>
					</div>

			<?php endif;?>
			<?php if(Yii::app()->user->hasFlash('error')): ?>
					
					<div class="flash-success" style="font-size: 14px;
					font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;">
					<?php echo TbHtml::alert(TbHtml::ALERT_COLOR_DANGER, 'Los datos proporcionados son incorrectos!'); ?>
					</div>

			<?php endif;?>
			
            </div>
		<div class="form">



			<?php $form=$this->beginWidget('CActiveForm', array(
                'method'=>'POST',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
				),
			)); ?>

			<p class="note">Campos con <span class="required">*</span> son requeridos.</p>
			<div class="row form-group">
				<?php echo $form->labelEx($model,'email',$htmloptions=array('style'=>'font-size:14px;')); ?>
				<?php echo $form->textField($model,'email',$htmloptions=array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'email',$htmloptions=array('class'=>'text-danger')); ?>
			</div>

			<div class="row form-group">
				<?php echo $form->labelEx($model,'password',$htmloptions=array('style'=>'font-size:14px;')); ?>
				<?php echo $form->passwordField($model,'password',$htmloptions=array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'password',$htmloptions=array('class'=>'text-danger')); ?>
		
			</div>

			<div class="row form-group">

				<?php echo $form->labelEx($model,'password_repeat',$htmloptions=array('style'=>'font-size:14px;')); ?>
				<?php echo $form->passwordField($model,'password_repeat',$htmloptions=array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'password_repeat',$htmloptions=array('class'=>'text-danger')); ?>

			</div>
			<div class="row form-group">
				<?php echo $form->labelEx($model,'verification_code',$htmloptions=array('style'=>'font-size:14px;')); ?>
				<?php echo $form->textField($model,'verification_code',$htmloptions=array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'verification_code',$htmloptions=array('class'=>'text-danger')); ?>
			</div>
			<div class="row form-group">

				 <?php echo $form->hiddenField($model,'recover',array('type'=>"hidden")); ?>

			</div>

            

	<div class="row buttons">
		<?php echo CHtml::submitButton('Restablecer',$htmloptions=array('class'=>'btn btn-lg btn-block',
	'style'=>'weight:50px;background-color:#0aeba5; hover:#0aeba0; font-size:17px; font-weight:bold;    font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;')); ?>
	</div>
	
	
<?php $this->endWidget(); ?>
</div><!-- form -->
