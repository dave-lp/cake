<?php
class Address extends AppModel {
    public $validate = array(
        'first_name' => array(
            'rule' => 'notEmpty'
        ),
        'last_name' => array(
            'rule' => 'notEmpty'
        )
    );
} 
?>