<?php 
/**
  * 
  */
 class RepasoC extends CI_Controller
 {
 	
 	function index()
 	{
 		print "estoy en repaso c";
 		$this->load->model('RepasoM');
 		$data['datosCompletos'] = $this->RepasoM->getDatosByQuery();
 		$data['datosPorVendedor'] =$this->RepasoM->getDatosPorVendedor('jose');


 		$this->load->view('tabla',$data);
 	}
 } ?>