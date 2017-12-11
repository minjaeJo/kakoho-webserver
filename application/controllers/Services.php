<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->model('services_model');
        $this->load->library('form_validation');
        $this->load->library('googlemaps');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index()
    {
        $this->main_service();
    }

    function main_service()
    {
        // $config['center'] = '37.566535, 126.977969';
        // $config['zoom'] = '12';
        // $this->googlemaps->initialize($config);

       
        // // $marker = array();
        // // $marker['position'] = '37.566535, 126.977969';
        // // $this->googlemaps->add_marker($marker);
        // $data['map'] = $this->googlemaps->create_map();
        $this->load->view('main_service');
    }

    public function inputData() {
        $this->load->database();
        $this->load->model('location_model');
        $data = array(
            'lat' => $this->input->post('lat'),
            'lng' => $this->input->post('lng')
        );
    echo json_encode($data);

    }
//location에 있는 함수 옮겨왔습니다.
    public function centerLocation() {
      //DB로드
      $this->load->database();
      //모델도 같이 넣었습니다만... DB는 ci_service로 연결하였습니다.
      //api sql을 이용하지 않으실거면 sql문은 그대로 사용하셔도 될것 같습니다.
      $this->load->model('location_model');

      //외부에서 받아오는 변수
      //$post_num = array();
      //$post_num = $_POST;
      $locationXY = $this->input->post();

      $array_numX = array();
      $array_numY = array();
      $numX = 0;
      $numY = 0;


      //POST문 나누기
      //x와 y좌표의 변수를 나눠서 담으려다 보니 for문이 조금 지저분합니다.
      foreach($locationXY as $location) {
        foreach($location as $loca) {
          $array_numX[$numX] = $loca['lat'];
          $numX++;
          $array_numY[$numY] = $loca['lng'];
          $numY++;
        }
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

      //모델은 services_model을 쓰면 안되서 그냥 location_model을 쓰겠습니다.
      $list = $this->location_model->subwayLocation($centerX, $centerY);

      $subway = array();
      foreach($list as $li) {
        $subway = $li;
      }

      echo json_encode($li);
    }





}
