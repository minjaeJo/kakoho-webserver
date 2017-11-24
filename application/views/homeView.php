<!-- // 네이버 지도 예제는 2개의 프로그램으로 구성되어 있습니다. (지도표시, 주소좌표변환) -->
<!-- 네이버 지도 표시 - web -->
<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <title>간단한 지도 표시하기</title>
      <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?clientId=dOnjoU1Na9T7X9cXEEqa&submodules=geocoder"></script>

  </head>
  <body>
    <div id="map" style="width:100%;height:400px;"></div>
    <script>
      var map = new naver.maps.Map('map', {center: new naver.maps.LatLng(37.3595704, 127.105399)});
    </script>
  </body>
</html>

  <!-- // 네이버 지도 Open API 예제 - 주소좌표변환 -->
   <?php
  $client_id = "dOnjoU1Na9T7X9cXEEqa";
  $client_secret = "0f4on6vyXC";
  $encText = urlencode("전농로");
  $url = "https://openapi.naver.com/v1/map/geocode?query=".$encText; // json
  // $url = "https://openapi.naver.com/v1/map/geocode.xml?query=".$encText; // xml

  $is_post = false;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, $is_post);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $headers = array();
  $headers[] = "X-Naver-Client-Id: ".$client_id;
  $headers[] = "X-Naver-Client-Secret: ".$client_secret;
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  $response = curl_exec ($ch);
  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  echo "status_code:".$status_code."<br>";
  curl_close ($ch);
  if($status_code == 200) {
    echo $response;
  } else {
    echo "Error 내용:".$response;
  }
?>