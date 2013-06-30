$(document).ready(function() {
    if(!window.location.pathname.indexOf('news'))
        nicEditors.allTextAreas({fullPanel : true, maxHeight : 100});
    else
    {
        area2 = new nicEditor({fullPanel : true}).panelInstance('jelvix_news_text');
    }
    console.log(nicEditors.findEditor('jelvix_news_small_text'));
});