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
                <? $html = substr($news->getSmallText(), 0 , 200).'...'?>
                <p><?php echo $html?></p>
                <div class="news-create-date">
                    <?php echo date('M j, Y', strtotime($news->getCreatedAt())) ?>
                    <hr>
                </div>
            </div>
        <?php endforeach ?>
        <div class="pagination-container">
            <span>
                <ul class="pagination">
                    <li>
                        <?php if ($pager->getFirstPage() != $pager->getPage()):?>
                        <a class="prev-pagination" href="<?php echo url_for2('jelvix_news', array('page' => $pager->getPreviousPage()))?>">
                            <div class="pagination-text-decorator">Prev</div>
                        </a>
                        <?php else:?>
                            <a class="prev-pagination prev-no-active"><div class="pagination-text-decorator">Prev</div></a>
                        <?php endif ?>
                    </li>
                    <?php foreach ($pager->getLinks() as $page): ?>
                        <li>
                        <?php if ($page == $pager->getPage()): ?>
                            <a class="active-page not-active-page">
                                <div class="pagination-text-decorator">
                                    <?php echo $page ?>
                                </div>
                            </a>
                        <?php else: ?>
                            <a class="active-page" href="/frontend_dev.php/blog?page=<?php echo $page ?>">
                                <div class="pagination-text-decorator">
                                    <?php echo $page ?>
                                </div>
                            </a>
                        <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                    <li>
                        <?php if ($pager->getPage() != $pager->getLastPage()):?>
                            <a class="next-pagination" href="<?php echo url_for2('jelvix_news', array('page' => $pager->getNextPage()))?>">
                                <div class="pagination-text-decorator">Next</div>
                            </a>
                        <?php else:?>
                            <a class="next-pagination next-not-active"><div class="pagination-text-decorator">Next</div></a>
                        <?php endif ?>
                    </li>
                </ul>
            </span>
        </div>
    </div>
    <div class="bottom-teeth-border-decorator"></div>
</div>