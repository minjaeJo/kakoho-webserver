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
        $this->load->helper('form');        
    }


    // this function will redirect to book service page
    function index()
    {
        $this->main_service();
    }

    // this function to load service book page
    function main_service()
    {
        $config['center'] = '37.566535, 126.977969';
        $config['zoom'] = '12';
        $this->googlemaps->initialize($config);
        
        $marker = array();
        $marker['position'] = '37.566535, 126.977969';
        $this->googlemaps->add_marker($marker);
        $data['map'] = $this->googlemaps->create_map();
        $this->load->view('main_service', $data);
    }
    public function data_submitted() {
        $data = array( 'address' => $this->input->post('address'));
            if(isset($_POST["input"])) {
                echo 'console.log("'.$address.'")';
            }
            if(isset($_POST["find"])){
                echo 'console.log("'.$address.'")';
            }   
        $this->index();
    }
    public function inputData() {
        $data = array(
            'lat' => $this->input->post('lat'),
            'lng' => $this->input->post('lng')
        );
    echo json_encode($data);
}
    
}