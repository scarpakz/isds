<?php

class Main extends CI_Controller{
  public function __construct(){
    parent::__construct();
  }

  public function index(){
    $this->landing_page();
  }

  function landing_page(){
    $this->load->helper('url');
    //Header Tags
    $data_header = array(
      'title' => "Information System Developers - We improve your business needs through our IT solutions.",
      'description' => "We build competitive applications and smart devices.",
      'keywords' => "Android Apps, Web Apps, Website Development, UI/UX Design, Software Apps, Internet of Things(IoT)",
      'author' => "Information System Developers"
    );
    $this->load->view('include/header',$data_header);
    $this->load->view('home');
    $this->load->view('include/footer');
  }

}
