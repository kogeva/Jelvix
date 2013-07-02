<div class="projects-container">
    <div class="top-teeth-border-decorator"></div>
    <div class="projects-list-container">
        <?php echo include_partial('projects/projectFilter') ?>
        <div class="projects-content-container" style="float: left; width: 100%">
            <div id="slides">
                <?php foreach($projects as $page): ?>
                <div class="slide-page">
                    <ul class="project-list-page">
                        <?php foreach($page as $project): ?>
                        <li class="project-list-element">
                            <div class="project-shadow">
                                <img src="<?php echo $project->getThumbnail() ?>" width="260" height="260" alt="" />
                                <a href="<?php echo url_for2('jelvix_projects_show', array( 'title' => $project->getTitle())) ?>" class="project-link">
                                    <span><?php echo $project->getTitle() ?></span>
                                </a>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    <div class="bottom-teeth-border-decorator"></div>
</div>