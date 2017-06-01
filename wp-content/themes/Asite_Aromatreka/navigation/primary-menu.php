<?php global $asite_options; ?>
<div class="header_left">

    <!-- Header Menu -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <?php if (!empty($asite_options['option_logo'])): ?>
                        <img src="<?php echo $asite_options['option_logo']['url'] ?>" alt="<?php bloginfo('name'); ?>"
                             title="<?php bloginfo('description') ?>">
                    <?php else: ?>
                        <img src="<?php echo IMG_FOLDER . '/logo.png' ?>" alt="<?php bloginfo('name'); ?>"
                             title="<?php bloginfo('description') ?>">
                    <?php endif; ?>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo home_url(); ?>">Главная</a></li>
                    <?php if (is_home()): ?>
                        <li><a href="#menu">Меню</a></li>
                    <?php else : ?>
                        <li><a href="<?echo home_url() .'/menu'?>">Меню</a></li>
                    <?php endif; ?>

                    <li><a type="button" class="btn" data-toggle="modal" data-target="#reserve">Забронировать</a></li>
                    <li><a type="button" class="btn" data-toggle="modal" data-target="#comments">Отзывы</a></li>
                    <li><a type="button" class="btn" data-toggle="modal" data-target="#contact">Контакт</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- END Header Menu -->

    <!-- Header Social -->
    <div class="header_social">
        <a href="#"><img src="<?php echo IMG_FOLDER . '/social/004-facebook-logo-button.png' ?>"></a>
        <a href="#"><img src="<?php echo IMG_FOLDER . '/social/002-instagram-logo.png' ?>"></a>
        <a href="#"><img src="<?php echo IMG_FOLDER . '/social/001-email.png' ?>"></a>
        <a href="#"><img src="<?php echo IMG_FOLDER . '/social/003-vk-social-logotype.png' ?>"></a>
    </div>
    <!-- END Header Social -->

</div>