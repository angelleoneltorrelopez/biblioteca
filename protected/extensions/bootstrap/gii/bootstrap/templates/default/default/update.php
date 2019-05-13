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
	\$model->{$nameColumn}=>array('view','id'=>\$model->{$this->tableSchema->primaryKey}),
	'Update',
);\n";
?>

	$this->menu=array(
	array('label'=>'Listar <?php echo $this->modelClass; ?>','icon'=>'list-alt','url'=>array('index')),
	array('label'=>'Crear <?php echo $this->modelClass; ?>','icon'=>'plus-sign','url'=>array('create')),
	array('label'=>'Vista <?php echo $this->modelClass; ?>','icon'=>'eye-open','url'=>array('view','id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>)),
	array('label'=>'Buscar <?php echo $this->modelClass; ?>','icon'=>'search','url'=>array('admin')),
	);
	?>

	<h1>Actualizar <?php echo $this->modelClass . " <?php echo \$model->{$this->tableSchema->primaryKey}; ?>"; ?></h1>

<?php echo "<?php echo \$this->renderPartial('_form',array('model'=>\$model)); ?>"; ?>
