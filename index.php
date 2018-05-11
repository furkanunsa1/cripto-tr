<?php 

		require 'app/group.php';
		
		function tokenFGT($tokencreate){


		 
		 $bol 	  = explode(":", $tokencreate);
		 $say     = count($bol);
		 $arraylist = array();
		$islemyap = 0;
		$fonks = 0;
			echo "Gelen Kelime : ".$tokencreate;
			echo "<hr />";
			echo "Gelen Kelime 4 basamaklı Şifrelendi : ";
			for ($i=0; $i < $say ; $i++) { 
				
 
					$sayi = EXT($bol[$i]);
	
				array_push($arraylist,	$sayi);
			}
			$num = count($arraylist);

			for ($i=0; $i < $num ; $i++) { 


						echo $arraylist[$i]."";
						// array list 


				

			}
			echo "<hr />";
			echo "cripto  : ";
				for ($i=0; $i < $num ; $i++) { 


						$tek =  pass($arraylist[$i]);
					
							
							echo  pass($arraylist[$i])."";
				

			}
			
			echo "<hr />";
			echo "Fonksiyondan Şifrelenmiş Sayılar Çözülüyor : ";
				for ($i=0; $i < $num ; $i++) { 


					echo unpass(pass($arraylist[$i]))." ";
					
				

			}
				echo "<hr />";
				echo "Sayılar Harflerine Dökülerek Yerine Oturuyor : ";
				for ($i=0; $i < $num ; $i++) { 


					echo EXT(unpass(pass($arraylist[$i])))."";
					
				

			}
			echo "<hr />";



 
		}

		

		//function FGTtoken(){}


		echo tokenFGT('p:e:k:m:e:z');


	//A B C Ç D E F G Ğ H I İ J K L M N O Ö P R S Ş T U Ü V Y Z

 ?>