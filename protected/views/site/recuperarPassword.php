<?php

$this->pageTitle=Yii::app()->name . ' - Recuperar Contraseña';
$this->breadcrumbs=array(
	'Recuperar Contraseña',
);
?>
<div class="container-fluid">
<div class="row">
	<div class="col-12 col-sm-4 bg-light" style="padding:25px;">
	<h1 style="font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;
    font-weight: 700;"
	>Recuperación de Contraseña</h1>

	<p style="font-size: 17px;
    font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;"
	>Complete el siguiente formulario para enviar un correo a su cuenta para recuperación de contraseña:</p>

    </div>
	<div class="col-12 col-sm-8" style="padding:80px; padding-top:50px;padding-bottom:50px;"> 
		
			<div class="row text-info">
			<?php if(Yii::app()->user->hasFlash('send')): ?>
					
					<div class="flash-success" style="font-size: 14px;
					font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;">
					<?php echo TbHtml::alert(TbHtml::ALERT_COLOR_SUCCESS, 'Enhorabuena!,le hemos enviado un mensaje a su correo electronico con las instrucciones para
				recuperar su contraseña'); ?>
					</div>

			<?php endif;?>
				<?php if(Yii::app()->user->hasFlash('error_usuario')): ?>
				
				<div class="flash-success" style="font-size: 14px;
				font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;">
				<?php echo TbHtml::alert(TbHtml::ALERT_COLOR_DANGER, 'Error,el usuario no existe'); ?>
				</div>

		<?php endif;?>
		<?php if(Yii::app()->user->hasFlash('error_send')): ?>
				
				<div class="flash-success" style="font-size: 14px;
				font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;">
				<?php echo TbHtml::alert(TbHtml::ALERT_COLOR_DANGER, 'Error al enviar el forumario'); ?>
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
				<?php echo $form->labelEx($model,'username',$htmloptions=array('style'=>'font-size:14px;')); ?>
				<?php echo $form->textField($model,'username',$htmloptions=array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'username',$htmloptions=array('class'=>'text-danger')); ?>
			</div>
            <div class="row form-group">
				<?php echo $form->labelEx($model,'email',$htmloptions=array('style'=>'font-size:14px;')); ?>
				<?php echo $form->textField($model,'email',$htmloptions=array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'email',$htmloptions=array('class'=>'text-danger')); ?>
			</div>

            <?php if(CCaptcha::checkRequirements()): ?>

            <div class="row form-group">
            <?php echo $form->labelEx($model,'verifyCode'); ?>

                    <?php $this->widget('CCaptcha'); ?>
                    <?php echo $form->textField($model,'verifyCode',$htmloptions=array('class'=>'form-control')); ?>
                    <?php echo $form->error($model,'verifyCode',$htmloptions=array('class'=>'text-danger')); ?>

                  
               
          
             
                <div class="text-info">
                Por favor, introduzca el texto como es mostrado en la imagen de arriba.
                <br/>Las letras no distingue entre mayusculas y minusculas
               </div>
            </div>
            <?php endif; ?>

            

	<div class="row buttons">
		<?php echo CHtml::submitButton('Enviar correo',$htmloptions=array('class'=>'btn btn-lg btn-block',
	'style'=>'weight:50px;background-color:#0aeba5; hover:#0aeba0; font-size:17px; font-weight:bold;    font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;')); ?>
	</div>
	
	
<?php $this->endWidget(); ?>
</div><!-- form -->
