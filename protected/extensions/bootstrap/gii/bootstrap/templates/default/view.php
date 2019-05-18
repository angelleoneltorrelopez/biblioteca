<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
$nameColumn = $this->guessNameColumn($this->tableSchema->columns);
$label = $this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	\$model->{$nameColumn},
);\n";
?>

$this->menu=array(
array('label'=>'Listar <?php echo $this->modelClass; ?>','icon'=>'list-alt','url'=>array('index')),
array('label'=>'Crear <?php echo $this->modelClass; ?>','icon'=>'plus-sign','url'=>array('create')),
array('label'=>'Borrar <?php echo $this->modelClass; ?>','icon'=>'remove-sign','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>),'confirm'=>'¿Seguro que quieres eliminar este elemento?')),
array('label'=>'Actualizar <?php echo $this->modelClass; ?>','icon'=>'refresh','url'=>array('update','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>)),
array('label'=>'Buscar <?php echo $this->modelClass; ?>','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Vista <?php echo $this->modelClass . " #<?php echo \$model->{$this->tableSchema->primaryKey}; ?>"; ?></h1>

<?php echo "<?php"; ?> $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
<?php
foreach ($this->tableSchema->columns as $column) {
	echo "\t\t'" . $column->name . "',\n";
}
?>
),
)); ?>
