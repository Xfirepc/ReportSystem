<?php
/**
 * @author Carlos Yánez Correa - Compunec     corp.compunec@gmail.com
 * @copyright 2014-2017, Carlos Yánez Correra - Compunec All Rights Reserved.
 */
class Init extends CI_Controller
{
  public $myforge;
  public $db_names = 'quito_tdb';

  public function index()
    {
       $this->load->dbutil();
       $this->load->dbforge();
      

       if ($this->dbutil->database_exists('quito_tdb'))// Existe la DB?
       {
         if(!$this->db->table_exists('users')) // Existe la tabla?
            $this->ctable_users();

         if(!$this->db->table_exists('entradas')) // Existe la tabla?
            $this->ctable_posts();

       }else {

          $this->dbforge->create_database('quito_tdb');//Creame la db
          header('Location: '.base_url().'init');
       }

    }
public function del_table($db){

  $this->load->dbforge();
  $this->dbforge->drop_table($db);
  echo "Tabla ".$db." Eliminada.";

}
public function ctable_users () // Creacion de Tabla para Usuarios
{

  $this->load->dbforge('quito_tdb');
   $fields = array(
        'user_id' => array(
                    'type' => 'INT',
                    'auto_increment' => TRUE
        ),
        'nombre' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '40',
                            ),
        'apellido' => array(
                        'type' =>'VARCHAR',
                        'constraint' => '40',
        ),

        'email' => array(
                        'type' =>'VARCHAR',
                        'constraint' => '40',
        ),
        'password' => array(
                        'type' =>'VARCHAR',
                        'constraint' => '70',
        ),
        'role' => array(
                        'type' =>'int',
                        'constraint' => '3',
        ),
        'img' => array(
                        'type' =>'VARCHAR',
                        'constraint' => '80',
        ),
     );

    $this->dbforge->add_field($fields);
    $this->dbforge->add_key('user_id', TRUE);

    if ($this->dbforge->create_table('users'))
    {
     echo 'Exito Tabla user Creada<br>';
     return TRUE;
    }
}     

public function ctable_posts ()  // Creacion de Tabla para  Entradas
{

    $this->load->dbforge('quito_tdb');
    $fields = array(
     'post_id' => array(
                      'type' => 'INT',
                      'auto_increment' => TRUE
      ),
      'title' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '100',
      ),
      'desc_short' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '300',
      ),
     'desc_small' => array(
                      'type' =>'LONGTEXT',
      ),

      'etiqueta' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '150',
      ),
      'comentarios' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '200',
      ),
      'img' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '100',
      ),
      'posted_by' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '100',
      ),
      'categoria' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '100',
      ),
      'type' => array(
                      'type' =>'INT',
                      'constraint' => '2',
                      'default' => 0,
      ),
      'fecha' => array(
                      'type' =>'DATE',
      ),

    'seo_desc' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '1000',
      ),
     'seo_subj' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '1000',
      ),
     'seo_key' => array(
                      'type' =>'VARCHAR',
                      'constraint' => '1000',
      ),

  );
  $this->dbforge->add_field($fields);
  $this->dbforge->add_key('post_id', TRUE);

  if ($this->dbforge->create_table('entradas'))
  {
   echo 'Exito Tabla posts Creada<br>';
   return TRUE;
  }
}


}
