<?php
require_once 'header/headercheckout.php';
?>
  <div class="billing_details" style="margin-top:90px; margin-left:70px; margin-bottom:120px; ">
        <div class="row">
          <div class="col-lg-8">
            <h1>Billing Details</h1>
            <form class="row contact_form" action="controle1.php" method="POST">
            <div class="col-md-6 form-group p_star">
            <input type="text" class="form-control my-input" id="first"  name="first" placeholder="First name........" autocomplete="off"  required/>
              </div>
              <div class="col-md-6 form-group p_star">
              <input type="text" class="form-control" id="last" name="last" placeholder="Last name........." autocomplete="off"  required />
              </div>
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email......" autocomplete="on"  required />
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="number" name="number" placeholder="Numero" autocomplete="off"  required />
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="City" name="city" placeholder="City" autocomplete="off"  required/>
              </div>
                <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="City" name="contry" placeholder="Contry"autocomplete="off"  required />
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="Phone" name="phone" placeholder="Phone number" autocomplete="off"  required/>
              </div>
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP" autocomplete="off"  />
              </div>           
   <div class="col-sm-12" style="margin-bottom:12px;">
        <div class="checkbox">
          <label  style="font-size:18px;">
            <input type="checkbox" value="" >
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Standard DDP — 5-14 business days
          </label>
        </div>
        <div class="checkbox">
          <label  style="font-size:18px;">
            <input type="checkbox" value="" >
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
           Express DDP — 4-9 business days
          </label>
        </div>
        <div class="checkbox disabled">
          <label  style="font-size:18px;">
            <input type="checkbox" value="" >
            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
            Postal DDP — 13-20 business days
          </label>
        </div>
    </div>
              <input type="submit" name="submit"  class=" btn btn-block send-button tx-tfm" value="Send" style="background: #F96D80; width:120px; font-weight: 600; color:#fff;margin-right:10px; padding: 8px 25px;"></br>
              <input value="Continue" class=" btn btn-block send-button tx-tfm" onclick="window.location='payment.php'" style="background: #F96D80; width:130px; font-weight: 600; color:#fff; padding: 8px 25px;">
            </form>
          </div>
        </div>
      </div>
      <?php require_once 'footer.php'?>