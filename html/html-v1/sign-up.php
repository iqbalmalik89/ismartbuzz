  <!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<title>Sign Up</title>
<?php include_once("inc/js.php"); ?>
</head>
<body>
<div class="web-wrapper">
<!--header-->
<?php include('inc/header.php') ?>
<!--header end-->

<!--header height -->
<div class="header-height"></div>

<div class="sections contact-form grey ">

    <div class="innerPageTitle">
      <h1>Sign Up</h1>
    </div>

<div class="web-wrapper signup-wrapper">
  <span class="alert-messages success">Register Successfully</span>
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
          <label>Username</label>
          <input type="text" placeholder="Username">
        </div>

        <div class="form-group half pull-right">
          <label>Email Address</label>
          <input type="text" placeholder="Email Address">
        </div>
      </div>

                  <div class="field-row">
        <div class="form-group half pull-left">
          <label>Gender</label>
          <select>
            <option>Male</option>
            <option>Female</option>
          </select>
        </div>

        <div class="form-group half pull-right">
          <label>Phone Number</label>
          <input type="text" placeholder="Phone Number">
        </div>
      </div>


      <div class="field-row">
        <div class="form-group half pull-left">
          <label>Password</label>
          <input type="text" placeholder="Password">
        </div>

        <div class="form-group half pull-right">
          <label>Confirm Password</label>
          <input type="text" placeholder="Confirm Password">
        </div>
      </div>
 
       <div class="field-row">
        <div class="form-group half pull-left">
          <label>Address</label>
          <input type="text" placeholder="Address">
        </div>
          <div class="form-group half pull-right file-upload">
            <label>Upload Photo</label>
            <div class="file-upload-field">Browse</div>
            <input type="file" placeholder="Address">
        </div>
      </div>

      <div class="field-row">
        <div class="form-group iagree">
          <label><input type="checkbox"> I agree to the Terms of Use.</label>
        </div>
      </div>

      <div class="field-row margin-btm-none">
          <div class="btn fill"><a href="javascript:;">Sign Up</a>
            <div class="spinner rotating"></div>
          </div>
      </div>

    </div>
</div>
</div>


<!-- footer -->
<?php include('inc/footer.php') ?>
<!-- footer end-->
</div>
</body>
</html>
