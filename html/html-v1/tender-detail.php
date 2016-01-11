<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<title>Tender Detail</title>
<?php include_once("inc/js.php"); ?>
</head>
<body>
<div class="web-wrapper">
<!--header-->
<?php include('inc/ad-header.php') ?>
<!--header end-->
<div class="chart-wrapper">
  <h2>Lorem Ipsum</h2>
  <div class="circle">
    <div class="inner">
        <div class="valign">
          <div class="valign-inner">
           <div class="chart-text1">Vender Name </div>
             <div class="chart-text2"> $5000 </div>
          </div>
          </div>
    </div>
  </div>


  <div class="circle circle2">
    <div class="inner">
        <div class="valign">
          <div class="valign-inner">
           <div class="chart-text1">Vender Name </div>
             <div class="chart-text2"> 20 to 15 Days </div>
          </div>
          </div>
    </div>
  </div>

    <div class="circle circle3">
    <div class="inner">
        <div class="valign">
          <div class="valign-inner">
           <div class="chart-text1">Vender Name </div>
             <div class="chart-text2"> Payment Process </div>
          </div>
          </div>
    </div>
  </div>

</div>

<div class="sections grey">
  <div class="main-wrapper">
      <div class="tenders-wrapper tender-detail">
          <div class="Tleft">
            <h2>Product Name</h2>
            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.Ut wisi enim ad minim veniam, quis nostrud
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.Ut wisi enim ad minim veniam, quis nostrud exerci</p>
          </div>
         
          <div class='Tright'>
            <img src="images/dummy/tender-large-img.jpg">
          </div>
      
            <div class="table-responsive">
            <table>
              <thead>
                <tr>
                  <td>Vender</td>
                  <td>Price</td>
                  <td>Duration</td>
                  <td>Payment</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td><a href="javascript:;">XYZ Vender</a></td>
                  <td>$5000</td>
                  <td>20 to 30 Days</td>
                  <td>30 Days</td>
                  <td><div class="tender-footer">
                    <div class="links fill green"><a href="javascript:;">Accept</a></div>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td><a href="javascript:;">XYZ Vender</a></td>
                  <td>$5000</td>
                  <td>20 to 30 Days</td>
                  <td>30 Days</td>
                  <td><div class="tender-footer">
                    <div class="links fill green"><a href="javascript:;">Accept</a></div>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td><a href="javascript:;">XYZ Vender</a></td>
                  <td>$5000</td>
                  <td>20 to 30 Days</td>
                  <td>30 Days</td>
                  <td><div class="tender-footer">
                    <div class="links fill green"><a href="javascript:;">Accept</a></div>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td><a href="javascript:;">XYZ Vender</a></td>
                  <td>$5000</td>
                  <td>20 to 30 Days</td>
                  <td>30 Days</td>
                  <td><div class="tender-footer">
                    <div class="links fill green"><a href="javascript:;">Accept</a></div>
                    </div>
                  </td>
                </tr>

              </tbody>
            </table>
            </div>


      </div>

  </div>
</div>


</div>

<script>
  var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

  var barChartData = {
    labels : ["January","February","March","April","May","June","July"],
    datasets : [
      {
        fillColor : "rgba(220,220,220,0.5)",
        strokeColor : "rgba(220,220,220,0.8)",
        highlightFill: "rgba(220,220,220,0.75)",
        highlightStroke: "rgba(220,220,220,1)",
        data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
      },
      {
        fillColor : "rgba(151,187,205,0.5)",
        strokeColor : "rgba(151,187,205,0.8)",
        highlightFill : "rgba(151,187,205,0.75)",
        highlightStroke : "rgba(151,187,205,1)",
        data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
      }
    ]

  }
  window.onload = function(){
    var ctx = document.getElementById("canvas").getContext("2d");
    window.myBar = new Chart(ctx).Bar(barChartData, {
      responsive : true
    });
  }

  </script>

</body>
</html>
