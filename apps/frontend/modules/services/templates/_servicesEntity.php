<ul class="cervices-list-container" style="float: left">
    <?php foreach ($services as $service): ?>
        <li class="services-list-element">
            <ul class="services-list-element-container">
                <?php foreach ($service as $item): ?>
                    <?php $smallText = substr(html_entity_decode($item->getText()), 0, rand(150, 300)) ?>
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
                                        <?php echo $smallText . '...' ?>
                                    </div>
                                    <input type="hidden" class="source-text" value="<?php echo $item->getText() ?>">
                                    <input type="hidden" class="cuted-text" value="<?php echo $smallText ?>">
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
