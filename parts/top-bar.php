<div class="top-bar-container contain-to-grid show-for-medium-up sticky">
    <nav class="top-bar" data-topbar data-options="sticky_on: large" role="navigation">
        <ul class="title-area">
            <li class="name">
                <h1>
                    <a href="<?php echo home_url(); ?>">
                        <img class="fg-logo" style="height: 80px;" src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/FreeGeekTC_4cLogo.gif"/>
                    </a>
                </h1>
            </li>
        </ul>
        <section class="top-bar-section">
            <?php foundationPress_top_bar_l(); ?>
            <?php foundationPress_top_bar_r(); ?>
        </section>
    </nav>
</div>
