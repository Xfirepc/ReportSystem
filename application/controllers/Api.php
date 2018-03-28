<?php
/**
 * @author Jose Flores - Compunec     corp.compunec@gmail.com
 */
class Api extends CI_Controller
{

  public function index($data = ''){
      

    $this->load->view("guest/head");
    $this->load->view("api");
    $this->load->view("guest/footer");

  }
  public function portfolio ()
  {	
      $post = $this->input->post(); 

        if ($this->db->insert('portfolio', $post))
          header('Location: '.base_url().'apixfire/ports');
        else 
          header('Location: '.base_url().'api/errorUpdate');

  }

  public function blog ()
  {	
      $post = $this->input->post(); 

        if ($this->db->insert('blog', $post))
          header('Location: '.base_url().'apixfire/blogs');
        else 
          header('Location: '.base_url().'api/errorUpdate');

  }

  public function portCallback () {
      
     $this->db->order_by('id','DESC');
     $data = $this->db->get('portfolio')->result();
     echo json_encode($data);

     
  }

  public function blogCallback () {
      
     $this->db->order_by('id','DESC');
     $data = $this->db->get('blog')->result();
     echo json_encode($data);
     return json_encode($data);
     
  }

  public function errorUpdate () {
    return 'Ocurrio un error';
  }

}

 ?>