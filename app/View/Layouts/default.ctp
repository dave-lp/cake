<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: this ain\'t your mom\'s cake!');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(
            array(
                'prettify/prettify',
                'bootstrap-timepicker.min',
                'bootstrap-timepicker.min',
                'feedbackBadge',
                'custom',
                'style.default',
                'jquery.ui'
            )
        );

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->script(
            array(
                'prettify/prettify',
                'jquery-1.9.1.min',
                'jquery-ui-1.9.2.min',
                'jquery-migrate-1.1.1.min',
                'jquery.alerts',
                'jquery.uniform.min',
                'jquery.validate.min',
                'jquery.cookie',
                'jquery.feedbackBadge.min',
                'jquery.form.min',
                'chosen.jquery.min',
                'bootstrap.min',
                'bootstrap-timepicker.min',
                'custom',
                'global'
            )
        );
	?>
</head>
<body>
    <div class="mainwrapper">
        <?php echo $this->element('leftpanel'); ?>
        <?php echo $this->element('rightpanel'); ?>
        <div class="clearfix"></div>
        <?php echo $this->element('footer'); ?>
    </div>
    <a href="/controls/feedback" title="Give us feedback" id="feedback-badge-right"><span>Feedback</span></a>
    <?php echo $this->element('sql_dump'); ?>
</body>
</html>
