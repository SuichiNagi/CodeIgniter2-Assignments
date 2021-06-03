<?php 

class Reports extends CI_Controller{
    public function index(){
        $this->load->model('Report');
        $lists = $this->Report->get_all_lists_and_leads();  //calls the get_course_by_id method
        $this->load->view('report_view', array('lists' => $lists));
    }
}