<ul class="cervices-list-container" style="float: left">
    <?php foreach ($services as $service): ?>
        <li class="services-list-element">
            <ul class="services-list-element-container">
                <?php foreach ($service as $item): ?>
                    <?php $smallText = substr(sfOutputEscaperGetterDecorator::unescape($item->getText()), 0, rand(150, 300)) ?>
                    <li class="cdscadscdsca">
                        <div class="services-entity-container">
                            <div class="sevices-entity">
                                <div
                                    class="border-top category-<?php echo $item->getJelvixServicesCategory()->getName() ?>-top"></div>
                                <div class="cervices-entity-body category-<?php echo $item->getJelvixServicesCategory()->getName() ?>-body">
                                    <div class="cervices-entity-head ">
                                        <?php echo $item->getTitle() ?>
                                    </div>
                                    <div class="entity-text category-architect">
                                        <div class="fulltext"><?php echo new Slice(sfOutputEscaperGetterDecorator::unescape($item->getText()), 800) ?></div>
                                        <div class="small-text"><?php echo $smallText .'...' ?></div>
                                    </div>
                                </div>
                                <div
                                    class="border-bottom category-<?php echo $item->getJelvixServicesCategory()->getName() ?>-bottom"></div>
                            </div>
                        </div>
                        <?php ?>
                    </li>
                <?php endforeach ?>
            </ul>
        </li>
    <?php endforeach ?>
</ul>
