function checkCurrentMenuElement()
{

    $('.header-menu-list-element a').each(function() {
        if($(this).attr('href') == document.location.pathname)
            $(this).parent().css({'border-bottom' : '1px dashed #fff'});
    });
}

function initServicesEntity()
{
    $('.sevices-entity').on('click', function () {
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

    $('.sevices-entity').on('mouseenter', function() {
        $(this).find('div').each(function(){
            $(this).addClass("hover");
        });
    });

    $('.sevices-entity').on('mouseleave', function() {
        $(this).find('div').each(function(){
            $(this).removeClass("hover");
        });
    });
}

$(document).ready(function() {

    checkCurrentMenuElement();
    initServicesEntity();

    $('.services-filter-button').bind('mousedown', function() {
        $(this).addClass('active');
    });

    $('.services-filter-button').bind('mouseup', function() {
        $(this).removeClass('active');
    });

    $('.services-category-filter-buttons .architect').bind('click', function() {
        $('.load-data-container').load('services/filter-by-categoty?name=architect', initServicesEntity);
    });

    $('.services-category-filter-buttons .design').bind('click', function() {
        $('.load-data-container').load('services/filter-by-categoty?name=design', initServicesEntity);
    });

    $('.services-category-filter-buttons .development').bind('click', function() {
        $('.load-data-container').load('services/filter-by-categoty?name=development', initServicesEntity);
    });

    $('.services-category-filter-buttons .grow').bind('click', function() {
        $('.load-data-container').load('services/filter-by-categoty?name=grow', initServicesEntity);
    });

});