<div class="rightpanel">
    <?php echo $this->element('headerpanel'); ?>
    <?php echo $this->element('breadcrumbwidget'); ?>

    <div class="pagetitle">
        <h1><?php echo $title_for_layout; ?></h1> <span><?php if(!empty($description_for_layout)) { echo $description_for_layout; } ?></span>
    </div>

    <div class="maincontent">
        <div class="contentinner">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
        </div>
    </div>
</div>
