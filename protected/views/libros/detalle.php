<?php
$this->breadcrumbs=array(
	'Libros'=>array('site/libros'),
	$model->nombre_libro,
);

?>

<h1 style="margin:50px; font-size: 40px;
    font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;
    font-weight: 700;">Libro: <?php echo " ".$model->nombre_libro; ?></h1>

<?php echo $this->renderPartial('_detalle', array('model'=>$model)); ?>