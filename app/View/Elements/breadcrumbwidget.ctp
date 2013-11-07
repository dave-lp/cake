<div class="breadcrumbwidget">
    <!--breadcrumb-->
    <ul class="breadcrumb">
        <?php
            echo $this->Html->getCrumbs(' > ',
                array(
                    'text' => 'Home',
                    'url' => array(
                        'controller' => 'pages',
                        'action' => 'display',
                        'home'
                    ),
                    'escape' => false
                )
            );
        ?>
        <!--
        <li><a href="/">Home</a> <span class="divider">/</span></li>
        <li class="active">Dashboard</li>
        -->
    </ul>
    <!--breadcrumb-->
</div>
