<?php
  require('header.php');
  require('../SQLcreds.inc');
      // Create connection
      $conn = new mysqli($servername, $SQLuser, $SQLpswd, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $username = $_SESSION['username'];
      $sql = "SELECT AES_DECRYPT(secret, UNHEX('$key')) FROM member_creds WHERE username = '$username' LIMIT 1";
      $result = $conn->query($sql);
      $row = $result -> fetch_array(MYSQLI_NUM);
      $secret = $row[0];
?>
<style>
  .center{
    /* width:90%; Takes 90% width from WebContainer */
    margin: 0 auto;
    width: 425px;
    padding: 10px;
  } 
</style>
<h1 id="" class="text-center" data-i18n="">Profile</h1>

<form class="center" action="setup_2fa.php" method="get">
  <div class="form-group clearfix">
    <label class="pull-left">
      <span style="padding:10px;" id="" data-i18n="">Display name:</span>
    </label>
    <div class="pull-left">
      <input id="" placeholder="<?php echo @$_SESSION['username']?>" type="text" class="input-control" disabled>
    </div>
  </div>
  <div id="" class="form-group clearfix ">
    <label class="pull-left" for="">
      <span style="padding:10px;" id="" class="label-text" data-i18n="">Email address:</span>
    </label>
    <div class="pull-left">
      <input id="" type="email" class="input-control" disabled="">
      <span style="display:none;" class="help-text" id="" data-i18n="">Email address is not formatted correctly.</span>
      <span style="display:none;" class="help-text" id="" data-i18n="">Email address is required.</span>
      <span style="display:none;" class="help-text" id="" data-i18n="">Email address is already being used.</span>
      <span style="display:none;" class="help-text" id="">
        <a name="resendLink" href="#" id="" data-i18n="">Resend Email Verification</a>
      </span>
    </div>
    <div class="clearfix pull-right">
      <a class="btn btn-primary" id="" data-i18n="">Change</a>
    </div>
  </div>
  <div class="form-group clearfix">
    <label id="" class="pull-left" for="" data-i18n="">
      <span style="padding:10px;">Date of birth:</span>
    </label>
    <div class="pull-left">
      <input type="text" id="" class="input-control" disabled="">
    </div>
  </div>
      <a id="" class="btn btn-primary" data-i18n=""><span>Change Password</span></a>
  </div>  
  <?php
    if(@$secret){
      echo '<div class="custom-control custom-switch pull-right">';
      echo '<input checked="checked" type="checkbox" class="custom-control-input" id="2fa" name="2fa" onChange="this.form.submit()">';
    } else {
      echo '<div class="custom-control custom-switch pull-right">';
      echo '<input type="checkbox" class="custom-control-input" id="2fa" name="2fa" onChange="this.form.submit()">';
    }
  ?>
  <label class="custom-control-label" for="2fa">Enable/Disable 2FA</label>
</div>
</form>

<!-- <div class="bg-info clearfix">
  <button type="button" class="btn btn-secondary float-left">Example Button floated left</button>
  <button type="button" class="btn btn-secondary float-right">Example Button floated right</button>
</div> -->

<?php
  require('footer.php');
?>