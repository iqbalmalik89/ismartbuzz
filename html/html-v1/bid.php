  <!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<title>Bid</title>
<?php include_once("inc/js.php"); ?>
</head>
<body>
<div class="web-wrapper">
<!--header-->
<?php include('inc/ad-header.php') ?>
<!--header end-->

<div class="sections bSection1 grey ">

    <div class="innerPageTitle">
      <h1>Create Bid</h1>
    </div>

<div class="web-wrapper signup-wrapper bid-form">
  <span class="alert-messages success">Success Message</span>
  <div class="main-wrapper medium">

      <div class="field-row">
        <div class="form-group half pull-left">
          <label>First Name</label>
          <input type="text" placeholder="First Name">
        </div>

        <div class="form-group half pull-right">
          <label>Last Name</label>
          <input type="text" placeholder="Last Name">
        </div>
      </div>

      <div class="field-row">
        <div class="form-group half pull-left">
          <label>Country</label>
          <select>
            <option>Option 1</option>
            <option>Option 2</option>
          </select>
        </div>

        <div class="form-group half pull-right">
          <label>Email Address</label>
          <input type="text" placeholder="Email Address">
        </div>
      </div>

            <div class="field-row">
        <div class="form-group half pull-left">
           <label>Bid Price</label>
          <input type="text" placeholder="$5000">
        </div>

        <div class="form-group half pull-right">
          <label>Bid Duration</label>
          <input type="text" placeholder="30 t0 60 days">
        </div>
      </div>

      <div class="field-row">
        <div class="form-group half pull-left">
           <label>Lorem Ipsum</label>
          <input type="text" placeholder="Lorem Ipsum">
        </div>

        <div class="form-group half pull-right">
          <label>Lorem Ipsum</label>
          <input type="text" placeholder="Lorem Ipsum">
        </div>
      </div>

      <div class="field-row">
        <div class="form-group">
          <label>Lorem Ipsum</label>
          <textarea></textarea>
        </div>
      </div>

      <div class="field-row">
        <div class="form-group iagree">
          <label><input type="checkbox"> I agree to the Terms of Use.</label>
        </div>
      </div>

      <div class="field-row margin-btm-none">
          <div class="btn fill"><a href="javascript:;">Submit</a>
            <div class="spinner rotating"></div>
          </div>
      </div>

    </div>
</div>
</div>

</div>
</body>
</html>
