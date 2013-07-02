<div class="main-page-container">
    <div class="top-container">
        <div class="slider-container">
            <ul class="main-slider">
                <li class="slider-element"><img src="/images/slides/s1.jpg" alt=""></li>
                <li class="slider-element"><img src="/images/slides/s2.jpg" alt=""></li>
                <li class="slider-element"><img src="/images/slides/s3.jpg" alt=""></li>
            </ul>
        </div>
        <div class="success-main">
            <img class="left-header-line" src="/images/header-line.png" alt=""/>
            <span>ALL WE WANT IS YOUR SUCCESS</span>
            <img class="right-header-line" src="/images/header-line.png" alt=""/>
        </div>
        <div class="main-image">
            <img src="/images/info.png" alt="">
        </div>
    </div>
    <div class="bottom-container">
        <div class="top-teeth-border-decorator"></div>
        <div class="bottom-main-container">
            <div class="main-bottom-header">
                <div class="text">Recent projects or <a class="to-stories" href="<?php echo url_for('jelvix_projects')?>">learn more</a></div>
                <div class="header-decorator"></div>
            </div>

            <div class="recent-projects-container">
                <ul class="recent-projects-list">
                    <?php foreach ($projects as $project):?>
                        <?php $stories = $project->getJelvixStories();
                        $stories = $stories[0];
                        ?>
                    <li class="project-element">
                        <div class="project">
                            <div class="project-shadow">
                                <img src="<?php echo $project->getThumbnail() ?>" width="260" height="260" alt="">
                                <a href="<?php echo url_for2('jelvix_projects_show', array( 'title' => $project->getTitle())) ?>" class="project-link">
                                    <span><?php echo $project->getTitle() ?></span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <?php endforeach ?>
                </ul>
            </div>
            <div class="main-bottom-header">
                <div class="text"><a class="to-stories" href="<?php echo url_for('jelvix_stories')?>">See more</a> real life stories</div>
                <div class="header-decorator"></div>
            </div>
            <div class="stories-container">
                <ul class="recent-projects-list">
                <?php foreach($projects as $project):?>
                    <?php $stories = $project->getJelvixStories();
                    $stories = $stories[0];
                    ?>
                    <li class="project-element">
                        <div class="review-container">
                            <div class="review-text-container">
                                <div class="text"><?php echo $stories->getText()?></div>
                            </div>
                            <div class="review-decorator"></div>
                            <div class="user-info-container">
                                <img src="<?php echo $stories->getPhoto()?>" alt="">
                                <div class="user-name"><?php echo $stories->getAuthor()?></div>
                                <div class="project-name"><a href="<?php echo $project->getOtherLink() ?>"><?php echo $project->getOtherLink() ?></a></div>
                            </div>
                        </div>
                    </li>
                <?php endforeach ?>
                </ul>
            </div>
        </div>
        <div class="bottom-teeth-border-decorator"></div>
    </div>
</div>
<script type="text/javascript">
</script>