<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>KAKOHO </title>
    <meta property="og:title" content="">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:site_name" content="">
	<meta property="og:description" content="">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?php echo $map['js']; ?>
    <!-- Styles -->
    <link rel="stylesheet" href="../../../global/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../global/css/animate.css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900|Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../../../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../global/css/main.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.0.min.js" ></script>
    <script type="text/javascript" >
            // Ajax post
            $(document).ready(function() {
              var locationArray = new Array();
                // $("#find_id").click(function(event) {
                //     event.preventDefault();
                //     var address = $("input#address").val();
                //     console.log(address)
                //     jQuery.ajax({
                //         type: "POST",
                //         url: "<?php echo base_url(); ?>" + "Services/submit",
                //         dataType: 'json',
                //         data: {address: address},
                //         success: function(res) {
                //             if (res)
                //             {
                //                 // Show Entered Value
                //                 jQuery("div#test").show();
                //                 jQuery("div#value").html(res.address);
                //                 console.log(jQuery("div#test").show());
                //                 console.log(jQuery("div#value").html(res.address));
                //                 console.log('hi')
                //             }
                //         }
                //     });
                // });
                $('#input_id').click(function(){
                var address = $("#address").val();
                  console.log(address)
                //googleMap geocoding API get
                  jQuery.ajax({
                    type: "GET",
                    dataType: "json",
                    url: `https://maps.googleapis.com/maps/api/geocode/json?address=${address}&key=AIzaSyA9WniMtyW0oPQwWrEHoyTDl2DrMgbH-0Y`,
                    success: function(data){
                        console.log('성공하였습니다 => 다음 비동기 작업을 진행합니다');
                    }
                  }).then((data)=>{
                    var location = data.results[0].geometry.location;
                      console.log(location)
                      jQuery.ajax({
                        type: "POST",
                        url: "index.php/Services/inputData",
                        //url: "<?php echo base_url(); ?>" + "index.php/Services/inputData",
                        dataType: 'json',
                        data: {lat: location.lat, lng: location.lng},
                        success: function(res) {
                          console.log(res)
                          locationArray.push(res);
                        }
                      })
                  });
                //
              });
                $( "#find_id" ).click(function() {
                  console.log('찾아주세오')
                  console.log(locationArray)
                  jQuery.ajax({
                    type: "POST",
                    url: "index.php/Services/centerLocation",
                    //url: "<?php echo base_url(); ?>" + "index.php/Services/inputData",
                    dataType: 'json',
                    data: {locationArray},
                    success: function(res) {
                      console.log("성공")
                      console.log(res)
                      locationArray=[];
                    }
                  })
                });

            });

        </script>
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="logo" href="#"><!--<img src="img/kakoho.png" alt="">-->KAKOHO</a>
        </div>
      </div>
    </div>

    <header>
      <div class="container">
        <div class="row">
          <div class="col-xs-6">
            <a href="#"><!--<img src="img/kakoho.png" alt="">-->KAKOHO</a>
          </div>
        </div>

        <div class="row header-info">
          <div class="col-sm-10 col-sm-offset-1 text-center">
            <h1 class="wow fadeIn">우리의 중심은 어딜까?</h1>
            <br />
            <p class="lead wow fadeIn" data-wow-delay="0.5s">가장 합리적인 약속 장소를 골라주는 어플리케이션</p>
            <br />
            <?php echo $map['html']; ?>
            <br />
            <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
              <form role="form" class="form-inline" method="post">
              <div class="form-group">
                <?php
                  echo form_open();
                  $form_address = array(
                      'name' => 'address',
                      'placeholder' => '주소를 입력해주세요',
                      'class' => 'form-control',
                      'id' => 'address'
                  );
                  echo form_input($form_address);
                ?>
              </div>
              <?php
                $input_data = array(
                  'name'          => 'input',
                  'class'         => 'btn btn-primary btn-lg',
                  'id'            => 'input_id',
                  'value'         => 'input',
                  // 'type'          => 'submit',
                  'content'       => '입력하기'
                );
                echo form_button($input_data);
              ?>
              <br />
              <br />
              <?php
              $find_data = array(
                  'name'          => 'find',
                  'class'         => 'btn btn-primary btn-lg',
                  'id'            => 'find_id',
                  'value'         => 'find',
                  // 'type'          => 'submit',
                  'content'       => '약속장소찾기'
                );
                echo form_button($find_data);
              ?>
              </form>
              <?php echo form_close();?>
            </div>
          </div>

          </div>
        </div>
      </div>
      </header>
<footer>
      <div class="container">

        <div class="row">
          <div class="col-sm-8 margin-20">
            <ul class="list-inline social">
              <li>Connect with us on</li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>

          <div class="col-sm-4 text-right">
            <p><small>Copyright &copy; 2017. All rights reserved. <br>
	            Created by <a href="https://github.com/minjaeJo">MINJAE_CHO</a></small></p>
          </div>
        </div>

      </div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../../global/js/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="../../../global/js/wow.min.js"></script>
    <script src="../../../global/js/bootstrap.min.js"></script>
    <script src="../../../global/js/main.js"></script>
</body>
</html>
