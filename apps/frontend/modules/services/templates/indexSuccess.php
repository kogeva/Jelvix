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
            <div class="horizontal-line"></div>
        </div>
        <div class="load-data-container">
            <?php  include_partial('servicesEntity', array( 'services' => $services))?>
        </div>
    </div>
    <div class="bottom-teeth-border-decorator"></div>
</div>