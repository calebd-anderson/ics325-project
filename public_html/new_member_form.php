<!DOCTYPE html>
<?php
    include('header.php');
?>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="css\pswd_validation.css">
<link rel="stylesheet" href="css\special_form.css">
  <form action="add_member.php" method="post" id="mainForm">
      <fieldset class="fieldset">
          <legend style="font-family: Raleway;">Chasing Arctic - Register</legend>

          <div class="tab">Name:
            <p><input type="text" placeholder="First name..." oninput="this.className = ''"></p>
            <p><input type="text" placeholder="Last name..." oninput="this.className = ''"></p>
          </div>

          <div class="tab">Login Info:
            <p><input placeholder="Username..." type="text" id="name" name="username" maxlength="25" oninput="this.className = ''" /></p>                
                  <span class="container">                  
                      <input placeholder="Password..." data-toggle="popover" data-trigger="focus" data-content="Try to pick something that’s not easy to guess." type="password" id="pswd" name="pswd" maxlength="100" size="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" oninput="this.className = ''"/>                   
                      <a class="input_img" onclick="toggle_pswd()"><img src="https://cdn3.iconfinder.com/data/icons/show-and-hide-password/100/show_hide_password-07-512.png" width="auto" height="35" id="EYE"></a>
                  </span>
              </p>                    
              <p id="text">WARNING! Caps lock is ON.</p>
              <div id="message">
                  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                  <p id="number" class="invalid">A <b>number</b></p>
                  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
              </div>
          </div>

          <div class="tab">Contact Info:
              <p><input type="text" placeholder="E-mail..." oninput="this.className = ''"></p>
              <p><input type="text" placeholder="Phone..." oninput="this.className = ''"></p>
          </div>

          <div style="overflow:auto;">
          <div style="float:right;">
              <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
              <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
          </div>
          </div>

          <!-- Circles which indicates the steps of the form: -->
          <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <!-- <span class="step"></span> -->
          </div>
      </fieldset>
  </form>
<script src="js/fields.js"></script>
<script src="js/pswd_validation.js"></script>
<script src="js/step_form.js"></script>
<?php
    include('footer.php');
?>