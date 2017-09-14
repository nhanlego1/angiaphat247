<?php
/**
 * Created by PhpStorm.
 * User: nhan
 * Date: 9/7/17
 * Time: 8:32 PM
 */
?>
<div id="page">
    <div class="shadow"></div>

    <nav id="top" class="clearfix">
        <div class="container">
            <div class="phone">
                <?php if ($page['top']): ?>
                    <div class="top-links">
                        <?php print render($page['top']) ?>
                    </div>
                <?php endif ?>
                <div class="box-right-phone">
                    <a href="tel:0907255348"><i class="fa fa-phone"></i></a> <span
                        class="hidden-xs hidden-sm"><?php print variable_get('hotline', '0907 255 348') ?></span>
                </div>
            </div>
            <ul class="soc-icon">
                <li><a target="_blank" href="https://www.facebook.com/angiaphat247/"><i
                            class="fa fa-facebook-square"></i></a></li>
                <li><a href="//www.twitter.com/"><i class="fa fa-twitter-square"></i></a></li>
                <li><a href="//www.google.com/"><i class="fa fa-google-plus-square"></i></a></li>
                <li><a href="//www.youtube.com/"><i class="fa fa-youtube-square"></i></a></li>
                <li><a href="//www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
            </ul>

        </div>
    </nav>

    <header>
        <div class="container">
            <?php if ($logo): ?>
                <div id="logo">
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                        <img class="img-responsive" alt="Angiaphat247.com" src="<?php print $logo; ?>"
                             alt="<?php print t('Home'); ?>"/>
                    </a>
                </div>
            <?php endif; ?>

            <?php if ($page['booking']): ?>
                <div class="box-right clearfix">
                    <?php print render($page['booking']) ?>
                </div>
            <?php endif; ?>


        </div>
    </header>

    <?php if ($page['menu']): ?>
        <div id="tm_menu" class="nav__primary sf-js-enabled sf-arrows">
            <div class="container">
                <div class="menu-shadow">
                    <?php print render($page['menu']) ?>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($page['highlighted'] || $page['top_right']): ?>
        <div class="header_modules">
            <div class="container">
                <div class="row">
                    <?php if ($page['highlighted']): ?>
                        <div class="col-sm-8">
                            <div class="fluid_container">
                                <div class="camera_container">
                                    <div id="camera_wrap_0" class="camera_wrap">
                                        <div class="camera_fakehover">
                                            <?php print render($page['highlighted']) ?>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($page['top_right']): ?>
                        <div id="banner0" class="banners col-sm-4">
                            <?php print render($page['top_right']) ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div id="container">
        <div class="container">
            <div class="row">
                <?php if ($page['content_top']): ?>
                    <div class="box_html advertising">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php print render($page['content_top']) ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (!drupal_is_front_page()): ?>
                    <!-- Breadcrumb-->
                    <?php if ($breadcrumb): ?>
                        <?php print $breadcrumb; ?>
                    <?php endif; ?>
                <?php endif; ?>
                <!-- message-->
                <?php print $messages; ?>
                <!-- title-->
                <a id="main-content"></a>
                <?php print render($title_prefix); ?>
                <?php if ($title): ?><h1 class="title"
                                         id="page-title"><?php print $title; ?></h1><?php endif; ?>
                <?php print render($title_suffix); ?>
                <!-- tabs-->
                <?php if ($tabs): ?>
                    <div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                <?php print render($page['help']); ?>
                <!-- links-->
                <?php if ($action_links): ?>
                    <ul class="action-links"><?php print render($action_links); ?></ul>
                <?php endif; ?>
                <!-- content-->
                <?php if ($page['sidebar_first']): ?>
                    <aside id="column-left" class="col-sm-3 ">
                        <?php print render($page['sidebar_first']) ?>
                    </aside>
                <?php endif; ?>
                <?php if ($page['sidebar_first']): ?>
                <div id="content" class="col-sm-9">
                    <?php else: ?>
                    <div id="content" class="col-sm-12">
                            <?php endif; ?>
                        <div class="row">
                            <?php print render($page['content']); ?>
                            <?php print $feed_icons; ?>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <?php if ($page['content_second'] || $page['bottom_right']): ?>
            <div class="content_bottom">
                <div class="container">
                    <div class="row">
                        <?php if ($page['content_second']): ?>
                            <div class="box_html events">
                                <div class="col-lg-8">
                                    <?php print render($page['content_second']) ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($page['bottom_right']): ?>
                            <div class="col-lg-4">
                                <?php print render($page['bottom_right']) ?>
                            </div>
                        <?php endif; ?>


                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($page['footer_top']): ?>
            <div class="container">
                <div class="row">
                    <?php print render($page['footer_top']) ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($page['footer']): ?>
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="footer">
                                <?php print render($page['footer']) ?>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="copyright">
                    <div class="container">
                        Powered By <a href="https://www.angiaphat247.vn">Angiaphat247.vn</a><br> online store © 2017
                        <!-- [[%FOOTER_LINK]] -->
                    </div>
                </div>
            </footer>
        <?php endif; ?>

    </div>
