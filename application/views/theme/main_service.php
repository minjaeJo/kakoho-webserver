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
    <script src="js/modernizr-3.5.0.js"></script>
    <?php echo $map['js']; ?>
    <!-- Styles -->
    <link rel="stylesheet" href="../../../global/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../global/css/animate.css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900|Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../../../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../global/css/main.css">
    
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
              <form role="form" class="form-inline">
              <div class="form-group">
                  <input type="text" class="form-control" id="address" placeholder="주소를 입력해주세요">
              </div>
              <button type="submit" for="address" class="btn btn-primary btn-lg">입력하기</button>
              </form>
              <br />
              <button type="submit" class="btn btn-primary btn-lg">약속장소 찾기</button>
            </div>
          </div>
            
          </div>
        </div>
      </div>
      </header>