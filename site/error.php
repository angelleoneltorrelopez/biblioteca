<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>


<h2>Error <?php echo $code; ?></h2>

<div style="padding-bottom:200px;" class="error">
<?php echo TbHtml::blockAlert(TbHtml::ALERT_COLOR_INFO, CHtml::encode($message)); ?>
<?php// echo CHtml::encode($message); ?>

</div>
