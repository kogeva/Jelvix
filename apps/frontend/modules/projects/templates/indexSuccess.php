<div class="projects-container">
    <div class="top-teeth-border-decorator"></div>
    <div class="projects-list-container">
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
            <hr>
        </div>
        <div class="projects-content-container" style="float: left; width: 100%">
            <div id="slides">
                <?php foreach($projects as $page): ?>
                <div class="slide-page">
                    <ul class="project-list-page">
                        <?php foreach($page as $project): ?>
                        <li class="project-list-element">
                            <div class="project-shadow">
                                <img src="<?php echo $project->getThumbnail() ?>" width="260" height="260" alt="" />
                                <a href="<?php echo url_for2('jelvix_projects_show', array( 'id' => $project->getId())) ?>" class="project-link">
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
<script type="text/javascript">

    function currentSlide( current ) {
        if(current <= 1 )
            $('.slidesPrevious').addClass('sliderButtonPrevious').removeAttr('href');
        else
            $('.slidesPrevious').removeClass('sliderButtonPrevious').attr('href', '#');

        if(current == $("#slides").slides("status","total"))
            $('.slidesNext').addClass('sliderButtonNext').removeAttr('href');
        else
            $('.slidesNext').removeClass('sliderButtonNext').attr('href', '#');
    }

    $(function(){
        $("#slides").slides({
            width: 990,
            height: 900
        });

        $("#slides").slides({
            navigateEnd: function( current ) {
                currentSlide( current );
            },
            loaded: function(){
                currentSlide( 1 );
            }
        });

        currentSlide( 1 );
    });


</script>