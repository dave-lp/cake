<!-- File: /app/View/Posts/index.ctp -->
<?php echo $this->Html->addCrumb('All Users', '/users/index'); ?>
<?php // echo $this->Html->css('page_specific/posts', null, array('inline' => false)); ?>
<?php // echo $this->Html->script('page_specific/new_patient', array('inline'=>true)); ?>
<?php echo $this->Html->script('jquery.mask.min', array('inline'=>true)); ?>
<!--<h1>Blog posts</h1>
<br><p>-->
<?php // echo $this->Html->link('Add Post', array('controller' => 'posts', 'action' => 'add')); ?>
<!--</p>-->
newest first<br><br>
<table style="width:600px;" class="rowflash" border=1px>
	<thead>
		<tr>
			<!--<th>Id</th>-->
			<th align=left>Title</th>
			<th>Action</th>
			<th>Created</th>
		</tr>
	</thead>
	<tbody>
	<!-- Here is where we loop through our $posts array, printing out post info -->
		<?php foreach ($users as $user): ?>
			<tr>
				<!--<td><?php echo $post['Post']['id']; ?></td>-->
				<td id="hotrow">
					<?php echo $this->Html->link($user['User']['username'], array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
				</td>
				<td align=center>
					<?php echo $this->Form->postLink(
						'Delete',
						array('action' => 'delete', $user['User']['id']),
						array('confirm' => 'Are you sure?'));
					?>
					<?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); ?>
				</td>
				<td align=center><?php echo $user['User']['created']; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
    <?php unset($user); ?>
</table> 