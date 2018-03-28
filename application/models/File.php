<?php

class File extends CI_Model {

        public function UploadImage($path = '', $message = '')
        {
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'gif|jpg|png';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile')){
                        $error = $this->upload->display_errors();
                        echo $this->html();
                        if($message == ''){ //cierre de php ?>
                                <script type="text/javascript" charset="utf-8">
                                        alert("Error al subir la imagen");
                                </script> <?php
                        }else{            ?>
                                <script type="text/javascript" charset="utf-8">
                                        alert("<?= $message ?>");
                                </script> <?php
                        }
                        return null;
                }
                else{
                        $file_data = $this->upload->data();
                        return $file_data['file_name'];
                }
        }

        public function html($value='')
        {
                return "
                <html>
                <head>
                        <title> Upload Error </title>
                </head>
                <body>

                </body>
                </html>";
        }

}

/* End of file file.php */
/* Location: ./application/models/file.php */

/* CON ESTE FUNCO :
 *
 * <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class File extends CI_Model{

    public function getRows($id = ''){
        $this->db->select('id,file_name,created');
        $this->db->from('files');
        if($id){
            $this->db->where('id',$id);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            $this->db->order_by('created','desc');
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return !empty($result)?$result:false;
    }

    public function insert($data = array()){
        $insert = $this->db->insert_batch('files',$data);
        return $insert?true:false;
    }

}
 */
