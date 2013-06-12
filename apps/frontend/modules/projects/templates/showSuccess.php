<div class="projects-container">
    <div class="top-teeth-border-decorator"></div>
    <div class="projects-list-container">
    <?php echo include_partial('projects/projectFilter') ?>
            <div class="projects-content-container" style="float: left; width: 100%">
            <div class="show-project">
                <div class="show-project-title"><?php echo $project->getTitle()?></div>
                <img src="<?php echo $project->getPhoto() ?>" class="show-project-photo" alt="">
                <?php if(!empty($project->description)):?>
                <div class="show-project-description-static">Description:</div>
                <div class="show-project-description"><?php echo sfOutputEscaper::unescape($project->getDescription()) ?></div>
                <?php  endif ?>
                <ul class="link-to-container">
                    <?php if(strlen($project->getIosLink())):?>
                    <li>
                        <a class="link-to-itunes" href="<?php echo $project->getIosLink() ?>">
                            <img src="/images/projects/apple-store.png" alt="app store">
                        </a>
                    </li>
                    <?php endif;?>
                    <?php if(strlen($project->getAndroidLink())):?>
                    <li>
                        <a class="link-to-google-market" href="<?php echo $project->getAndroidLink() ?>">
                            <img src="/images/projects/android-store.png" alt="google-market">
                        </a>
                    </li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom-teeth-border-decorator"></div>
</div>