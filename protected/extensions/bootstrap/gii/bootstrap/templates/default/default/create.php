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
	'Create',
);\n";
?>

$this->menu=array(
array('label'=>'Listar <?php echo $this->modelClass; ?>','icon'=>'list-alt','url'=>array('index')),
array('label'=>'Busqueda <?php echo $this->modelClass; ?>','icon'=>'search','url'=>array('admin')),
);
?>

<h1>Crear <?php echo $this->modelClass; ?></h1>

<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
