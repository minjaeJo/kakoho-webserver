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
            $('#input1').click(function(){
              $('#input1').hide();
            });
            $(document).ready(function() {
                $("#find").click(function(event) {
                    event.preventDefault();
                    var address = $("input#address").val();
                    console.log(address)
                    // jQuery.ajax({
                    //     type: "POST",
                    //     url: "<?php echo base_url(); ?>" + "index.php/submit",
                    //     dataType: 'json',
                    //     data: {address: address},
                    //     success: function(res) {
                    //         if (res)
                    //         {
                    //             // Show Entered Value
                    //             jQuery("div#test").show();
                    //             jQuery("div#value").html(res.address);
                    //             console.log(jQuery("div#test").show());
                    //             console.log(jQuery("div#value").html(res.address));
                    //             console.log('hi')
                    //         }
                    //     }
                    // });
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
          <a class="logo" href="#"><!--<img src="img/press-02.jpg" alt="">-->KAKOHO</a>
        </div>
      </div>
    </div>
        
    <header>
      <div class="container">
        <div class="row">
          <div class="col-xs-6">
            <a href="#">KAKOHO</a>
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
                  'id'            => 'input1',
                  'value'         => 'input',
                  // 'type'          => 'submit',
                  'for'           => 'address',
                  'content'       => '입력하기'
                );
                echo form_button($input_data);
              ?>
              <script>
                $( "#input1" ).click(function() {
                  console.log('h1')
                });
              </script>
              <br />
              <br />
              <?php 
              $find_data = array(
                  'name'          => 'find',
                  'class'         => 'btn btn-primary btn-lg',
                  'id'            => 'find',
                  'value'         => 'find',
                  // 'type'          => 'submit',
                  'content'       => '약속장소찾기'
                );
                echo form_button($find_data);
              ?>
              <script>
                $( "#find" ).click(function() {
                  console.log('h2')
                });
              </script>
              </form>
              <?php echo form_close();?>
              <?php if(isset($address)){
                echo "<script>alert(\"이렇게 띄우면 되자나\");</script>";
              }?>

            </div>
          </div>
            
          </div>
        </div>
      </div>
      </header>