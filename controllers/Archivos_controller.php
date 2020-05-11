<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 * Controller Archivos_controller
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Archivos_controller extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('path');
  }

  public function index()
  {
    print "hola";
  }

  public function estructura_xml(){
      $data['Titulo'] = "Este es el título";
      $data['Productores']  = array('Juan','Pedro' );
      $data['Contenido'] = 
        array(
            array(
              "total" => "200",
              "descripcion" =>"Producto 1"
            ),
            array(
              "total" => "230",
              "descripcion" =>"Producto 2"
            ),
            array(
              "total" => "3000",
              "descripcion" =>"Producto 3"
            )
        );

      $this->load->view('vista_xml',$data);
  }

 

  public function estructura_sql(){
    $data['titulo'] = "Este es el título";
   $data['contenido'] = 
        array(
            array(
              "total" => "200",
              "descripcion" =>"Producto 1"
            ),
            array(
              "total" => "230",
              "descripcion" =>"Producto 2"
            ),
            array(
              "total" => "3000",
              "descripcion" =>"Producto 3"
            )
        );

    $this->load->view('vista_sql',$data);

    $this->load->view('vista_sql',$data);
  }

  public function estructura_json(){
    $data['titulo'] = "Este es el título";
    $data['contenido'] = 
        array(
            array(
              "total" => "200",
              "descripcion" =>"Producto 1"
            ),
            array(
              "total" => "230",
              "descripcion" =>"Producto 2"
            ),
            array(
              "total" => "3000",
              "descripcion" =>"Producto 3"
            )
            ,
            array(
              "total" => "4000",
              "descripcion" =>"Producto 5"
            )
        );

    $this->load->view('vista_json',$data);
  }


}


/* End of file Archivos_controller.php */
/* Location: ./application/controllers/Archivos_controller.php */