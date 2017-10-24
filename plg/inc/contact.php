<div class="col-md-12 title"><h2><span class="under2">Contact <span class="under1">Us</span></span></h2><br></div>
<p class="col-md-6 offset-md-3"  style="text-align: center;">Lorem ipsum dolor sit amet, consetur adispiscing a elit, sed od eiusmod</p>
<form method="post" action="#">
<div class="row">
<div class="col-md-4">
  <span class="col-form-label blue flabel">Name</span><br>
  <input type="text ftext" style="width: 100% !important; border: 0.5px solid #ccc; padding: 5px;  border-radius: 2px;">         
</div>
<div class="col-md-4">
  <span class="col-form-label blue flabel">Phone Number</span><br>
  <input type="text ftext" style="width: 100% !important; border: 0.5px solid #ccc; padding: 5px;  border-radius: 2px;">
</div>
<div class="col-md-4">
  <span class="col-form-label blue flabel">Email</span><br>
  <input type="text ftext" style="width: 100% !important; border: 0.5px solid #ccc; padding: 5px;  border-radius: 2px;">
</div>
</div>
<div class="row">
<div class="col-md-8">
  <span class="col-form-label blue flabel">Message</span><br>
  <input type="text fmessage" style="width: 100% !important; height: 150px; padding: 5px; border: 0.5px solid #ccc; border-radius: 5px;">
</div>
<div class="col-md-4">
  <?php/**
          require_once('recaptchalib.php');
          $publickey = "6Lf9SzUUAAAAALK-6pexangnxWIi8KZhodn06eWA"; // you got this from the signup page
          echo recaptcha_get_html($publickey);**/
        ?><br>
        <div class="g-recaptcha" data-sitekey="6Lf9SzUUAAAAALK-6pexangnxWIi8KZhodn06eWA" style="margin-top: 10px;"></div><br>
        <input class="btn btn-primary" style="border-radius: 2px; width: 130px; height: 40px; padding-bottom: 30px; text-align: center; text-transform: uppercase;" type="submit" />

</div>
</form>
</div>

      
        
      