<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataController extends CI_Controller
{
    public function inputData() {
        $data = array(
            'lat' => $this->input->post('lat'),
            'lng' => $this->input->post('lng')
        );
        echo json_encode($data);
    }   
}
?>