  <!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<title>Login</title>
<?php include_once("inc/js.php"); ?>
</head>
<body>
<div class="web-wrapper">
<div class="sections login-wrapper section1 grey ">

  <div class="valign">
    <div class="valign-inner">
      <h1 class="main-hd">Sign In</h1>

      <div class="login-section">


   <!-- Login fields -->     
    <div class="login-fields">   
      <div class="field-row">
        <div class="form-group margin-bottom-25px">
          <label>Username</label>
          <input type="text" placeholder="Username">
        </div>

        <div class="form-group ">
          <label>Password</label>
          <input type="text" placeholder="Password">
        </div>
      </div>


      <div class="field-row margin-btm-none">
          <div class="btn fill"><a href="javascript:;">Login</a>
            <div class="spinner rotating"></div>
          </div>
      </div>
      <a href="javascript:;" class="forgot-password">Forgot your password?</a>
    
      <!--for alert messages addclass "show" in alert div -->
      <span class="alert-messages success">Login Successfully</span>
      <span class="alert-messages danger">Incorrect username or password</span>
    
    </div>  

       <!-- Login fields end-->

    <!-- forgot password -->
        <div class="forgot-fields" style="display:none">    
      <div class="field-row">
        <div class="form-group">
          <label>Email Address</label>
          <input type="text" placeholder="Enter Your Email Address">
        </div>
      </div>

      <div class="field-row margin-btm-none">
          <div class="btn fill"><a href="javascript:;">Send</a>
            <div class="spinner rotating"></div>
          </div>
      </div>
      <!--for alert messages addclass "show" in alert div -->
      <span class="alert-messages success">Email sent successfully</span>
    </div>  
    <!-- forgot password end -->


    </div>  

    </div>
  </div>
    
</div>
</body>
</html>
