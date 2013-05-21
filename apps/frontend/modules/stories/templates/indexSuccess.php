<?php $sf_response->removeStylesheet('jquery.bxslider.css')?>
<?php $sf_response->addStylesheet('stories-slider')?>
<div class="stories-main-container">
    <div class="top-teeth-border-decorator"></div>
    <div class="stories-container">
        <div class="stories-slider-container">
            <ul class="stories-slider">
                <li><img class="stories-slide" src="/images/stories/stories-slide1.png" alt=""></li>
                <li><img class="stories-slide" src="/images/stories/stories-slide2.png" alt=""></li>
                <li><img class="stories-slide" src="/images/stories/stories-slide3.png" alt=""></li>
            </ul>
        </div>
        <div class="hr"></div>
        <ul class="stories">
            <?php foreach($stories['even'] as $story):?>
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

    function getRandomInt(min, max)
    {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    $('.stories-slider').bxSlider({
        mode: 'fade',
        speed: 1000
    });
    $('.author-photo').each(function(){

        randomNumber = getRandomInt(-5, 5);
        value = 'scale(1) rotate('+randomNumber+'deg) translateX(0px) translateY(0px) skewX(0deg) skewY(0deg)'
        $(this).css({
            '-moz-transform' : value,
            '-webkit-transform' : value,
            '-o-transform' : value,
            '-ms-transform' : value,
            'transform' : value
        });
    });
</script>