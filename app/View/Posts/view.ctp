<!-- File: /app/View/Posts/view.ctp -->
<?php echo $this->Html->addCrumb('All Posts', '/posts/index'); ?><?php echo $this->Html->addCrumb($post['Post']['title'], 'view/'.$post['Post']['id']); ?>

<h1>
	<?php echo ($post['Post']['title']); ?>&nbsp;&nbsp;&nbsp;
	<?php echo $this->Html->link(
		'Back',
		array('controller' => 'posts', 'action' => 'index')
	); ?> | 
	<?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?>
</h1> 


<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

<p><?php echo h($post['Post']['body']); ?></p>