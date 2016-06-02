<?php
// burası veriyi hem encode hemde decode çeviriyor.

		include("ayar.php");

		$cek=$db->query("select *  from veriler");
		
			if($cek)
			{
         
			foreach($cek as $al)
			  {

        
			$ad=$al["ad"];
			$soyad=$al["soyad"];
			$array = array(
			    "name" => $ad,
			    "surname" => $soyad
			);

			$json = json_encode($array);

			echo $json;
			echo "<br>";

			$oku=json_decode($json);

	echo $oku->{"name"};
	echo "<br>";
	echo $oku->{"surname"};
	echo "<br>";

		     }

		}
			else
			  {

				echo "Hiç veri yok";

			  }

		

		


?>