<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Title</title>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_javascripts() ?>
        <?php include_stylesheets() ?>
    </head>
    <body>
        <div class="wrap">
            <div class="container">
                <div class="header">
                    <div class="main-logo"></div>
                    <div class="logo-vertical-line" ></div>
                    <span class="it-solutions">Outstanding IT solutions!</span>
                    <div class="header-request-container">
                        <div class="request-phone-conteiner">1234567XXX</div>
                        <div class="request-button-container">
                            <a class="request-button" href="#">
                                <img class="request-button-image" src="/images/request-button-arrow.png" alt="Request a quote"/>
                                <span>Request a quote</span>
                            </a>
                        </div>
                    </div>
                    <div class="header-menu-container">
                        <ul class="header-menu-list">
                            <li class="header-menu-list-element"><a href="<?php echo url_for('jelvix_about')?>">about</a></li>
                            <li class="header-menu-list-element"><a href="<?php echo url_for('jelvix_sevices')?>">services</a></li>
                            <li class="header-menu-list-element"><a href="<?php echo url_for('jelvix_projects')?>">projects</a></li>
                            <li class="header-menu-list-element"><a href="#">stories</a></li>
                            <li class="header-menu-list-element"><a href="<?php echo url_for('jelvix_news')?>">news</a></li>
                            <li class="header-menu-list-element"><a href="#">contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="content">
                    <?php echo $sf_content ?>
                </div>
                <div class="footer">
                    <div class="footer-list-container">
                        <ul class="footer-list">
                            <li>about</li>
                            <li>..........</li>
                            <li>......</li>
                            <li>...</li>
                        </ul>
                        <ul class="footer-list">
                            <li>services</li>
                            <li>..........</li>
                            <li>......</li>
                            <li>...</li>
                        </ul>
                        <ul class="footer-list">
                            <li>projects</li>
                            <li>..........</li>
                            <li>......</li>
                            <li>...</li>
                        </ul>
                        <ul class="footer-list">
                            <li>stories</li>
                            <li>..........</li>
                            <li>......</li>
                            <li>...</li>
                        </ul>
                        <ul class="footer-list">
                            <li>news</li>
                            <li>..........</li>
                            <li>......</li>
                            <li>...</li>
                        </ul>
                        <ul class="footer-list">
                            <li>contacts</li>
                            <li>..........</li>
                            <li>......</li>
                            <li>...</li>
                        </ul>
                    </div>
                    <div class="header-request-container">
                        <div class="request-button-container">
                            <a class="request-button" href="#">
                                <img class="request-button-image" src="/images/request-button-arrow.png" alt="Request a quote"/>
                                <span>Request a quote</span>
                            </a>
                        </div>
                        <div class="or-call-use">or call us 1234567XXX</div>
                    </div>
                    <div class="copyriting-informations">
                        <ul>
                            <li>© 2013 Jelvix. All rights reserved.</li>
                            <li>Privacy Policy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>