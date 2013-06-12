<ul class="projects-menu-list">
    <li class="all button">
        <a href="<?php echo url_for('jelvix_projects') ?>">All</a>
    </li>
    <li class="applications button">
        <a href="<?php echo url_for2('jelvix_projects', array('category' => 'Applications')) ?>">Applications</a>
    </li>
    <li class="design button">
        <a href="<?php echo url_for2('jelvix_projects', array('category' => 'Design')) ?>">Design</a>
    </li>
    <li class="featured button">
        <a href="<?php echo url_for2('jelvix_projects', array('category' => 'Featured')) ?>">Featured</a>
    </li>
</ul>
<div class="horizontal-line-container">
    <div class="horizontal-line"></div>
</div>
