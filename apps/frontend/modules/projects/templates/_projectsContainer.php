<div id="slides">
    <?php foreach($projects as $page): ?>
        <div class="slide-page">
            <ul class="project-list-page">
                <?php foreach($page as $project): ?>
                    <li class="project-list-element">
                        <div class="project-shadow">
                            <img src="<?php echo $project->getThumbnail() ?>" width="260" height="260" alt="" />
                            <a href="<?php echo url_for2('jelvix_projects_show', array( 'id' => $project->getId())) ?>" class="project-link"><span><?php echo $project->getTitle() ?></span></a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endforeach;?>
</div>