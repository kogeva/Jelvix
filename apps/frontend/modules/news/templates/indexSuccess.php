<div class="news-container">
    <div class="top-teeth-border-decorator"></div>
    <div class="news-list-container">
        <div class="latest-news">
            <img class="left-header-line" src="/images/header-line.png" alt=""/>
            <span>Latest News</span>
            <img class="right-header-line" src="/images/header-line.png" alt=""/>
        </div>
        <?php foreach ($pager->getResults() as $news): ?>
            <div class="news">
                <img src="<?php echo $news->getLogo() ?>" class="news-logo" alt="news logo"/>

                <h1>
                    <a href="<?php echo url_for2('jelvix_news_show', array('id' => $news->getId())) ?>"><?php echo $news->getTitle() ?></a>
                </h1>

                <p><?php echo sfOutputEscaper::unescape(substr($news->getText(), 0, 160)) . ' ...' ?></p>

                <div class="news-create-date">
                    <?php echo date('M j, Y', strtotime($news->getCreatedAt())) ?>
                    <hr>
                </div>
            </div>
        <?php endforeach ?>
        <div class="pagination-container">
            <div class="pagination">
                <?php if ($pager->getFirstPage() != $pager->getPage()): ?>
                    <a class="prev-pagination"
                       href="/frontend_dev.php/news?page=<?php echo $pager->getPreviousPage() ?>">
                        <div class="pagination-text-decorator">Prev</div>
                    </a>
                <?php else: ?>
                    <a class="prev-pagination prev-no-active"
                       href="/frontend_dev.php/news?page=<?php echo $pager->getPreviousPage() ?>">
                        <div class="pagination-text-decorator">Prev</div>
                    </a>
                <?php endif ?>
                <?php foreach ($pager->getLinks() as $page): ?>
                    <?php if ($page == $pager->getPage()): ?>
                        <a class="active-page not-active-page">
                            <div class="pagination-text-decorator">
                                <?php echo $page ?>
                            </div>
                        </a>
                    <?php else: ?>
                        <a class="active-page" href="/frontend_dev.php/news?page=<?php echo $page ?>">
                            <div class="pagination-text-decorator">
                                <?php echo $page ?>
                            </div>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php if ($pager->getPage() != $pager->getLastPage()): ?>
                    <a class="next-pagination" href="/frontend_dev.php/news?page=<?php echo $pager->getNextPage() ?>">
                        <div class="pagination-text-decorator">Next</div>
                    </a>
                <?php else: ?>
                    <a class="next-pagination next-not-active" href="/frontend_dev.php/news?page=<?php echo $pager->getNextPage() ?>">
                        <div class="pagination-text-decorator">Next</div>
                    </a>
                <?php endif ?>
            </div>
        </div>
    </div>
    <div class="bottom-teeth-border-decorator"></div>
</div>