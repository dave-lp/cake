<div class="leftpanel">
    <!--logopanel-->
    <div class="logopanel">
        <center><a href="/"><img src="/img/logo-grey.png" width="240" height="86"/></a></center>
    </div>
    <!--logopanel-->

    <div class="datewidget">Today is <?php echo date('l, M d'); ?>&nbsp;&nbsp; <span id=tick2></span></div>

    <?php //echo $this->element('searchwidget'); ?>

    <!--leftmenu-->
    <div class="leftmenu">
        <ul class="nav nav-tabs nav-stacked">
            <li class="nav-header"> Navigation</li>
            <li><a href="/"><span class="iconsweets-home"></span> Home<?php if ($title_for_layout == "Home") echo '&nbsp;&nbsp;&nbsp;&nbsp;<span class="iconsweets-running">';?></a></li>
			<li class="dropdown"><a href="#"><span class="iconsweets-speech4"></span>Posts</a>
				<ul <?php if (strpos($this->here, 'posts')) echo 'style="display: block;"';?>>
					<li ><a href="/posts/add"><span class="iconsweets-speech3"></span>Add Post<?php if (strpos($this->here, 'posts/add')) echo '&nbsp;&nbsp;&nbsp;&nbsp;<span class="iconsweets-running">';?></a></li>
					<li><a href="/posts/index"><span class="iconsweets-speech4"></span>All Posts<?php if (strpos($this->here, 'posts/index')) echo '&nbsp;&nbsp;&nbsp;&nbsp;<span class="iconsweets-running">';?></a></li>
				</ul>
           <!-- <li><a href="/patients/follow_ups"><span class="iconsweets-day"></span>Follow ups</a></li>-->
            <li class="dropdown"><a href="#"><span class="iconsweets-users"></span>Address Book</a>
                <ul <?php if (strpos($this->here, 'addresses')) echo 'style="display: block;"';?>>
					<li><a href="/addresses/add"><span class="iconsweets-user"></span>Add Contact<?php if (strpos($this->here, 'addresses/add')) echo '&nbsp;&nbsp;&nbsp;&nbsp;<span class="iconsweets-running">';?></a></li>
					<li><a href="/addresses/index"><span class="iconsweets-users"></span>All Contacts<?php if (strpos($this->here, 'addresses/index')) echo '&nbsp;&nbsp;&nbsp;&nbsp;<span class="iconsweets-running">';?></a></li>
				</ul>

            </li>
        </ul>
    </div>
    <!--leftmenu-->
</div>
<?php // echo $title_for_layout; ?>
