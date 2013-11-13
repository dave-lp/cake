<!-- File: /app/View/Posts/add.ctp -->
<?php echo $this->Html->addCrumb('Add Contact', '/addresses/add'); ?>
<?php // echo $this->Html->css('page_specific/posts', null, array('inline' => false)); ?>
<?php // echo $this->Html->script('page_specific/new_patient', array('inline'=>true)); ?>
<?php echo $this->Html->script('jquery.mask.min', array('inline'=>true)); ?>
<h2>Add Contact</h2>
<?php
echo $this->Form->create('Address');
echo $this->Form->input('first_name');
//echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('last_name');
echo $this->Form->end('Save Address');
?>