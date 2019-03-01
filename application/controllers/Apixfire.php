<?php

require(APPPATH.'/libraries/REST_Controller.php');
 
class Apixfire extends REST_Controller
{

  public function ports_get() {

    $this->db->order_by('id', 'DESC');
    $this->response($this->db->get('portfolio')->result());

  }    

  public function blogs_get() {

    $this->db->order_by('id', 'DESC');
    $this->response($this->db->get('blog')->result());

  }  
}
?>