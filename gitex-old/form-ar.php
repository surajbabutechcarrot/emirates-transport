<?php $homeURL = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
<form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8&orgId=00D3z000000eGDP" method="POST">
<input type=hidden name="oid" value="00D3z000000eGDP">
<input type=hidden name="retURL" value="<?php echo $homeURL; ?>?lead=success">
<div class="contact-row">
    <div class="contact-column">
        <input  id="last_name" maxlength="80" name="last_name" size="20" type="text" placeholder="الاسم الكامل" required autocomplete="off"/>
    </div>
    <div class="contact-column">
        <input  id="phone" maxlength="40" name="phone" size="20" type="text" placeholder="رقم الاتصال" required autocomplete="off"/>
    </div>
</div>

<div class="contact-row">
    <div class="contact-column">
        <input  id="00NSl000006IALe" maxlength="255" name="00NSl000006IALe" size="20" type="text" placeholder="الإمارة" onkeydown="return /[a-zA-Z]/i.test(event.key)" required autocomplete="off"/>
    </div>
    <div class="contact-column">
        <input  id="email" maxlength="80" name="email" size="20" type="email" placeholder="البريد الإلكتروني" required autocomplete="off"/>
    </div>
</div>

<div class="contact-row">
    <div class="contact-column">
        <select  id="00NSl000006IALf" name="00NSl000006IALf" title="Interested Services" required>
            <option value="">الخدمة</option>
            <option value="School Transport">النقل المدرسي</option>
            <option value="Transport &amp; Leasing">النقل والتأجير</option>
            <option value="Maintenance, Repair and Operations">الخدمات الفنية</option>
            <option value="New Ventures">المشاريع الجديدة</option>
        </select>
    </div>
    <div class="contact-column">
        <input  type="hidden"  id="lead_source" maxlength="40" name="lead_source" size="20" type="text" value="Website"/>
        <input type="hidden"  id="recordType" maxlength="40" name="recordType" size="20" type="text" value="012Sl000001z9dh"/>
        <input type="hidden"  id="OwnerId" maxlength="40" name="OwnerId" size="20" type="text" value="00G8E000007ZrgTUAS"/>
        <input type="submit" name="submit" class="wpcf7-form-control wpcf7-submit" value="تقديم">
    </div>
</div>
</form>