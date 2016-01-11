  <!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<title>Create Tender</title>
<?php include_once("inc/js.php"); ?>
</head>
<body>
<div class="web-wrapper">
<!--header-->
<?php include('inc/ad-header.php') ?>
<!--header end-->

<div class="sections bSection1 grey ">

    <div class="innerPageTitle">
      <h1>Create Tender</h1>
    </div>

<div class="web-wrapper signup-wrapper bid-form">
  <span class="alert-messages success">Success Message</span>
  <div class="main-wrapper medium">

      <div class="field-row">
        <div class="form-group half pull-left">
          <label>Title</label>
          <input type="text" placeholder="Enter Title">
        </div>
 
       <div class="form-group half pull-right">
          <label>Category</label>
          <input type="text" placeholder="Enter Category">
        </div>
 
      </div>

      <div class="field-row">
        <div class="form-group">
          <label>Description</label>
          <textarea></textarea>
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
