<?php
  class Pages extends CI_Controller{


    public function level(){
      $this->load->view('templates/temp_lessons');
      $this->load->view('level');
    }





  }
