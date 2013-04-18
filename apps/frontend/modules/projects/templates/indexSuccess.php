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
        <div style="float: left; width: 100%">
            <div id="slides">
                <?php foreach($projects as $page): ?>
                <div class="slide-page">
                    <ul class="project-list-page">
                        <?php foreach($page as $project): ?>
                        <li class="project-list-element">
                            <div class="project-shadow">
                                <img src="<?php echo $project->getThumbnail() ?>" width="260" height="260" alt="" />
                                <a class="boroda"></a>
                            </div>
                        </li>
                        <?php endforeach; ?>
<!--                        <li class="project-list-element"><img src="http://interesno-tyt.ru/uploads/posts/2012-02/1329557430_videohive-after-effects-project-about-me.jpg" width="260" height="260" alt=""></li>-->
<!--                        <li class="project-list-element"><img src="http://wizardry.ua/portfolio/web/bal_2007/bal.jpg" width="260" height="260" alt=""></li>-->
<!--                        <li class="project-list-element"><img src="http://www.vipdesign.com.ua/pic/portfolio/5/main.jpg" width="260" height="260" alt=""></li>-->
<!--                        <li class="project-list-element"><img src="http://devoler.com.ua/img/portfolio/maxa/website.jpg" width="260" height="260" alt=""></li>-->
<!--                        <li class="project-list-element"><img src="http://www.oszone.net/figs/u/316767/121103202739/android-market.jpg" width="260" height="260" alt=""></li>-->
<!--                        <li class="project-list-element"><img src="http://www.roundpulse.com/wp-content/uploads/2012/12/top_android_application_development_companies.jpg" width="260" height="260" alt=""></li>-->
<!--                        <li class="project-list-element"><img src="http://aonehiphop.ru/media/photo/preview/preview_main_c5248dbf0633f1ec5d29ca09040d7b3e.png.499x326_q85_box-86,210,722,560_crop.png" width="260" height="260" alt=""></li>-->
<!--                        <li class="project-list-element"><img src="http://aonehiphop.ru/media/photo/preview/preview_main_c5248dbf0633f1ec5d29ca09040d7b3e.png.499x326_q85_box-86,210,722,560_crop.png" width="260" height="260" alt=""></li>-->
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
//
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