<!-- File: /app/View/Posts/index.ctp -->

<h1>Blog posts</h1>
<br><p><?php echo $this->Html->link('Add Post', array('controller' => 'posts', 'action' => 'add')); ?></p>
<table style="width:600px;">
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
		<?php foreach ($posts as $post): ?>
			<tr>
				<!--<td><?php echo $post['Post']['id']; ?></td>-->
				<td>
					<?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
				</td>
				<td align=center>
					<?php echo $this->Form->postLink(
						'Delete',
						array('action' => 'delete', $post['Post']['id']),
						array('confirm' => 'Are you sure?'));
					?>
					<?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?>
				</td>
				<td align=center><?php echo $post['Post']['created']; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
    <?php unset($post); ?>
</table>