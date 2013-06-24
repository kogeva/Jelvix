<div class="content-head">
    <a class="back-button" href="#">
        <div class="text">Back</div>
    </a>

    <div class="header-arrow"></div>
    <div class="header-top">Request a quote in seconds</div>
    <div class="header-botton">Complete the form below to get your free quote</div>
</div>
<div class="form-container">
    <div class="request-form">
        <form id='create-request' action="<?php echo url_for('jelvix_request_create')  ?>" method="post">
            <div class="left-part">
                <?php if ($sf_user->hasFlash('notice')): ?>
                    <div class="notice">Your message has been sent. We will contact you within two business days.</div>
                <?php endif; ?>
                <ul class="form-inputs-container">
                    <li class="form-input">
                        <div class="label"><?php echo $form['name']->renderLabel()?></div>
                        <div class="valid-error">Please fill this field</div>
                        <div class="input"><?php echo $form['name']->render()?></div>
                        <div class="valid-img"></div>
                    </li>
                    <li class="form-input">
                        <div class="label"><?php echo $form['email_address']->renderLabel()?></div>
                        <div class="valid-error">Please enter a valid email address</div>
                        <div class="input"><?php echo $form['email_address']->render()?></div>
                        <div class="valid-img"></div>
                    </li>
                    <li class="form-input">
                        <div class="label"><?php echo $form['phone']->renderLabel()?></div>
                        <div class="valid-error">Please enter a valid phone number</div>
                        <div class="input"><?php echo $form['phone']->render()?></div>
                        <div class="valid-img"></div>
                    </li>
                    <li class="form-input">
                        <div class="label"><?php echo $form['company']->renderLabel()?></div>
                        <div class="valid-error">Please fill this field</div>
                        <div class="input"><?php echo $form['company']->render()?></div>
                        <div class="valid-img"></div>
                    </li>
                    <li class="form-input">
                        <div class="label"><?php echo $form['message']->renderLabel()?></div>
                        <div class="input"><?php echo $form['message']->render()?></div>
                        <?php echo $form['_csrf_token']->render()?>
                    </li>
                </ul>
                <div class="bottom-form-container">
                    <button type="submit"></button>
                    <div class="notification">We will contact you within two business days.</div>
                </div>
            </div>
            <div class="right-part">
                <ul class="right-content-container">
                    <li class="right-container-head">
                        <div class="text">What you get</div>
                        <div class="border-bottom"></div>
                    </li>
                    <li class="right-content-container">
                        <div class="img"></div>
                        <div class="text">An
                            <span class="blue-color">email</span> and
                            <span class="blue-color">phone call</span>
                            from one of our online business consultants.
                        </div>
                    </li>
                    <li class="right-content-container">
                        <div class="img"></div>
                        <div class="text">A <span class="blue-color">cost estimate</span> for<br>your project.</div>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    var inputs = {
        'name' : /^[\d\w\s]{3,255}$/,
        'email_address' : /(\w[-._\w]*\w@\w[-._\w]*\w\.\w{2,3})/,
        'phone' : /^[\d]{7,255}$/,
        'company' : /^[\w\d]{2,255}$/
    };

    $('[name]').bind('keyup focus blur', function(){
        nameElement = $(this).attr('name');

        if(!inputs[nameElement].test($(this).val()))
        {
            $(this).parent().siblings('.valid-img').addClass('error-img');
            $(this).parent().siblings('.valid-img').removeClass('success-img');
            $(this).parent().siblings('.valid-error').css({opacity: 1});
            $(this).addClass('form-input-error');
        }
        else
        {
            $(this).parent().siblings('.valid-img').removeClass('error-img');
            $(this).parent().siblings('.valid-img').addClass('success-img');
            $(this).parent().siblings('.valid-error').css({opacity: 0});;
            $(this).removeClass('form-input-error');
        }
    });

    $('#create-request').bind('submit', function() {

        for(inp in inputs)
        {
            if($('[name='+inp+']').val().length < 1 || $('[name='+inp+']').hasClass('form-input-error'))
                return false;
        }
    });

    $('.back-button').bind('click', function(){
        parent.history.back();
        return false;
    });

</script>