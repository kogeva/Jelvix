<div class="projects-container">
    <div class="top-teeth-border-decorator"></div>
    <div class="projects-list-container">
        <ul class="projects-menu-list">
            <li class="all button">
                <a href="#">All</a>
            </li>
            <li class="applications button">
                <a href="#">Applications</a>
            </li>
            <li class="others button">
                <a href="#">Other</a>
            </li>
            <li class="other button">
                <a href="#">Other</a>
            </li>
        </ul>
        <div class="horizontal-line-container">
            <hr>
        </div>
            <div class="projects-content-container" style="float: left; width: 100%">
            <div class="show-project">
                <div class="show-project-title"><?php echo $project->getTitle()?></div>
                <img src="<?php echo $project->getPhoto() ?>" class="show-project-photo" alt="">
                <div class="show-project-description-static">Description:</div>
                <div class="show-project-description"><?php echo sfOutputEscaper::unescape($project->getDescription()) ?></div>
                <ul class="link-to-container">
                    <li>
                        <a class="link-to-itunes" href="<?php echo $project->getIosLink() ?>">
                            <img src="/images/projects/apple-store.png" alt="app store">
                        </a>
                    </li>
                    <li>
                        <a class="link-to-google-market" href="<?php echo $project->getAndroidLink() ?>">
                            <img src="/images/projects/android-store.png" alt="google-market">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom-teeth-border-decorator"></div>
</div>