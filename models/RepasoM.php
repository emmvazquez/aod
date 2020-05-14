<?php 
/**
  * 
  */
 class RepasoM extends CI_Model
 {
 	
 	function getDatos()
 	{
 		$query = $this->db->get('productos');
 		return $query->result();
 	}


 	function getDatosByQuery(){
 		$sql = "select Id, vendedor, total, descripcion, total * .16 as iva from productos";
 		$query = $this->db->query($sql);
 		return $query->result();
 	}

 	function getDatosPorVendedor($vendedor){
 		$this->db->where('vendedor',$vendedor);
 		$query = $this->db->get('productos');

 		return $query->result();
 	}
 } ?>