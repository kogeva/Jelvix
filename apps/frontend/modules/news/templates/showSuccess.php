<div class="news-container">
    <div class="top-teeth-border-decorator"></div>
    <div class="news-list-container">
        <div class="news-show-title"><?php echo $news->getTitle() ?></div>
        <div class="news-show-date"><?php echo date('M j, Y', strtotime($news->getCreatedAt())) ?></div>
        <img class="news-show-img" src="<?php echo $news->getLogo() ?>" alt="">
        <div class="news-show-text"><?php echo $news->getText() ?></div>
    </div>
    <div class="bottom-teeth-border-decorator"></div>
</div>