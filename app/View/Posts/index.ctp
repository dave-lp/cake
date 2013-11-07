<!-- File: /app/View/Posts/index.ctp -->
<?php echo $this->Html->addCrumb('All Posts', '/posts/index'); ?>
<?php // echo $this->Html->css('page_specific/posts', null, array('inline' => false)); ?>
<?php // echo $this->Html->script('page_specific/new_patient', array('inline'=>true)); ?>
<?php echo $this->Html->script('jquery.mask.min', array('inline'=>true)); ?>
<!--<h1>Blog posts</h1>
<br><p>-->
<?php echo $this->Html->link('Add Post', array('controller' => 'posts', 'action' => 'add')); ?>
<!--</p>-->
<table style="width:600px;">
	<thead>
		<tr>
			<!--<th>Id</th>-->
			<th align=left>Title</th>
			<th>Action</th>
			<th>Created</th>
		</tr>
	</thead>
	<tbody class="rowflash">
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