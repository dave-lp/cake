<!-- File: /app/View/Posts/index.ctp -->
<?php echo $this->Html->addCrumb('All Addresses', '/addresses/index'); ?>
<?php // echo $this->Html->css('page_specific/posts', null, array('inline' => false)); ?>
<?php // echo $this->Html->script('page_specific/new_patient', array('inline'=>true)); ?>
<?php echo $this->Html->script('jquery.mask.min', array('inline'=>true)); ?>
<!--<h1>Blog posts</h1>
<br><p>-->
<?php echo $this->Html->link('Add New Contact', array('controller' => 'addresses', 'action' => 'add')); ?>
<!--</p>-->
<br><Br>


<table style="width:600px;" class="rowflash" border=1px>
	<thead>
		<tr>
			<!--<th>Id</th>-->
			<th align=left>Contact</th>
			<th>Action</th>
			<th>Phone</th>
		</tr>
	</thead>
	<tbody>
	<!-- Here is where we loop through our $posts array, printing out post info -->
		<?php foreach ($addresses as $address): ?>
			<tr>
				<!--<td><?php echo $post['Post']['id']; ?></td>-->
				<td id="hotrow">
					<?php echo $this->Html->link($address['Address']['first_name']." ".$address['Address']['last_name'], array('controller' => 'addresses', 'action' => 'view', $address['Address']['id'])); ?><!--<br><?php echo $address['Address']['address'].", ".$address['Address']['address2']."<br>".$address['Address']['city'].", ".$address['Address']['state']." ".$address['Address']['zip']; ?>
					<?php
					if (trim($address['Address']['zip_plus_4']) > "") {
						echo " + ".$address['Address']['zip_plus_4'];
					}
					?>-->
				</td>
				<td align=center>
					<?php echo $this->Form->postLink(
						'Delete',
						array('action' => 'delete', $address['Address']['id']),
						array('confirm' => 'Are you sure?'));
					?>
					<?php echo $this->Html->link('Edit', array('action' => 'edit', $address['Address']['id'])); ?>
				</td>
				<td align=center><?php echo $address['Address']['phone_number']; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
    <?php unset($post); ?>
</table>