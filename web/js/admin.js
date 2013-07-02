$(document).ready(function() {
    if(window.location.pathname.indexOf('news') != -1){
        area2 = new nicEditor({fullPanel : true}).panelInstance('jelvix_news_text');
    }
    else
    {
        nicEditors.allTextAreas({fullPanel : true, maxHeight : 100});
    }
});