<div class="about-container">
    <div class="top-teeth-border-decorator"></div>
    <div class="main-about-container">
        <div class="about-left-container">
            <div class="content-container">
                <div class="top-image" >
                    <div class="text"><span style="font-weight: bold;">JELVIX IS INNOVATIONAL FAST GROWING
                     COMPANY IN  SOFTWARE DEVELOPMENT
                     PROVIDING     PROFESIONAL    SERVICES
                     AROUND  THE  WORLD.</span><br>
                     We  are  founded  in 2010  with  a  headquarters  in  Israel
                and  Ukraine. Our  specialization is complex  sophisticated
                projects and mobile applications.
                     </div>
                </div>
                <div class="about-header">
                    <div class="text">Why choose us or our key advantages:</div>
                    <div class="header-decorator"></div>
                </div>
                <div class="presents-list">
                    <img src="/images/about/list-numeric.png" alt="">
                    <div class="list-text">
                        <div class="one element">We deliver fully personalized approach standing back to back in
                            cooperation with our customers.</div>
                        <div class="two element">Quality control at all stages of project development.</div>
                        <div class="three element">We bring our clients results, taking a bottom-line approach to each projectfocusing on the client's specific buisness and the beast ways to achievethem.</div>
                        <div class="four element">We enjoy building long-term business relationships.</div>
                        <div class="five element">We sincerely believe in the advancement of technology and are always
                            pushing the envelope to influence change and design better  solutions.</div>
                    </div>
                </div>
                <div class="about-header2">
                    <div class="text">Among the million "best" companies are very difficult to choose
                        your own. We offer you to choose Jelvix,  because  we  are  sure
                        that have something to surprise you!</div>
                    <div class="header-decorator"></div>
                </div>
                <div class="our-team">
                    <img class="left-header-line" src="/images/header-line.png" alt=""/>
                    <span>Our Team</span>
                    <img class="right-header-line" src="/images/header-line.png" alt=""/>
                </div>
                <ul class="team">
                    <li class="team-element"><img src="/images/about/andreev.png" alt=""></li>
                    <li class="team-element"><img src="/images/about/yusov.png" alt=""></li>
                    <li class="team-element"><img src="/images/about/berlin.png" alt=""></li>
                </ul>
            </div>
        </div>
        <div class="about-right-container">
            <div class="last-five-news-shadow">
            <div class="last-five-news-container">
                <div class="arrow-top"></div>
                <ul class="five-news-list">
                    <?php foreach($lastFiveNews as $news): ?>
                    <li class="small-news-element">
                        <a href="<?php echo url_for2('jelvix_news_show', array('id' => $news->getId()))?>">
                            <?php echo substr($news->getTitle(), 0, 20) ?> ...
                        </a>
                    </li>
                    <?php endforeach?>
                </ul>
            </div>
            </div>
            <ul class="cooperations-models">
                <li class="top-decorator"></li>
                <li class="cm">COOPERATION MODELS</li>
                <li class="model-element">
                    <div class="coop-header"><span class="dedicated-team"><strong>OFFSHORE DEDICATED TEAM</strong></span></div>
                    <div class="coop-content">LONG-TERM COMMITMENT TO ESTABLISH AND OPERATE A MANAGED IT ENGINEERING FACILITY FOR THE CLIENT ON THE BASIS OF Jelvix.<br>
                        Best solution for long-term
                        assignments and ongoing cooperation. Works as an
                        extension of a customer's organisation. Fixed monthly cost and no overhead.</div>
                </li>
                <li class="model-element">
                    <div class="coop-header"><span class="time-materials"><strong>TIME & MATERIALS</strong></span></div>
                    <div class="coop-content">PROJECT IS DELIVERED ON A STANDARD BASIS, PAYMENTS CONDUCTED ACCORDING TO ACTUALLY
                        SPENT HOURS, MORE FLEXIBLE THAN FIXED BUDGET.<br>
                        Particularly good for open-ended, long-term projects where it is hard to make a solid
                    estimation of required efforts or there is a need to constantly add new features</div>
                </li>
                <li class="model-element">
                    <div class="coop-header"><span class="fixed-budget"><strong>FIXED BUDGET</strong></span></div>
                    <div class="coop-content">PROJECT IS DELIVERED ON A STANDARD BASIS FOR FIXED PRICE.<br>
                        Used for projects with a clear, detailed software requirements specifications
                        and agreed timeline for the project completion. Price is fixed according to the preliminary agreement.
                    </div>
                </li>
                <li class="bottom-decorator"></li>
            </ul>
        </div>
    </div>
    <div class="bottom-teeth-border-decorator"></div>
</div>