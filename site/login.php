<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div class="container-fluid">
<div class="row">
	<div class="col-12 col-sm-4 bg-light" style="padding:25px;">
	<h1 style="font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;
    font-weight: 700;"
	>Login</h1>

	<p style="font-size: 17px;
    font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;"
	>Complete el siguiente formulario con sus credenciales de inicio de sesión:</p>

    </div>
	<div class="col-12 col-sm-8" style="padding:80px; padding-top:50px;padding-bottom:50px;"> 
		
			
		<div class="form">
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'login-form',
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
		<?php echo $form->labelEx($model,'password',$htmloptions=array('style'=>'font-size:14px;')); ?>
		<?php echo $form->passwordField($model,'password',$htmloptions=array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'password',$htmloptions=array('class'=>'text-danger')); ?>
		
	</div>

	<div class="row rememberMe">
		<?php echo $form->label($model,'rememberMe'); ?>:
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
	<div class="row">

	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login',$htmloptions=array('class'=>'btn btn-lg btn-block',
	'style'=>'weight:50px;background-color:#0aeba5; hover:#0aeba0; font-size:17px; font-weight:bold;    font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;')); ?>
	</div>
	<br>

	<?php echo $recup;?>
<?php $this->endWidget(); ?>
</div><!-- form -->

		
	</div>




</div>

</div>