<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Title</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_javascripts() ?>
    <link type="text/css" rel="stylesheet" href="/css/font.css">
    <link type="text/css" rel="stylesheet" href="/css/request.css">
</head>
<body>
<div class="wrap">
    <div class="container">
        <div class="header">
            <?php //var_dump(use_stylesheet('request.css')) or die; ?>
            <a href="<?php echo url_for('homepage')?>" class="main-logo" contextmenu="main page"></a>
            <div class="logo-vertical-line" ></div>
            <span class="it-solutions">Outstanding IT solutions!</span>
            <div class="header-request-container">
                <div class="request-phone-conteiner">1234567XXX</div>
            </div>
        </div>
    </div>
    <div class="content">
        <?php echo $sf_content ?>
    </div>
    <div class="footer">
        <div class="copyriting-informations">
            <ul>
                <li>© 2013 Jelvix. All rights reserved.</li>
                <li><span>Privacy Policy</span></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>