<!DOCTYPE html>

<html lang="<?php echo Yii::app()->language;?>">

<head>



<title><?php echo CHtml::encode($this->pageTitle); ?></title>

 <meta charset="<?php echo Yii::app()->charset;?>">

</head>

<body>

<header>
<?php
$this->widget('ext.bootstrap.widgets.TbNavbar', array(
 'type'=>'null', // null or 'inverse'
 //'brand'=>CHtml::encode(Yii::app()->name),

'brand'=>CHtml::encode(Yii::app()->name),
//'brandUrl'=>array('/site/index'),
'fixed'=>true,
 'collapse'=>true, // requires bootstrap-responsive.css
 'fluid' => true,
 'htmlOptions'=>array('style'=>'background-color: #fff; box-shadow: 0 3px 12px hsla(225,2%,44%,.6);
 font-family: Neue Haas Grotesk W01,Helvetica,Arial,Nimbus Sans L,sans-serif; padding:20px;
 font-weight: 700;'),
 'items'=>array(
 array(

 'class'=>'ext.bootstrap.widgets.TbMenu',
 'type'=>'navbar',
 'encodeLabel'=>false,

 'items'=>array(
   array('label'=>'Nosotros', 'url'=>array('/site/page', 'view'=>'about'),),
   array('label'=>'Contacto', 'url'=>array('/site/contact'), ),
   array('label'=>'Libros', 'url'=>array('/site/libros'), ),

   array('label'=>'Visitantes', 'items'=>array(
     array('label'=>'Visitantes', 'url'=>array('/visitantes/admin')),
     array('label'=>'Ocupacion', 'url'=>array('/ocupacion/admin')),
   ),'visible'=>!Yii::app()->user->isGuest),

   array('label'=>'Libros', 'items'=>array(
     array('label'=>'Libros', 'url'=>array('/libros/admin')),
     array('label'=>'Categorias', 'url'=>array('/categorias/admin')),
     array('label'=>'Pais', 'url'=>array('/pais/admin')),
     array('label'=>'Tags', 'url'=>array('/tags/admin')),
   ),'visible'=>!Yii::app()->user->isGuest),


   array('label'=>'Usuarios', 'url'=>array('/usuarios/admin'),'visible'=>Yii::app()->user->checkAccess("main-admin")),
   array('label'=>'Bitacora', 'url'=>array('/bitacora/admin'),'visible'=>!Yii::app()->user->isGuest),

   array('label'=>'Fotocopias', 'url'=>array('/fotocopia/admin'),'visible'=>!Yii::app()->user->isGuest),

   array('label'=>'Multas', 'url'=>array('/multas/admin'),'visible'=>!Yii::app()->user->isGuest),


   array('label'=>'Prestamos', 'url'=>array('/prestamos/admin'),'visible'=>!Yii::app()->user->isGuest),



 ),
 ),
 array(
 'class'=>'ext.bootstrap.widgets.TbMenu',
 'htmlOptions'=>array('class'=>'pull-right','style'=>'margin-right:20px;background-color:#fff;'),
 'items'=>array(

 //array('label'=>'Iniciar sesión' , 'url'=>Yii::app()->user->ui->loginUrl , 'visible'=>Yii::app()->user->isGuest),
 array('label'=>'Iniciar Sesión', 'icon'=>'user', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
 //array('label'=>Yii::app()->user->name, 'url'=>array('/cruge/ui/editprofile/'), 'visible'=>!Yii::app()->user->isGuest),
 //array('label'=>'Cerrar sesión ('.Yii::app()->user->name.')' , 'url'=>Yii::app()->user->ui->logoutUrl , 'visible'=>!Yii::app()->user->isGuest),
 // array('label'=>'Logout', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest, 'htmlOptions'=>array('class'=>'btn'))
 array('label'=>'  '.Yii::app()->user->name.'  ', 'icon'=>'user', 'url'=>'#', 
 'items'=>array(
  array('label'=>'Configuración', 'url'=>array('/Usuario/config'),),
  array('label'=>'Restablecer Contraseña', 'url'=>array('/Usuario/password'),),
  array('label'=>'Cerrar Sesión', 'url'=>array('/site/logout'),),
  

 ),'visible'=>!Yii::app()->user->isGuest,)
),
 ),
 ),
));
?>


</header>
<div class="" id="main">
 <?php if(isset($this->breadcrumbs)):?>
 <?php $this->widget('ext.bootstrap.widgets.TbBreadcrumbs', array(
 'links'=>$this->breadcrumbs,
 )); ?>
 <?php endif?>
 <div>
 <?php echo $content; ?>

 </div>
 <hr>


</div>
<footer class="container-fluid " style="background-color: #f0f1f1">
<div class="row">
<div class="col-3">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/The_Book_Depository.svg/1280px-The_Book_Depository.svg.png" width="300" height="100">

</div>
</div>
 Copyright &copy; <?php echo date('Y'); ?> <?php echo CHtml::encode(Yii::app()->params['empresa']); ?> | <?php echo CHtml::encode((Yii::app()->name).' '.Yii::app()->params['version']); ?> - All Rights Reserved.<br/>
 <?php echo Yii::powered(); ?>
 </footer></body>
</html>
