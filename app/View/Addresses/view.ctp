<?php echo $this->Html->addCrumb('All Addresses', '/addresses/index'); ?><?php echo $this->Html->addCrumb('Address for '.$address['Address']['first_name']." ".$address['Address']['last_name'], '/addresses/view/'.$address['Address']['id']); ?>

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
		<tr>
			<!--<td><?php echo $post['Post']['id']; ?></td>-->
			<td id="hotrow">
				<?php echo $this->Html->link($address['Address']['first_name']." ".$address['Address']['last_name'], array('controller' => 'addresses', 'action' => 'view', $address['Address']['id'])); ?><br><?php echo $address['Address']['address'].", ".$address['Address']['address2']."<br>".$address['Address']['city'].", ".$address['Address']['state']." ".$address['Address']['zip']; ?>
				<?php
				if (trim($address['Address']['zip_plus_4']) > "") {
					echo " + ".$address['Address']['zip_plus_4'];
				}
				?>
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
	</tbody>
    <?php unset($post); ?>
</table>