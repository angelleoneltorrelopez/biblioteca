<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<?php 
$this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
		array('image'=>'https://www.creuna.com/globalassets/--finland/blog/responsive-episerver-image-resizer.png', 'label'=>'Excelencia', 'caption'=>'Mantener las altas expectativas del cliente ante cualquier información'),		
		array('image'=>'https://www.creuna.com/globalassets/--finland/blog/responsive-episerver-image-resizer.png', 'label'=>'Conciencia Social', 'caption'=>'Contribuir al desarrollo socioeconómico y cultural de nuestra región'),
    array('image'=>'https://www.creuna.com/globalassets/--finland/blog/responsive-episerver-image-resizer.png', 'label'=>'Calidad de Servicio', 'caption'=>'Promover altos niveles de rentabilidad y bienestar en nuestros colaboradores'),
	),
	
));?> 

