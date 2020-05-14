<?php 
/**
  * 
  */
 class GraficasC extends CI_Controller
 {
 	
 	function index()
 	{

 		$data['Titulo'] = "Gráfica 1 desde el método index";
    $dataG['Id'] = "grafica1";
 		$dataG['Productores']  = array('Juan','Pedro','Lupe','Timón');
    $dataG['Contenido'] = 
        array(
            array(
              "Cantidad1" => "200",
              "Cantidad2" => "30",
              "Cantidad3" => "200",
              "Cantidad4" => "30",
              "Descripcion" =>"Producto 1"
            ),
            array(
              "Cantidad1" => "200",
              "Cantidad2" => "30",
              "Cantidad3" => "200",
              "Cantidad4" => "30",
              "Descripcion" =>"Producto 2"
            ),
            array(
              "Cantidad1" => "800",
              "Cantidad2" => "312",
              "Cantidad3" => "1000",
              "Cantidad4" => "312",
              "Descripcion" =>"Producto 3"
            ),
            array(
              "Cantidad1" => "3000",
              "Cantidad2" => "312",
              "Cantidad3" => "300",
              "Cantidad4" => "312",
              "Descripcion" =>"Producto 4"
            )
        );
    $dataG2['Productores']  = array('Juan','Pedro','Lupe');
    $dataG2['Id'] = "grafica2";
    $dataG2['Contenido'] = 
        array(
            array(
              "Cantidad1" => "4000",
              "Cantidad2" => "3000",
              "Descripcion" =>"Producto 1"
            ),
            array(
              "Cantidad1" => "230",
              "Cantidad2" => "34",
              "Descripcion" =>"Producto 2"
            ),
            array(
              "Cantidad1" => "3000",
              "Cantidad2" => "312",
              "Descripcion" =>"Producto 3"
            )
        );

    $dataG3['Productores']  = array('Juan','Pedro','Lupe');
    $dataG3['Id'] = "grafica3";
    $dataG3['Contenido'] = 
        array(
            array(
              "Cantidad1" => "44000",
              "Cantidad2" => "6000",
              "Descripcion" =>"Producto 1"
            ),
            array(
              "Cantidad1" => "22430",
              "Cantidad2" => "324",
              "Descripcion" =>"Producto 2"
            ),
            array(
              "Cantidad1" => "3000",
              "Cantidad2" => "33312",
              "Descripcion" =>"Producto 3"
            )
        );
    $this->load->view('head',$data);
    $this->load->view('graficas/grafica1',$dataG);
    $this->load->view('graficas/grafica1',$dataG2);
    $this->load->view('graficas/grafica1',$dataG3);

 		$this->load->view('footer');
 	}


  public function graficaDB(){
    $this->load->model('GraficasM');
    $data['Titulo'] = "Gráfica 1 desde el método index";
    $data['Productores']  = $this->GraficasM->getVendedores();
    $data['Id'] = "grafica";
    $data['Contenido'] = $this->GraficasM->getTotalVentas();



    $this->load->view('head',$data);
    $this->load->view('graficas/graficaBD');
    $this->load->view('footer');
  }


  public function graficaJson(){
    print "hola";
    print "modificación";
  }


 } ?>