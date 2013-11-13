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
            <li><a href="/"><span class="iconsweets-home"></span> Home</a></li>
            <li><a href="/posts/add"><span class="iconsweets-speech3"></span>Add Post</a></li>
            <li><a href="/posts/index"><span class="iconsweets-speech4"></span>All Posts</a></li>
			<li><a href="/addresses/index"><span class="iconsweets-users"></span>Address Book</a></li>
           <!-- <li><a href="/patients/follow_ups"><span class="iconsweets-day"></span>Follow ups</a></li>-->
            <li class="dropdown"><a href="#"><span class="icon-signal"></span> Example Dropdown</a>
                <ul>
                    <li><a href="/reports/weekly_referral"> example</a></li>
                    <li><a href="/reports/weekly_referral"> example2</a></li>
                    <li><a href="/reports/weekly_referral"> example3</a></li>
                    <li><a href="/reports/weekly_referral"> example4</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!--leftmenu-->
</div>
