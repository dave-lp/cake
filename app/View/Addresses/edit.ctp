<!-- File: /app/View/Posts/edit.ctp -->

<h1>Edit Post</h1>
<?php
echo $this->Form->create('Address');
echo $this->Form->input('first_name');
echo $this->Form->input('last_name');
echo $this->Form->input('address');
echo $this->Form->input('address2');
echo $this->Form->input('city');
echo $this->Form->input('state');
echo $this->Form->input('zip');
echo $this->Form->input('zip_plus_4');
echo $this->Form->input('phone_number');
//echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Address');
?>