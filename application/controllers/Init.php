<?php
/**
 * @author José Flores -  vinygfx@gmail.com
 * @copyright 2017-2018, José Flores -Rights Reserved.
 */
class Init extends CI_Controller
{
  public $myforge;
  public $db_names = 'id4457996_quito_tdb';

  public function index()
    {
       $this->load->dbutil();
       $this->load->dbforge();
      

       if ($this->dbutil->database_exists('id4457996_quito_tdb'))// Existe la DB?
       {
         if(!$this->db->table_exists('users')) // Existe la tabla?
            $this->ctable_users();

         if(!$this->db->table_exists('solicitudes')) // Existe la tabla?
            $this->ctable_soli();

       }else {

          $this->dbforge->create_database('id4457996_quito_tdb');//Creame la db
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

  $this->load->dbforge('id4457996_quito_tdb');
   $fields = array(
        'user_id' => array(
                    'type' => 'INT',
                    'auto_increment' => TRUE
        ),

        'nombres' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '50',
        ),

        'apellidos' => array(
                        'type' =>'VARCHAR',
                        'constraint' => '50',
        ),

        'ci' => array(
                        'type' =>'INT',
                        'constraint' => '10',
        ),

        'cargo' => array(
                        'type' =>'VARCHAR',
                        'constraint' => '50',
        ),

        'estado_civ' => array(
                        'type' =>'VARCHAR',
                        'constraint' => '15',
        ),

        'nacimiento' => array(
                        'type' =>'VARCHAR',
                        'constraint' => '40',
        ),

        'fingreso' => array(
                        'type' =>'VARCHAR',
                        'constraint' => '40',
        ),

        'fnacimiento' => array(
                        'type' =>'VARCHAR',
                        'constraint' => '40',
        ),
        'direccion' => array(
                        'type' =>'VARCHAR',
                        'constraint' => '70',
        ),

        'telefono' => array(
                        'type' =>'INT',
                        'constraint' => '10',
        ),

        'telefono_e' => array(
                        'type' =>'INT',
                        'constraint' => '10',
        ),

        'email' => array(
                        'type' =>'VARCHAR',
                        'constraint' => '70',
        ),

        'pass' => array(
                        'type' =>'VARCHAR',
                        'constraint' => '100',
        ),

        'observaciones' => array(
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
     echo 'Exito Tabla users Creada<br>';
     return TRUE;
    }
}     

public function ctable_soli ()  // Creacion de Tabla para  Entradas
{


  $this->load->dbforge('id4457996_quito_tdb');
   $fields = array(
        'id' => array(
                    'type' => 'INT',
                    'auto_increment' => TRUE
        ),

        'user_ci' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '50',
        ),

        'username' => array(
                        'type' =>'VARCHAR',
                        'constraint' => '80',
        ),

        'content' => array(
                        'type' =>'TEXT',
                        'constraint' => '400',
        ),
        'status' => array(
                        'type' =>'INT',
                        'constraint' => '2',
        ),
        'fecha' => array(
                        'type' =>'VARCHAR',
                        'constraint' => '15',
        )
     );

    $this->dbforge->add_field($fields);
    $this->dbforge->add_key('id', TRUE);

    if ($this->dbforge->create_table('solicitudes'))
    {
     echo 'Exito Tabla Solicitudes Creada<br>';
     return TRUE;
    }
  }
}
