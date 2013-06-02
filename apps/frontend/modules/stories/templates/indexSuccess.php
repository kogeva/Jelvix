<?php $sf_response->removeStylesheet('jquery.bxslider.css')?>
<?php $sf_response->addStylesheet('stories-slider')?>
<div class="stories-main-container">
    <div class="top-teeth-border-decorator"></div>
    <div class="stories-container">
        <div class="stories-slider-container">
            <ul class="stories-slider">
                <li><img class="stories-slide" src="/images/stories/stories-slide1.jpg" alt=""></li>
                <li><img class="stories-slide" src="/images/stories/stories-slide2.jpg" alt=""></li>
                <li><img class="stories-slide" src="/images/stories/stories-slide3.jpg" alt=""></li>
            </ul>
        </div>
        <div class="hr"></div>
        <ul class="stories">
            <?php foreach($stories['even'] as $story):?>
                <li class="stories-item">
                    <div class="stories-text-container">
                        <div class="text">
                            <span class="quotes top">“  </span>
                        <span><?php echo '&nbsp'.$story->getText()?><span class="quotes">„</span>
                        </span>
                        </div>
                        <div class="author"><?php echo $story->getAuthor()?></div>
                        <div class="position"><?php echo $story->getPosition()?></div>
                    </div>
                    <img class="author-photo" src="<?php echo $story->getPhoto()?>" alt="">
                    <div class="circles-decorator"></div>
                </li>
            <?php endforeach?>
        </ul>
        <ul class="stories-right">
            <?php foreach($stories['odd'] as $story):?>
            <li class="stories-item">
                <div class="stories-text-container">
                    <div class="text">
                        <span class="quotes top">”</span>
                        <span><?php echo $story->getText()?><span class="quotes">„</span>
                        </span>
                    </div>
                    <div class="author"><?php echo $story->getAuthor()?></div>
                    <div class="position"><?php echo $story->getPosition()?></div>
                </div>
                <div class="circles-decorator"></div>
                <img class="author-photo" src="<?php echo $story->getPhoto()?>" alt="">
            </li>
            <?php endforeach?>
        </ul>
    </div>
    <div class="bottom-teeth-border-decorator"></div>
</div>
<script type="text/javascript">
    $('bx-viewport').css({'heigh' : '330px'});
</script>