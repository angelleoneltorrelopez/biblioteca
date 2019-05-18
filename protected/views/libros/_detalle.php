

<div class='container' style="padding:50px;">

<div class=row>
	<div class="col-sm-12 col-md-5">
	<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/images/".$model->id_libro.".jpg",'PDF',array( "class"=>"card-img-top","height"=>"375px;","weight"=>"300px;")),array('libros/detalle&id='.$model->id_libro));?>

</div>
	<div class="col-sm-12 col-md-7" style="font-size:20px;"> 
	<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data'=>array('id'=>1, 
	'editorial'=>$model->editorial, 'autor'=>$model->autor,
'categoria'=>$model->categoria0->nombre_categoria, 'numero'=>$model->numero_paginas,
'year'=>$model->año_edicion, 'desc'=>$model->descripcion
),
    'attributes'=>array(
		
		array('name'=>'autor', 'label'=>'Autor'),
		array('name'=>'editorial', 'label'=>'Editorial'),
		array('name'=>'categoria', 'label'=>'Categoria'),
		array('name'=>'numero', 'label'=>'Páginas'),
		array('name'=>'year', 'label'=>'Año'),
		array('name'=>'desc', 'label'=>'Descripción'),
   
    ),
)); ?>

	</div>

</div>
</div>

</div>



