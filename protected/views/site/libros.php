
<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Libros';
$this->breadcrumbs=array(
	'Libros',
);
?>
<div class="container-fluid">
    
    
    <div class="row">

    <h1 style="font-size: 50px;
    font-family: Neue Haas Grotesk W01 Disp,Helvetica,Arial,Nimbus Sans L,sans-serif;
    font-weight: 700;">Libros
<?php echo $msg;?></h1>


    
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-4 col-md-2">
    <a class="btn btn-outline-dark inf" href="#info1">
    Búsqueda
  </a>
    </div>
    <div class="col-xs-4 col-md-2">
      <a href="#info2" class="inf">Búsqueda Avanzada
</a>
    </div>
  
  </div>
  <!-- contenido informacion adicional -->
  <div class="row">
    <div id="info1" class="col-xs-12 well oculto">
    <div class="form">

        <?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
           
            'enableAjaxValidation'=>true,
        )); ?>

        <?php echo $form->errorSummary($model); ?>
        <div class="row">
            <div class="form-group col-md-10">
            <?php echo $form->textFieldGroup($model,'buscar',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>
            </div>
            <div class="form-actions col-md-2" style='padding-top:25px;'>
            <?php $this->widget('booster.widgets.TbButton', array(
                    'buttonType'=>'submit',
                    'context'=>'primary',
                   
                    'label'=>'Buscar',
                    'icon'=>'search',
                )); ?>
        </div>
        </div>
           
       

<?php $this->endWidget(); ?>
		</div><!-- form -->
    </div>

    <div id="info2" class="col-xs-12 well oculto">
    <div class="form">

        <?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
           
            'enableAjaxValidation'=>true,
        )); ?>

        <?php echo $form->errorSummary($model); ?>
        <div class="row">
            <div class="form-group col-md-6">
            <?php echo $form->textFieldGroup($model,'buscar',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>

	
            </div>

            <div class="form-group col-md-4 ">
            <?php echo $form->labelEx( $model,'categoria', array('class'=>'className') ); ?>

            <?php $this->widget('bootstrap.widgets.TbSelect2',array(
                                    'model'=>$model,
                                    'attribute'=>'categoria',
                                    'data'=>CHtml::listData(Categorias::model()->findAll(array('order'=>'nombre_categoria')), 'id_categorias', 'nombre_categoria'),
                                    'options' => array('width' => '100%',),
                    )); ?>

                </div>
            <div class="form-actions col-md-2" style='padding-top:25px;'>
            <?php $this->widget('booster.widgets.TbButton', array(
                    'buttonType'=>'submit',
                    'context'=>'primary',
                   
                    'label'=>'Buscar',
                    'icon'=>'search',
                )); ?>
        </div>
            </div>
      
 
       
       

<?php $this->endWidget(); ?>
		</div><!-- form -->    </div>
   

   

    
	<div class="container">
<div class="row">
			
<?php	
foreach($stm->fetchAll(PDO::FETCH_OBJ) as $fila): 
?>
<div class="col-12 col-sm-6 col-md-4 col-lg-3">


<div class="card" style="width: 18rem;">
<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/images/".$fila->id_libro.".jpg",'PDF',array( "class"=>"card-img-top","height"=>"250px;","weight"=>"150px;")),array('libros/detalle/'.$fila->id_libro));?>

  <div class="card-body">
    <h5 class="card-title"><strong><?php echo $fila->nombre_libro;?></strong></h5>
    <p class="card-text">
    <?php echo $fila->autor." ";?>
    <br>
    <?php echo $fila->editorial." ";?>

    </p>
    <?php echo TbHtml::linkButton('Ver más',
   		array('url'=>array('libros/detalle/'.$fila->id_libro), 'color' => TbHtml::BUTTON_COLOR_INFO,)); ?>

  </div>
  <br>
  <div style='background-color: rgb(190, 192, 196); height:1.5px;
width: 100%;'></div>
<br>
</div>

</div>
<?php endforeach;?>
</div>
</div>


</div>
