<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="/favicon.ico"/>
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
</head>
<body>
<div class="wrap">
    <div class="main">
        <div class="container">
            <div class="header">
                <a href="<?php echo url_for('homepage') ?>" class="main-logo" contextmenu="main page"></a>

                <div class="logo-vertical-line"></div>
                <span class="it-solutions">Outstanding IT solutions!</span>

                <div class="header-request-container">
                    <div class="request-phone-conteiner">1234567XXX</div>
                    <div class="request-button-container">
                        <a class="request-button" href="<?php echo url_for('jelvix_request_new') ?>">
                            <span>Work with us</span>
                        </a>
                    </div>
                </div>
                <div class="header-menu-container">
                    <ul class="header-menu-list">
                        <li class="header-menu-list-element"><a href="<?php echo url_for('jelvix_about') ?>">about</a>
                        </li>
                        <li class="header-menu-list-element"><a
                                href="<?php echo url_for('jelvix_sevices') ?>">services</a>
                        </li>
                        <li class="header-menu-list-element"><a
                                href="<?php echo url_for('jelvix_projects') ?>">projects</a>
                        </li>
                        <li class="header-menu-list-element"><a
                                href="<?php echo url_for('jelvix_stories') ?>">stories</a></li>
                        <li class="header-menu-list-element"><a href="<?php echo url_for('jelvix_news') ?>">blog</a>
                        </li>
                        <li class="header-menu-list-element"><a
                                href="<?php echo url_for('jelvix_contacts_new') ?>">contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="content">
                <?php echo $sf_content ?>
            </div>
            <div class="footer">
                <div class="footer-list-container">
                    <ul class="footer-list">
                        <li class="footer-item"><?php echo link_to('about', 'jelvix_about') ?></li>
                        <li>..........</li>
                        <li>......</li>
                        <li>...</li>
                    </ul>
                    <ul class="footer-list">
                        <li class="footer-item"><?php echo link_to('services', 'jelvix_sevices') ?></li>
                        <li>..........</li>
                        <li>......</li>
                        <li>...</li>
                    </ul>
                    <ul class="footer-list">
                        <li class="footer-item"><?php echo link_to('projects', 'jelvix_projects') ?></li>
                        <li>..........</li>
                        <li>......</li>
                        <li>...</li>
                    </ul>
                    <ul class="footer-list">
                        <li class="footer-item"><?php echo link_to('stories', 'jelvix_stories') ?></li>
                        <li>..........</li>
                        <li>......</li>
                        <li>...</li>
                    </ul>
                    <ul class="footer-list">
                        <li class="footer-item"><?php echo link_to('blog', 'jelvix_news') ?></li>
                        <li>..........</li>
                        <li>......</li>
                        <li>...</li>
                    </ul>
                    <ul class="footer-list">
                        <li class="footer-item"><?php echo link_to('contacts', 'jelvix_contacts_new') ?></li>
                        <li>..........</li>
                        <li>......</li>
                        <li>...</li>
                    </ul>
                </div>
                <div class="header-request-container">
                    <div class="request-button-container">
                        <a class="request-button" href="<?php echo url_for('jelvix_request_new') ?>">
                            <span class="request bottom">Request a quote</span>
                        </a>
                    </div>
                    <div class="or-call-use">or call us 1234567XXX</div>
                </div>
                <div class="copyriting-informations">
                    <ul>
                        <li>© 2013 Jelvix. All rights reserved.</li>
                        <li><span class="footer-item"><a href="<?php echo url_for('jelvix_privacy')?>" class="privacy">Privacy Policy</a></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>