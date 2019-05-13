<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
$label = $this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Buscar',
);\n";
?>

$this->menu=array(
array('label'=>'Listar <?php echo $this->modelClass; ?>','icon'=>'list-alt','url'=>array('index')),
array('label'=>'Crear <?php echo $this->modelClass; ?>', 'icon'=>'plus-sign', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('<?php echo $this->class2id($this->modelClass); ?>-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Busqueda <?php echo $this->pluralize($this->class2name($this->modelClass)); ?></h1>

<p>
	Opcionalmente puede ingresar un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	o <b>=</b>) al comienzo de cada uno de sus valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo "<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>"; ?>

<div class="search-form" style="display:none">
	<?php echo "<?php \$this->renderPartial('_search',array(
	'model'=>\$model,
)); ?>\n"; ?>
</div><!-- search-form -->

<?php echo "<?php"; ?> $this->widget('booster.widgets.TbGridView',array(
'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
<?php
$count = 0;
foreach ($this->tableSchema->columns as $column) {
	if (++$count == 7) {
		echo "\t\t/*\n";
	}
	echo "\t\t'" . $column->name . "',\n";
}
if ($count >= 7) {
	echo "\t\t*/\n";
}
?>
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
