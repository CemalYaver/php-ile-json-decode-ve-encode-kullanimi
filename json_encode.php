<?php

		include("ayar.php");
		$cek=$db->query("select *  from veriler");//uye tablosundki tüm verileri çek 
		
			if($cek){
         
		foreach($cek as $al){

        
			$ad=$al["ad"];
			$soyad=$al["soyad"];

			$array = array(
			    "name" => $ad,
			    "surname" => $soyad
			);

			$json = json_encode($array);

			echo $json;	
			echo "<br>";				

			}
		}
			else
			{

				echo "Hiç veri yok";

			}

		

		


?>