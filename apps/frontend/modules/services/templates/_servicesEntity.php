<ul class="cervices-list-container" style="float: left">
    <?php foreach ($services as $service): ?>
    <li class="services-list-element">
        <ul class="services-list-element-container" >
        <?php foreach($service as $item):?>
            <?php $smallText = substr($item->getText(), 0, rand(150, 300)) ?>
            <li class="cdscadscdsca">
                <div class="services-entity-container">
                    <div class="sevices-entity">
                        <div class="border-top category-<?php echo $item->getJelvixServicesCategory()->getName() ?>-top"></div>
                        <div class="cervices-entity-body category-<?php echo $item->getJelvixServicesCategory()->getName() ?>-body">
                            <div class="cervices-entity-head ">
                                <?php echo $item->getTitle()?>
                            </div>
                            <a  class="entity-text category-architect">
                                <?php echo $smallText.'...' ?>
                            </a>
                            <input type="hidden" class="source-text" value="<?php echo $item->getText() ?>">
                            <input type="hidden" class="cuted-text" value="<?php echo $smallText ?>">
                        </div>
                        <div class="border-bottom category-<?php echo $item->getJelvixServicesCategory()->getName() ?>-bottom"></div>
                    </div>
                </div>
            <?php ?>
            </li>
            <?php endforeach ?>
        </ul>
    </li>
    <?php endforeach ?>
</ul>
<script type="text/javascript">

$('.sevices-entity').bind('click', function () {
        sourceText = $(this).find('.source-text').val();
        cutedText  = $(this).find('.cuted-text').val();
        $mainText  = $(this).find('.entity-text');

        if($($mainText).hasClass('deployed'))
        {
            $($mainText).removeClass('deployed').html(cutedText);
        }
        else
            $($mainText).addClass('deployed').html(sourceText);
    });

$('.services-category-filter-buttons .architect').one('click', function() {
    $('.load-data-container').load('/frontend_dev.php/services/filter-by-categoty?name=architect');
});

$('.services-category-filter-buttons .design').one('click', function() {
    $('.load-data-container').load('/frontend_dev.php/services/filter-by-categoty?name=design');
});

$('.services-category-filter-buttons .development').one('click', function() {
    $('.load-data-container').load('/frontend_dev.php/services/filter-by-categoty?name=development');
});

$('.services-category-filter-buttons .grow').one('click', function() {
    $('.load-data-container').load('/frontend_dev.php/services/filter-by-categoty?name=grow');
});
</script>