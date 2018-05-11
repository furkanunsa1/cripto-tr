<?php 
		//A B C D E F G H I J K L M N O P R S T U V Y Z

		function EXT($num){

			$inteiger = strtoupper($num);
					$A  = 5348;
					$B  = 3459;
					$C 	= 4568;
					$D  = 5675;
					$E  = 3904;
					$F 	= 2345;
					$G 	= 4392;
					$H	= 9423;
					$I 	= 5960;
					$K  = 5644;
					$L  = 4234;
					$M 	= 8324;
					$N 	= 4926;
					$O 	= 9543;
					$P  = 1354;
					$R 	= 3985;
					$S  = 4509;
					$T  = 3456;
					$U 	= 2467;
					$V 	= 9234;
					$Y  = 9923;
					$Z 	= 4309; 
					if ($inteiger == 'A') {
						 return $A;
										 }
					else if ($inteiger == 'B') {
						 return $B;
										 }
					else if ($inteiger == 'C') {
						 return $C;
										 }
					else if ($inteiger == 'D') {
						 return $D;
										 }
					else if ($inteiger == 'E') {
						 return $E;
										 }
					else if ($inteiger == 'F') {
						 return $F;
										 }
					else if ($inteiger == 'G') {
						 return $G;
										 }
					else if ($inteiger == 'H') {
						 return $H;
										 }
					else if ($inteiger == 'I') {
						 return $I;
										 }
					else if ($inteiger == 'K') {
						 return $K;
										 }
					else if ($inteiger == 'L') {
						 return $L;
										 }
					
					else if ($inteiger == 'M') {
						 return $M;
										 }
					else if ($inteiger == 'N') {
						 return $N;
										 }
					else if ($inteiger == 'O') {
						 return $O;
										 }
					else if ($inteiger == 'P') {
						 return $P;
										 }
					else if ($inteiger == 'R') {
						 return $R;
										 }
					else if ($inteiger == 'S') {
						 return $S;
										 }
					else if ($inteiger == 'T') {
						 return $T;
										 }
					else if ($inteiger == 'U') {
						 return $U;
										 }
					else if ($inteiger == 'V') {
						 return $V;
										 }
					else if ($inteiger == 'Y') {
						 return $Y;
										 }
					else if ($inteiger == 'Z') {
						 return $Z;
										 }
					else if ($inteiger == '5348') {
						 return 'A';
										 }
					else if ($inteiger == '3459') {
						 return 'B';
										 }
					else if ($inteiger == '4568') {
						 return 'C';
										 }
					else if ($inteiger == '5675') {
						 return 'D';
										 }
					else if ($inteiger == '3904') {
						 return 'E';
										 }
					else if ($inteiger == '2345') {
						 return 'F';
										 }
					else if ($inteiger == '4392') {
						 return 'G';
										 }
					else if ($inteiger == '9423') {
						 return 'H';
										 }
					else if ($inteiger == '5960') {
						 return 'I';
										 }
					else if ($inteiger == '5644') {
						 return 'K';
										 }
					else if ($inteiger == '4234') {
						 return 'L';
										 }
					
					else if ($inteiger == '8324') {
						 return 'M';
										 }
					else if ($inteiger == '4926') {
						 return 'N';
										 }
					else if ($inteiger == '9543') {
						 return 'O';
										 }
					else if ($inteiger == '1354') {
						 return 'P';
										 }
					else if ($inteiger == '3985') {
						 return 'R';
										 }
					else if ($inteiger == '4509') {
						 return 'S';
										 }
					else if ($inteiger == '3456') {
						 return 'T';
										 }
					else if ($inteiger == '2467') {
						 return 'U';
										 }					
					else if ($inteiger == '9234') {
						 return 'V';
										 }					
					else if ($inteiger == '9923') {
						 return 'Y';
										 }
					else if ($inteiger == '4309') {
						 return 'Z';
										 }
					




					else{
						echo '0000';
					}





// 170  +  40 / 

		}
		function pass($adata){
			
				$sonuc = $adata +((15 *2 /3 *15+20) + ((30 - 10 * 2) / 2) )*((15 *2 /3 *15+20) + ((30 - 10 * 2) / 2) );
				return $sonuc;
				
		}	
		function unpass($adata){
				$sonuc = $adata - ((15 *2 /3 *15+20) + ((30 - 10 * 2) / 2) )*((15 *2 /3 *15+20) + ((30 - 10 * 2) / 2) );
				return $sonuc;
				
		}


		function errtext($nums){
			$num = strtoupper($nums);
			if ($num ==  "22" ) {return "A";}
			else if($num == "21"){return "B";}
			else if($num == "C"){return "C";}
			else if($num == "D"){return "D";}
			else if($num == "E"){return "E";}
			else if($num == "F"){return "F";}
			else if($num == "G"){return "G";}
			else if($num == "H"){return "H";}
			else if($num == "I"){return "I";}
			else if($num == "J"){return "J";}
			else if($num == "K"){return "K";}
			else if($num == "L"){return "L";}
			else if($num == "M"){return "M";}
			else if($num == "N"){return "N";}
			else if($num == "O"){return "O";}
			else if($num == "P"){return "7";}
			else if($num == "R"){return "6";}
			else if($num == "S"){return "5";}
			else if($num == "T"){return "4";}
			else if($num == "U"){return "3";}
			else if($num == "V"){return "2";}
			else if($num == "Y"){return "1";}
			else if($num == "Z"){return "0";}
			else {
				return "0000";
			}
		}
		function md6($gelen){

				return	md5(md5(md5(md5(md5(md5(md5(md5(md5(md5(md5($gelen)))))))))));

		}
		function md6coz($num,$nums){

			$md6 = md6($num);
			if ($md6 == $nums) {
				return $num;
			}
			else {
				echo "0000";

			}



		}
 ?>
