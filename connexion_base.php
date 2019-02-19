<?php 
	function connection(){
		$co=mysqli_connect("localhost","root","","cms");
		return $co;
	}
?>