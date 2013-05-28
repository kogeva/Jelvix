<div class="contacts-main-container">
    <div class="top-teeth-border-decorator"></div>
    <div class="contacts-container">
        <div class="contacts-left-container">
            <div class="contacts-header">Contact Us</div>
            <div class="contacts-header-text">See how your business can benefit with Jelvix. Contact us to find out what
                we
                can do for you.
            </div>
            <?php if ($sf_user->hasFlash('notice')): ?>
                <div class="notice">Your message has been sent. We will contact you within two business days.</div>
            <?php endif; ?>
            <div class="contacts-form-container">
                <form action="<?php echo url_for('jelvix_contacts_create') ?>" method="post">
                    <?php echo $contactForm['name']->renderRow(array('class' => 'contact-input')) ?>
                    <?php echo $contactForm['email_address']->renderRow(array('class' => 'contact-input')) ?>
                    <?php echo $contactForm['subject']->renderRow(array('class' => 'contact-input')) ?>
                    <?php echo $contactForm['message']->renderRow(array('class' => 'contact-input')) ?>
                    <?php echo $contactForm['_csrf_token']->render() ?>
                    <div class="button-container">
                        <input class="submit-button" type="submit" value="Submit"/>
                    </div>
                </form>
            </div>
        </div>
        <div class="contacts-right-container">
            <ul class="main-list">
                <li class="right-header">
                    Jelvix<br> Offices Locations
                </li>
                <li class="contact-box">
                    <ul class="entity-contact">
                        <li class="entity-head">Israel</li>
                        <li class="entity-address">42 Arthur Ruppin,
                            <br>Office 14
                            <br>Be'er Sheva, 84001
                        </li>
                        <li class="entity-decorator">---</li>
                        <li class="entity-email">
                            <img src="/images/contacts/mail.png" alt="" style="float: left"/>

                            <div class="text">jelvixteam@gmail.com</div>
                        </li>
                        <li class="entity-phone">
                            <img src="/images/contacts/phone.png" alt="" style="float: left"/>

                            <div class="text">15672587XXX</div>
                        </li>
                        <li class="entity-skype">
                            <img src="/images/contacts/skype.png" alt="" style="float: left"/>

                            <div class="text">jelvixteam</div>
                        </li>
                    </ul>
                </li>
                <li class="contact-box">
                    <ul class="entity-contact">
                        <li class="entity-head">Ukraine</li>
                        <li class="entity-address">38 Kirova street,
                            <br>Second Floor
                            <br>Kharkov, 61001
                        </li>
                        <li class="entity-decorator">---</li>
                        <li class="entity-email">
                            <img src="/images/contacts/mail.png" alt="" style="float: left"/>

                            <div class="text">jelvixteam@gmail.com</div>
                        </li>
                        <li class="entity-phone">
                            <img src="/images/contacts/phone.png" alt="" style="float: left"/>

                            <div class="text">15672587XXX</div>
                        </li>
                        <li class="entity-skype">
                            <img src="/images/contacts/skype.png" alt="" style="float: left"/>

                            <div class="text">jelvixteam</div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="bottom-teeth-border-decorator"></div>
</div>