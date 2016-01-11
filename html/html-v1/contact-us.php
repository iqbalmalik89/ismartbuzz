  <!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<title>Contact Us</title>
<?php include_once("inc/js.php"); ?>
 <script src="https://maps.googleapis.com/maps/api/js"></script>
</head>
<body>
<div class="web-wrapper">
<!--header-->
<?php include('inc/header.php') ?>
<!--header end-->

<!--header height -->
<div class="header-height"></div>

<!--banner -->
<div class="banner-section section1 ContactSection1 googlemap">
  <div class="map" id="map"></div>
</div>
<!--banner end -->

<div class="sections contact-form grey">
  <div class="main-wrapper">

    <div class="clft">

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
          <label>Email Address</label>
          <input type="text" placeholder="Email Address">
        </div>

        <div class="form-group half pull-right">
          <label>Phone Number</label>
          <input type="text" placeholder="Phone Number">
        </div>
      </div>

        <div class="field-row">
        <div class="form-group ">
          <label>Brief</label>
          <textarea placeholder="Brief Description"></textarea>
        </div>
      </div>

      <div class="field-row margin-btm-none">
          <div class="btn fill"><a href="javascript:;">Submit</a>
            <div class="spinner rotating"></div>
          </div>
      </div>

    </div>
    
    <div class="crt">
      <h2>Serons-nous votre 3ejoueur ?</h2>
      <ul class="contact-blts">
        <li>Merci de considérer nos services pour la réalisation de votre prochain projet web.</li>
        <li>Partagez-nous en les grandes lignes ainsi que vos principaux objectifs.</li>
        <li>Nous vous contacterons pour planifier une rencontre afin de mieux se connaître!</li>
      </ul>

    </div>

  </div>
</div>


<!-- footer -->
<?php include('inc/footer.php') ?>
<!-- footer end-->
</div>
</body>
</html>
