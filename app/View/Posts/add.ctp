<!-- File: /app/View/Posts/add.ctp -->
<?php echo $this->Html->addCrumb('Add Post', '/posts/add'); ?>
<?php // echo $this->Html->css('page_specific/posts', null, array('inline' => false)); ?>
<?php // echo $this->Html->script('page_specific/new_patient', array('inline'=>true)); ?>
<?php echo $this->Html->script('jquery.mask.min', array('inline'=>true)); ?>
<h1>Add Post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->end('Save Post');
?>