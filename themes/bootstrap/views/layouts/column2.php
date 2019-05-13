<?php $this->beginContent('//layouts/main'); ?>
 <div class="row">
 <div class="span3">
 <?php

 $this->widget('ext.bootstrap.widgets.TbBox', array(
 'title'=>'Menu',
 'headerIcon' => 'icon-th-list',
 //'htmlOptions' => array('style'=>'background-color: hsla(120, 100%, 50%, 0.3);'),
 //'htmlHeaderOptions' => array('style'=>'background-color: hsla(120, 100%, 50%, 0.3);'),
 //'htmlContentOptions' => array('style'=>'background-color: hsla(263, 59%, 50%, 0.61);'),
 'content'=> $this->widget('booster.widgets.TbMenu', array(
 'type'=>'pills',
 'items'=>$this->menu,
 ),true),
));
 ?>

 </div>
 <div class="span9">
 <?php echo $content; ?>
 </div>
 </div>
<?php $this->endContent(); ?>
