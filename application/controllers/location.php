<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Location extends CI_Controller {

  public function __construct() {
   parent::__construct();
   $this->load->helper('url');
   $this->load->helper('form');
   //session_start();
   //$this->load->library('session');
  }

  public function index() {
    //view에서 세개의 좌표를 입력받도록 form 설정되어 있습니다.
    //데모 확인을 위해서 부득이하게 location view도 같이 넣었습니다.
		$this->load->view('location');
    //echo form_open('kakoho-webserver/index.php//location/centerLocation');
  }

  public function insertLocation() {
    $_SESSION['location'];
    $location = array();
    array_push($location, $_POST);
    redirect('kakoho-webserver/index.php//location');
  }

  public function centerLocation() {
    //DB로드
    $this->load->database();
    //모델도 같이 넣었습니다만... DB는 ci_service로 연결하였습니다.
    //api sql을 이용하지 않으실거면 sql문은 그대로 사용하셔도 될것 같습니다.
    $this->load->model('location_model');

    //외부에서 받아오는 변수
    //$post_num = array();
    //$post_num = $_POST;
    $post_num = $location;

    var_dump($post_num);


    $intnum = 0;
    $numX = 0;
    $numY = 0;

    $array_numX = array();
    $array_numY = array();
    $center_num = array();
    $min_station = array();

    //POST문 나누기
    //POST를 받으면 연상배열 하나를 받는데
    //x와 y좌표의 변수를 나눠서 담으려다 보니 for문이 조금 지저분합니다.
    foreach($post_num as $pnum) {
      if($intnum%2 == 0) {
        $array_numX[$numX] = $pnum;
        $numX++;
      } else {
        $array_numY[$numY] = $pnum;
        $numY++;
      }
      $intnum++;
    }

    //중앙점 구하기
    //x좌표를 더해서 개수로 나누고, y좌표를 더해서 개수로 나누는 형식입니다.
    $number = count($array_numX);
    $sumX=0; $sumY=0;

    for($i = 0; $i<$number; $i++) {
        $sumX += $array_numX[$i];
        $sumY += $array_numY[$i];
    }

    $center_num[0] = $sumX/$number;
    $center_num[1] = $sumY/$number;


    $min_point = array();
    $min;

    //중앙점에서 3km 이내의 지하철역 구하기
    $centerX = $center_num[0];
    $centerY = $center_num[1];

    $list = $this->location_model->subwayLocation($centerX, $centerY);

    var_dump($list);

    //3km 이내의 지하철 역 중에서 중앙점과 가장 가까운 역을 구합니다.
    //거리를 구하는 방법은 직선거리입니다.
    //sql로 distance를 구하면 distance 기준으로 오름차순 정렬하여 맨 처음 것이 가장 가까운 역입니다.
    //sql로 대체할 수 있습니다.
    /*
    $i=0;
    foreach($list as $li) {
      $range = sqrt(pow($centerX-doubleval($li["XPOINT_WGS"]),2) + pow($centerY-doubleval($li["YPOINT_WGS"]),2));

      if($i == 0) {
          $min = $range;
          $min_point[0] = doubleval($li["XPOINT_WGS"]);
          $min_point[1] = doubleval($li["YPOINT_WGS"]);
          $station_name = $li["STATION_NM"];
          $code = $li["STATION_CD"];
      } else {
          if($range < $min) {
              $min = $range;
              $min_point[0] = doubleval($li["XPOINT_WGS"]);
              $min_point[1] = doubleval($li["YPOINT_WGS"]);
              $station_name = $li["STATION_NM"];
              $code = $li["STATION_CD"];
          }
      }
      $i++;
    }
    $i=0;


    for($i = 0; $i < count($center_num); $i++) {
        print $center_num[$i]."<br>";
    }


    for($j = 0; $j < count($min_point); $j++) {
        print $min_point[$j]."<br>";
    }
    print $station_name;

    $centerSubway = array($code, $station_name, $min_point[0], $min_point[1]);

    for($j = 0; $j < count($centerSubway); $j++) {
        print $centerSubway[$j]."<br>";
    }
    여기까지 sql문 조절로 변경할 수 있습니다.
    */

    //$this->load->view('centerSubway');
    //echo form_open('location/subwayCircle');


    //다른 함수로 리턴값을 보낼 수 있습니다.
    //음식점을 찾는 부분까지 가면 쓸 수 있을 것 같습니다.
    //return $centerSubway;
  }


  //이 코드는 음식점 찾기를 예상하고 데모형식으로 만들어 놓았습니다.
  //위에서 찾은 역 주변에 있는 역을 찾아냅니다.
  //음식점 DB가 없어서 역을 찾아내는 것으로 하였습니다.
  //음식점 DB가 존재한다면 그것에 맞게 쓰면 될것 같습니다.
  /*
  public function subwayCircle() {
    $subwayData = $this->centerLocation();

    for($j = 0; $j < count($subwayData); $j++) {
        print $subwayData[$j]."<br>";
    }

    $subwayX = $subwayData[2];
    $subwayY = $subwayData[3];

    $list = $this->location_model->subwayCircle($subwayX, $subwayY);
    var_dump($list);
  }
*/
}
?>
