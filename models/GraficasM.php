<?php 
/**
  * 
  */
 class GraficasM extends CI_Model
 {
 	
 	function getVendedores()
 	{
 		$sql = "SELECT vendedor FROM productos GROUP by vendedor";
 		$query = $this->db->query($sql);
 		return $query ->result();
 	}


 	function getTotalVentas(){
 		$sql = "SELECT sum(total) as total, vendedor FROM `productos` group by vendedor";
 		$query = $this->db->query($sql);
 		return $query ->result();
 	}
 } ?>