<?php
  require('header.php');
  require('../../SQLcreds.inc');
      $conn = new mysqli($servername, $SQLuser, $SQLpswd, $dbname);
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
<!-- HEADING -->
<h2 style="font-family: Raleway;" id="" class="text-center" data-i18n="">Profile & Account Management</h2>
<!-- INITIAL FORM -->
<div class="container center">
  <form action="setup_2fa.php" method="get">
    <!-- DISPLAY NAME -->
    <div class="form-group clearfix row">
      <label class="pull-left col">
        <span id="" data-i18n="">Display name:</span>
      </label>
      <div class="pull-left col">
        <input id="" placeholder=" <?php echo $_SESSION['username']?>" type="text" class="input-control" disabled>
      </div>
    </div>
    <!-- EMAIL -->
    <div id="" class="form-group clearfix row">
      <label class="pull-left col" for="email">
        <span id="" class="label-text" data-i18n="">Email address:</span>
      </label>
      <div class="pull-left col">
        <input type="email" name="email" class="input-control" disabled="" placeholder=" <?php echo $_SESSION['email']?>">
        <!-- <span style="display:none;" class="help-text" id="" data-i18n="">Email address is not formatted correctly.</span>
        <span style="display:none;" class="help-text" id="" data-i18n="">Email address is required.</span>
        <span style="display:none;" class="help-text" id="" data-i18n="">Email address is already being used.</span>
        <span style="display:none;" class="help-text" id="">
          <a name="resendLink" href="#" id="" data-i18n="">Resend Email Verification</a>
        </span> -->
      </div>
      <!-- <div class="clearfix pull-right">
        <a class="btn btn-primary" id="" data-i18n="">Change</a>
      </div> -->
    </div>
    <!-- DATE OF BIRTH -->
    <div class="form-group clearfix row">
      <label id="" class="pull-left col" for="dob" data-i18n="">
        <span>Date of birth:</span>
      </label>
      <div class="pull-left col">
        <input type="text" name="dob" class="input-control" disabled="" placeholder=" n/a">
      </div>
    </div>
    <!-- BUTTON GROUP -->
    <div class="form-group btn-group row" role="group">
      <!-- <a id="" class="btn btn-primary" data-i18n="" onclick="myFunction()"><span>Change Password</span></a> -->
      <input type="submit" class="btn btn-primary" value="Change Password" formaction="change_pass.php">
      <input type="submit" class="btn btn-primary" value="Change Email" formaction="change_email.php">
      <input type="submit" class="btn btn-primary" value="Delete Account" formaction="delete_account.php">
    </div>
    <!-- 2FA SWITCH -->
    <?php
      if(@$secret){
        echo '<div class="form-group"><div class="custom-control custom-switch pull-left row">';
        echo '<input checked="checked" type="checkbox" class="custom-control-input" id="2fa" name="2fa" onChange="this.form.submit()">';
      } else {
        echo '<div class="form-group"><div class="custom-control custom-switch pull-left row">';
        echo '<input type="checkbox" class="custom-control-input" id="2fa" name="2fa" onChange="this.form.submit()">';
      }
    ?>
    <label class="custom-control-label" for="2fa">Enable/Disable 2FA</label>
  </form>
</div>
</div>
</div>
<!-- attempt -->
<!-- <div class="btn-group" role="group">
  <button onclick="myFunction()" formaction="">Click Me</button>
  <div id="myDIV">
    This is my DIV element.
  </div>
</div> -->

<script>
  function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

<!-- <div class="bg-info clearfix">
  <button type="button" class="btn btn-secondary float-left">Example Button floated left</button>
  <button type="button" class="btn btn-secondary float-right">Example Button floated right</button>
</div> -->

<?php
  require('../footer.php');
?>