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
        $config['center'] = '37.566535, 126.977969';
        $config['zoom'] = '12';
        $this->googlemaps->initialize($config);
        
        $marker = array();
        $marker['position'] = '37.566535, 126.977969';
        $this->googlemaps->add_marker($marker);
        $data['map'] = $this->googlemaps->create_map();
        $this->load->view('main_service', $data);
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
    
}