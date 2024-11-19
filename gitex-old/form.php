<?php $homeURL = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<form id="ET_contactform" action="#" method="POST">
<input type=hidden name="oid" value="00D3z000000eGDP">
<input type=hidden name="retURL" value="<?php echo $homeURL; ?>?lead=success">
<div class="contact-row">
    <div class="contact-column">
        <input  id="last_name" maxlength="80" name="last_name" size="20" type="text" placeholder="Full Name"  autocomplete="off"/>
    </div>
    <div class="contact-column">
        <input  id="phone" maxlength="40" name="phone" size="20" type="text" placeholder="Contact Number"  autocomplete="off"/>
    </div>
</div>

<div class="contact-row">
    <div class="contact-column">
        <input  id="00NSl000006IALe" maxlength="255" name="00NSl000006IALe" size="20" type="text" placeholder="Emirates"  onkeydown="return /[a-zA-Z]/i.test(event.key)"  autocomplete="off"/>
    </div>
    <div class="contact-column">
        <input  id="email" maxlength="80" name="email" size="20" type="email" placeholder="Email"  autocomplete="off"/>
    </div>
</div>

<div class="contact-row">
    <div class="contact-column">
        <div class="g-recaptcha" data-sitekey="6LcZ1mIqAAAAALy42eoo-C7YCO6w5NtQgxXX1YoU"></div>
    </div>
    <div class="contact-column">
        <input  type="hidden"  id="lead_source" maxlength="40" name="lead_source" size="20" type="text" value="Website"/>
        <input type="hidden"  id="recordType" maxlength="40" name="recordType" size="20" type="text" value="012Sl000001z9dh"/>
        <input type="hidden"  id="OwnerId" maxlength="40" name="OwnerId" size="20" type="text" value="00G8E000007ZrgTUAS"/>
        
        <input type="submit" name="submit" class="wpcf7-form-control wpcf7-submit">
    </div>
</div>
</form>



<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    jQuery(function() {
        grecaptcha.ready(function() {
            jQuery("#ET_contactform").submit(function(e) {
                var $this = $(this);
                var response = grecaptcha.getResponse();
                if (response.length == 0) {
                    alert("Please complete the reCAPTCHA.");
                    event.preventDefault(); // Prevent form submission
                    return false; // Allow form submission
                }
                // alert("success")
                return true; // Allow form submission

            });
        });
    });
</script>