<?php $homeURL = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<form id="ET_contactform"
    action="https://test.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8&orgId=00D8E000000HtV9" method="POST">
    <input type=hidden name="oid" value="00D8E000000HtV9">
    <input type=hidden name="retURL" value="<?php echo $homeURL; ?>?lead=success">
    <div class="contact-row">
        <div class="contact-column" data-aos="fade-up">
            <input id="last_name" maxlength="80" name="last_name" size="20" type="text" placeholder="Student Name"
                required autocomplete="off" />
        </div>
        <div class="contact-column" data-aos="fade-up">
            <input id="00NUE000001L16z" maxlength="80" name="00NUE000001L16z" size="12" type="text"
                placeholder="Date of Birth" required autocomplete="off" onfocus="this.type='date'"
                onblur="if(!this.value) this.type='text'" />
        </div>
    </div>

    <div class="contact-row">
        <div class="contact-column" data-aos="fade-up">
            <input id="phone" maxlength="40" name="phone" size="20" type="text" placeholder="Contact Number" required
                autocomplete="off" />
        </div>
        <div class="contact-column" data-aos="fade-up">
            <input id="email" maxlength="80" name="email" size="20" type="email" placeholder="Email" required
                autocomplete="off" />
        </div>
    </div>

    <div class="contact-row captcha">
        <div class="contact-column" data-aos="fade-up">
            <div class="g-recaptcha" data-sitekey="6LcZ1mIqAAAAALy42eoo-C7YCO6w5NtQgxXX1YoU"></div>
        </div>
        <div class="contact-column" data-aos="fade-up">
            <input type="hidden" id="lead_source" maxlength="40" name="lead_source" size="20" type="text"
                value="Website" />
            <input type="hidden" id="recordType" maxlength="40" name="recordType" size="20" type="text"
                value="012UE000000Xtlh" />
            <input type="hidden" id="OwnerId" maxlength="40" name="OwnerId" size="20" type="text"
                value="0053z00000CW53MAAT" />

            <input type="submit" data-aos="fade-up" name="submit" class="wpcf7-form-control wpcf7-submit"
                value="SEND INQUIRY">
        </div>
    </div>
</form>



<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    jQuery(function () {
        grecaptcha.ready(function () {
            jQuery("#ET_contactform").submit(function (e) {
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