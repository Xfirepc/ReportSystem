<?php
/**
 * @author Carlos Yánez Correa - Compunec     corp.compunec@gmail.com
 * @copyright 2014-2017, Carlos Yánez Correra - Compunec All Rights Reserved.
 */
class Init extends CI_Controller
{
  public $myforge;

    public function index()
    {
       $this->load->dbutil();
       $this->load->dbforge();
       $db_name = 'compunec_seo10';

       if ($this->dbutil->database_exists($db_name))// Existe la DB?
       {
         if(!$this->db->table_exists('users')) // Existe la tabla?
            $this->ctable_users();

         if(!$this->db->table_exists('entradas')) // Existe la tabla?
            $this->ctable_posts();

        if(!$this->db->table_exists('servicios')) // Existe la tabla?
            $this->ctable_services();

        if(!$this->db->table_exists('productos')) // Existe la tabla?
            $this->ctable_products();

        if(!$this->db->table_exists('empresa')) // Existe la tabla?
            $this->ctable_empresa();

        if(!$this->db->table_exists('menu')) // Existe la tabla?
            $this->ctable_menu();

        if(!$this->db->table_exists('testimonios')) // Existe la tabla?
            $this->ctable_test();

        if(!$this->db->table_exists('slider')) // Existe la tabla?
            $this->ctable_slider();

        if(!$this->db->table_exists('brands')) // Existe la tabla?
            $this->ctable_brands();

        if(!$this->db->table_exists('subcategorias')) // Existe la tabla?
            $this->ctable_subcategorias();

        if(!$this->db->table_exists('categorias')) // Existe la tabla?
            $this->ctable_categorias();

        if(!$this->db->table_exists('status')) // Existe la tabla?
            $this->ctable_status();

        if(!$this->db->table_exists('reciente')) // Existe la tabla?
            $this->ctable_recent();
       }else {

          $this->dbforge->create_database($db_name);//Creame la db
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

    if ($this->dbutil->database_exists('compunec_seo10'))
    {
          $this->load->dbforge('compunec_seo10');
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

      }else
      {
              echo   'Primero Crea la Base de Datos!';
              return FALSE;
      }
}

public function ctable_posts ()  // Creacion de Tabla para  Entradas
{

    if ($this->dbutil->database_exists('compunec_seo10'))
    {
          $this->load->dbforge('compunec_seo10');
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

      }else
      {
              echo   'Primero Crea la Base de Datos!';
              return FALSE;
      }
}

public function ctable_services () // Creacion de Tabla para Usuarios
{

    if ($this->dbutil->database_exists('compunec_seo10'))
    {
          $this->load->dbforge('compunec_seo10');
           $fields = array(
                'servicio_id' => array(
                            'type' => 'INT',
                            'auto_increment' => TRUE
                ),
                'nombre' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '80',
                ),
                'descripcion' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '3000',
                ),
                'contenido' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '150',
                ),
                'precio' => array(
                                'type' =>'DOUBLE',
                ),
                'etiqueta' => array(
                                'type' =>'TEXT',
                                'constraint' => '50',
                ),
                'type' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '50',
                ),
                'img' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '100',
                ),
                'status' => array(
                                'type' =>'INT',
                                'constraint' => '1',
                ),
        );
          $this->dbforge->add_field($fields);
          $this->dbforge->add_key('servicio_id', TRUE);

              if ($this->dbforge->create_table('servicios'))
              {
               echo 'Exito Tabla Servicios Creada<br>';
               return TRUE;
              }

      }else
      {
              echo   'Primero Crea la Base de Datos!';
              return FALSE;
      }
}

public function ctable_products () // Creacion de Tabla para Usuarios
{

    if ($this->dbutil->database_exists('compunec_seo10'))
    {
          $this->load->dbforge('compunec_seo10');
           $fields = array(
                'product_id' => array(
                            'type' => 'INT',
                            'auto_increment' => TRUE
                ),
                'nombre' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '80',
                ),
                'descripcion' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '2000',
                ),
                'precio' => array(
                                'type' =>'DOUBLE',
                ),
                'etiqueta' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '80',
                ),
                'type' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '50',
                ),
                'marca' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '50',
                ),
                'material' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '50',
                ),
                'img' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '100',
                ),
                'status' => array(
                                'type' =>'INT',
                                'constraint' => '1',
                ),
        );
          $this->dbforge->add_field($fields);
          $this->dbforge->add_key('product_id', TRUE);

              if ($this->dbforge->create_table('productos'))
              {
               echo 'Exito Tabla Productos Creada<br>';
               return TRUE;
              }

      }else
      {
              echo   'Primero Crea la Base de Datos!';
              return FALSE;
      }
}

public function ctable_empresa () // Creacion de Tabla Empresa
{

    if ($this->dbutil->database_exists('compunec_seo10'))
    {
          $this->load->dbforge('compunec_seo10');
           $fields = array(
                'id' => array(
                            'type' => 'INT',
                            'auto_increment' => TRUE
                ),
                'nombre' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '80',
                ),
                'ruc' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '15',
                ),
                'telefonos' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '70',
                ),
                'razon_social' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '100',
                ),
                'email' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '80',
                ),
                'direccion' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '100',
                ),
                'facebook' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '100',

                ),
                'twitter' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '100',

                ),
                'instagram' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '100',

                ),
                'google' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '100',

                ),
                'logo' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '100',
                ),
                'slider' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '100',
                ),
        );
          $this->dbforge->add_field($fields);
          $this->dbforge->add_key('id', TRUE);

              if ($this->dbforge->create_table('empresa'))
              {
               echo 'Exito Tabla Empresa Creada<br>';

               $values = array('nombre' => 'Nombre de la Empresa',
                               'ruc' => 1777555100,
                               'razon_social' => 'Razon Social',
                               'direccion' => 'Direccion de su Empresa',
                               'email' => 'empresa@e-mail.com',
                               'logo' => 'plantilla/assets/images/logo.png',
                               'slider' => 'back_auto.png'
                              );

               $this->db->insert('empresa',$values);
              }

      }else
      {
              echo   'Primero Crea la Base de Datos!';
              return FALSE;
      }
}
public function ctable_menu () // Creacion de Tabla para Categorias Menu
{

    if ($this->dbutil->database_exists('compunec_seo10'))
    {
          $this->load->dbforge('compunec_seo10');
           $fields = array(
                'id' => array(
                            'type' => 'INT',
                            'auto_increment' => TRUE
                ),
                'nombre' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '40',
                ),
                'type' => array(
                                'type' =>'INT',
                                'constraint' => '2',
                ),
                'descripcion' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '150',
                ),
                'img' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                ),
                'data' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '300',
                ),
        );
          $this->dbforge->add_field($fields);
          $this->dbforge->add_key('id', TRUE);

              if ($this->dbforge->create_table('menu'))
              {
               echo 'Exito Tabla Categorias Creada<br>';
               return TRUE;
              }

      }else
      {
              echo   'Primero Crea la Base de Datos!';
              return FALSE;
      }
}

public function ctable_test () // Creacion de Tabla para Tests
{

    if ($this->dbutil->database_exists('compunec_seo10'))
    {
          $this->load->dbforge('compunec_seo10');
           $fields = array(
                'test_id' => array(
                            'type' => 'INT',
                            'auto_increment' => TRUE
                ),
                'nombre' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '40',
                                    ),
                'compania' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '50',
                ),
                'test' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '200',
                ),
                'img' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '100',
                ),
        );
          $this->dbforge->add_field($fields);
          $this->dbforge->add_key('test_id', TRUE);

              if ($this->dbforge->create_table('testimonios'))
              {
               echo 'Exito Tabla Testimonios Creada<br>';
               return TRUE;
              }

      }else
      {
              echo   'Primero Crea la Base de Datos!';
              return FALSE;
      }
}

public function ctable_slider () // Creacion de Tabla para Sliders
{

    if ($this->dbutil->database_exists('compunec_seo10'))
    {
          $this->load->dbforge('compunec_seo10');
           $fields = array(
                'id' => array(
                            'type' => 'INT',
                            'auto_increment' => TRUE
                ),
                'img' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '40',
                                    ),
                'titulo' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '50',
                ),
                'descripcion' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '200',
                ),

        );
          $this->dbforge->add_field($fields);
          $this->dbforge->add_key('id', TRUE);

              if ($this->dbforge->create_table('slider'))
              {
               echo 'Exito Tabla Sliders Creada<br>';
               return TRUE;
              }

      }else
      {
              echo   'Primero Crea la Base de Datos!';
              return FALSE;
      }
}

public function ctable_brands () // Creacion de Tabla para Brands
{

    if ($this->dbutil->database_exists('compunec_seo10'))
    {
          $this->load->dbforge('compunec_seo10');
           $fields = array(
                'id' => array(
                            'type' => 'INT',
                            'auto_increment' => TRUE
                ),
                'img' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                    ),
                'alt' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '50',
                ),
        );
          $this->dbforge->add_field($fields);
          $this->dbforge->add_key('id', TRUE);

              if ($this->dbforge->create_table('brands'))
              {
               echo 'Exito Tabla Brands Creada<br>';
               return TRUE;
              }
      }else
      {
              echo   'Primero Crea la Base de Datos!';
              return FALSE;
      }
}

public function ctable_subcategorias () // Creacion de Tabla para Subcategorias
{
    if ($this->dbutil->database_exists('compunec_seo10'))
    {
          $this->load->dbforge('compunec_seo10');
           $fields = array(
                'subcat_id' => array(
                            'type' => 'INT',
                            'auto_increment' => TRUE
                ),
                'sub_nombre' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                    ),
                'padre' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '100',
                ),
                'data' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '300',
                ),
        );
          $this->dbforge->add_field($fields);
          $this->dbforge->add_key('subcat_id', TRUE);

              if ($this->dbforge->create_table('subcategorias'))
              {
               echo 'Exito Tabla Sub Categorias Creada<br>';
               return TRUE;
              }
      }else
      {
              echo   'Primero Crea la Base de Datos!';
              return FALSE;
      }
}


public function ctable_categorias () // Creacion de Tabla para Categorias
{
    if ($this->dbutil->database_exists('compunec_seo10'))
    {
          $this->load->dbforge('compunec_seo10');
           $fields = array(
                'cat_id' => array(
                            'type' => 'INT',
                            'auto_increment' => TRUE
                ),
                'cat_nombre' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                                    ),
                'hijas' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '100',
                ),
                'data' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '300',
                ),
        );
          $this->dbforge->add_field($fields);
          $this->dbforge->add_key('cat_id', TRUE);

              if ($this->dbforge->create_table('categorias'))
              {
               echo 'Exito Tabla Categorias Creada<br>';
               return TRUE;
              }
      }else
      {
              echo   'Primero Crea la Base de Datos!';
              return FALSE;
      }
}

public function ctable_status () // Creacion de Tabla para Estado de Home
{
    if ($this->dbutil->database_exists('compunec_seo10'))
    {
          $this->load->dbforge('compunec_seo10');
           $fields = array(
                'id' => array(
                            'type' => 'INT',
                            'auto_increment' => TRUE
                ),
                'icon' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '80',
                                    ),
                'number' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '80',
                ),
                'text' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '80',
                ),
                'color' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '80',
                ),
                'img' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '150',
                ),
        );
          $this->dbforge->add_field($fields);
          $this->dbforge->add_key('id', TRUE);

              if ($this->dbforge->create_table('status'))
              {
               echo 'Exito Tabla Estado de Empresa Creada<br>';

              for ($i=1; $i <=4 ; $i++) {
                $data = array(
                        'text' => 'data',
                        'number' => 'data',
                        'icon' => 'data',
                        'color' => 'data',
                        'img' => 'banner-dfl.jpg'
                        );
               $this->db->insert('status',$data);
              }
               return TRUE;
              }
      }else
      {
              echo   'Primero Crea la Base de Datos!';
              return FALSE;
      }
}



public function ctable_recent () // Creacion de Tabla para Estado de Home
{
    if ($this->dbutil->database_exists('compunec_seo10'))
    {
          $this->load->dbforge('compunec_seo10');
           $fields = array(
                'id' => array(
                            'type' => 'INT',
                            'auto_increment' => TRUE
                ),
                'imagen' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '150',
                ),
                'nombre' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '80',
                ),
                'extra' => array(
                                'type' =>'VARCHAR',
                                'constraint' => '100',
                ),
        );
          $this->dbforge->add_field($fields);
          $this->dbforge->add_key('id', TRUE);

              if ($this->dbforge->create_table('reciente'))
              {
               echo 'Exito Tabla Recientes Creada<br>';

               return TRUE;
              }
      }else
      {
              echo   'Primero Crea la Base de Datos!';
              return FALSE;
      }
}

}
