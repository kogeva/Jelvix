<div class="services-container">
    <div class="top-teeth-border-decorator"></div>
    <div class="services-list-container">
        <ul class="services-category-filter-buttons">
            <li class="services-filter-button architect">
                <a href="#">Architect</a>
            </li>
            <li class="services-filter-button design">
                <a href="#">Design</a>
            </li>
            <li class="services-filter-button development">
                <a href="#">Development</a>
            </li>
            <li class="services-filter-button grow">
                <a href="#">Grow</a>
            </li>
        </ul>
        <div class="horizontal-line-container">
            <hr>
        </div>
        <div class="load-data-container">
            <?php  include_partial('servicesEntity', array( 'services' => $services))?>
        </div>
    </div>
    <div class="bottom-teeth-border-decorator"></div>
</div>
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
        $('.load-data-container').load('/services/filter-by-categoty?name=architect');
    });

    $('.services-category-filter-buttons .design').one('click', function() {
        $('.load-data-container').load('/services/filter-by-categoty?name=design');
    });

    $('.services-category-filter-buttons .development').one('click', function() {
        $('.load-data-container').load('/services/filter-by-categoty?name=development');
    });

    $('.services-category-filter-buttons .grow').one('click', function() {
        $('.load-data-container').load('/services/filter-by-categoty?name=grow');
    });
</script>