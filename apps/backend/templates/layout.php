<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="favicon.ico"/>
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
      <style type="text/css">
          body {
              padding: 0;
              margin: 0;
          }
          .header {
              float: left;
              width: 100%;
              height: 160px;
              background: rgba(26, 26, 26, 0.6);
          }

          .logo {
              margin: 24px 100% 0 20px;
          }

          .menu {
              border-top: 3px solid rgb(43, 43, 43);
              border-bottom: 3px solid #000;
              width: 100%;
              height: 45px;
              padding: 0;
              margin: 35px 0 0 0;
              background: rgb(255, 255, 255);
          }
          .menu .menu-item {
              font-size: 16px;
              list-style: none;
              float: left;
              margin: 15px 0 0 15px;
          }

          .menu .menu-item a {
              text-decoration: none;
              color: #377EE9;
          }

          .menu .menu-item a:hover {
              color: rgb(23, 199, 128);
          }
      </style>
  </head>
  <body>
  <div class="header">
      <img class="logo" src="/images/main-logo.png" alt="">
      <ul class="menu">
          <li class="menu-item"><?php echo link_to('News', 'jelvix_news')?></li>
          <li class="menu-item"><?php echo link_to('Services', 'jelvix_services')?></li>
          <li class="menu-item"><?php echo link_to('Projects', 'jelvix_projects')?></li>
          <li class="menu-item"><?php echo link_to('Stories', 'jelvix_stories')?></li>
          <li class="menu-item"><?php echo link_to('Contact', 'jelvix_contacts')?></li>
          <li class="menu-item"><?php echo link_to('Request', 'jelvix_request')?></li>
          <li class="menu-item"><?php echo link_to('SEO', 'jelvix_module')?></li>
          <?php if($sf_user->isAuthenticated()):?>
            <li class="menu-item" style="float: right; margin-right: 22px;"><a href="/admin.php/guard/logout">Logout</a></li>
          <?php endif?>
      </ul>
  </div>
  <div class="content">
      <?php echo $sf_content ?>
  </div>
  </body>
</html>
