<?php

$callNum = htmlspecialchars($_GET["callNum"]);
$loc = htmlspecialchars($_GET["loc"]);

//echo 'You asked for' . $callNum . ' ' . $loc . '!';




	print "<html>";
	print "<head>";

	print "<style>";
	print "p {
            font: 18px/20px verdana, sans-serif;
            
        }";
        
        print ".main {
        margin-left: auto; 
            margin-right:auto;
            width: 50%;
            }";
	print "</style>";
	print "<body>";
	print '<div class="main">';

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
//begin checking for locations

//each location will call a function that will display a different set of images
>>>>>>> fbe41d95c93af90c39a9cb2a4a93b1991045ecda
>>>>>>> 9b0a428ca3a58162fb3511ebe150469a5b328fbd
if(strpos($loc,'Floor 2 Shelves') !== false)
{
	echo 'on floor 2!';
}
elseif(strpos($loc,'Reference') !== false){
	  echo 'on Floor 2 Reference. Ask at the desk.';
		print "<img src='../img/FL2ref.gif' />";
<<<<<<< HEAD
}
elseif(strpos($loc,'Floor 3') !== false){
		print "<img src='../img/FL3-2012-AE.gif' />";

}
=======
}
elseif(strpos($loc,'Floor 3') !== false){
		print "<img src='../img/FL3-2012-AE.gif' />";

}
>>>>>>> fbe41d95c93af90c39a9cb2a4a93b1991045ecda
elseif(strpos($loc,'Floor 4') !== false){
	    fl4StacksMap($callNum);
}
elseif(strpos($loc,'Floor 5') !== false){
	echo 'on floor 5!';
}
elseif(strpos($loc,'Floor 6 Shelves') !== false){
	fl6StacksMap($callNum);
}
elseif(strpos($loc,'Floor 6 Special Collections') !== false){
<<<<<<< HEAD
	//echo 'special!';
	
=======
<<<<<<< HEAD
	//echo 'special!';
	
=======
>>>>>>> fbe41d95c93af90c39a9cb2a4a93b1991045ecda
>>>>>>> 9b0a428ca3a58162fb3511ebe150469a5b328fbd
	fl6Spc($callNum);
	
}
else{
	echo 'not sure where it is!';
}



function fl4StacksMap($callNum){
<<<<<<< HEAD
		

		//	if ($location == 'BK') {
					//if valid, cut to the first 6 chars and test
					$location = "Floor 4";
					//strip the tags to prevent executable code from being passed in
					$callNum = strip_tags($callNum);
					//strip the first 19 chars off the call number
					//$callNum = substr_replace($callNum, '', 0, 19);
					
					//the way our catalog passes in call numbers leaves extra space characters
					//before the call number begins. This gets rid of them. Each catalog may
					//append different amounts of space to the numbers
					$subCall = substr($callNum, 0, 20);	
					print "<p>You searched for $callNum</p>";
					//remove all whitespace from string - necessary for comparisons
					//$subCall = preg_replace('/\s+/', '', $subCall);
					
					
					//print "<p>Subcall is: $subCall </p>";
				
					
		
		// 0.001 - 006.5A - Shelf 1
			 if ($subCall >= 'A' && $subCall < 'PQ'){
						print "<img src='../img/FL4GHB.gif' />";
						print "<p> $callNum is on floor 4.</p>";
		}

			
		// PQ PR
			 elseif ($subCall >= 'PQ' && $subCall < 'PR'){
						print "<img src='img/FL6-2012-PQPR.gif' />";
						print "<p> $callNum is on floor 6</p>";
		}
		
		// PR PS
			 elseif ($subCall >= 'PR' && $subCall < 'PS'){
						print "<img src='img/FL6-2012-PRPS.gif' />";
						print "<p> $callNum is on floor 6</p>";
		}

		// PS PZ
			 elseif ($subCall >= 'PS0001' && $subCall < 'PZ9999'){
						print "<img src='img/FL6-2012-PSPZ.gif' />";
						print "<p> $callNum is on floor 6</p>";
		}
		 elseif ($subCall > 'PZ9999'){
						print "<img src='../img/FL2ref.gif' />";
						print "<p> $callNum has moved. Please ask at the reference desk.</p>";
		}
	

			elseif($subCall > 999.999) {
						print "<p>Error in call number</p>";
					//	print "<p>subcall is $subCall</p>";

					}
			else{
				print "<p>Other call number. Please ask at the reference desk.</p>";
				print "<img src='../img/FL2ref.gif' />";
			

			}
    			print "</div>";
	   		
 
	}	
	
			 //end Floor 4 Shelves function

//////////////////Floor 6 Shelves function/////////		
function fl6StacksMap($callNum){
=======
>>>>>>> fbe41d95c93af90c39a9cb2a4a93b1991045ecda
		

		//	if ($location == 'BK') {
					//if valid, cut to the first 6 chars and test
					$location = "Floor 4";
					//strip the tags to prevent executable code from being passed in
					$callNum = strip_tags($callNum);
					//strip the first 19 chars off the call number
					//$callNum = substr_replace($callNum, '', 0, 19);
					
					//the way our catalog passes in call numbers leaves extra space characters
					//before the call number begins. This gets rid of them. Each catalog may
					//append different amounts of space to the numbers
					$subCall = substr($callNum, 0, 20);	
					print "<p>You searched for $callNum</p>";
					//remove all whitespace from string - necessary for comparisons
					//$subCall = preg_replace('/\s+/', '', $subCall);
					
					
					//print "<p>Subcall is: $subCall </p>";
				
					
		
<<<<<<< HEAD
		// 0.001 - 006.5A - Shelf 1
			 if ($subCall >= 'A' && $subCall < 'PQ'){
						print "<img src='../img/FL4GHB.gif' />";
						print "<p> $callNum is on floor 4.</p>";
=======
<<<<<<< HEAD
		// 0.001 - 006.5A - Shelf 1
			 if ($subCall >= 'A' && $subCall < 'PQ'){
						print "<img src='../img/FL6-2012-LM.gif' />";
						print "<p> $callNum is on floor 6.</p>";
=======
	 if ($subCall >= 'A' && $subCall < 'PQ'){
			print "<img src='../img/FL4GHB.gif' />";
			print "<p> $callNum is on floor 4.</p>";
>>>>>>> fbe41d95c93af90c39a9cb2a4a93b1991045ecda
>>>>>>> 9b0a428ca3a58162fb3511ebe150469a5b328fbd
		}

			
		// PQ PR
			 elseif ($subCall >= 'PQ' && $subCall < 'PR'){
						print "<img src='img/FL6-2012-PQPR.gif' />";
						print "<p> $callNum is on floor 6</p>";
		}
		
		// PR PS
			 elseif ($subCall >= 'PR' && $subCall < 'PS'){
						print "<img src='img/FL6-2012-PRPS.gif' />";
						print "<p> $callNum is on floor 6</p>";
		}

		// PS PZ
			 elseif ($subCall >= 'PS0001' && $subCall < 'PZ9999'){
						print "<img src='img/FL6-2012-PSPZ.gif' />";
						print "<p> $callNum is on floor 6</p>";
		}
		 elseif ($subCall > 'PZ9999'){
						print "<img src='../img/FL2ref.gif' />";
						print "<p> $callNum has moved. Please ask at the reference desk.</p>";
		}
	

			elseif($subCall > 999.999) {
						print "<p>Error in call number</p>";
					//	print "<p>subcall is $subCall</p>";

					}
			else{
				print "<p>Other call number. Please ask at the reference desk.</p>";
				print "<img src='../img/FL2ref.gif' />";
			

			}
    			print "</div>";
	   		
 
	}	
	
<<<<<<< HEAD
			 //end Floor 6 Shelves function
		
		
		
			 
function fl6Spc($callNum){
=======
			 //end Floor 4 Shelves function

//////////////////Floor 6 Shelves function/////////		
function fl6StacksMap($callNum){
		

		//	if ($location == 'BK') {
					//if valid, cut to the first 6 chars and test
					$location = "Floor 6";
					//strip the tags to prevent executable code from being passed in
					$callNum = strip_tags($callNum);
					//strip the first 19 chars off the call number
					//$callNum = substr_replace($callNum, '', 0, 19);
					
					//the way our catalog passes in call numbers leaves extra space characters
					//before the call number begins. This gets rid of them. Each catalog may
					//append different amounts of space to the numbers
					$subCall = substr($callNum, 0, 20);	
					print "<p>You searched for $callNum</p>";
					//remove all whitespace from string - necessary for comparisons
					//$subCall = preg_replace('/\s+/', '', $subCall);
					
					
					//print "<p>Subcall is: $subCall </p>";
				
					
		
		// 0.001 - 006.5A - Shelf 1
			 if ($subCall >= 'A' && $subCall < 'PQ'){
						print "<img src='../img/FL6-2012-LM.gif' />";
						print "<p> $callNum is on floor 6.</p>";
		}

			
		// PQ PR
			 elseif ($subCall >= 'PQ' && $subCall < 'PR'){
						print "<img src='img/FL6-2012-PQPR.gif' />";
						print "<p> $callNum is on floor 6</p>";
		}
		
		// PR PS
			 elseif ($subCall >= 'PR' && $subCall < 'PS'){
						print "<img src='img/FL6-2012-PRPS.gif' />";
						print "<p> $callNum is on floor 6</p>";
		}

		// PS PZ
			 elseif ($subCall >= 'PS0001' && $subCall < 'PZ9999'){
						print "<img src='img/FL6-2012-PSPZ.gif' />";
						print "<p> $callNum is on floor 6</p>";
		}
		 elseif ($subCall > 'PZ9999'){
						print "<img src='../img/FL2ref.gif' />";
						print "<p> $callNum has moved. Please ask at the reference desk.</p>";
		}
	

			elseif($subCall > 999.999) {
						print "<p>Error in call number</p>";
					//	print "<p>subcall is $subCall</p>";

					}
			else{
				print "<p>Other call number</p>";

			}
    			print "</div>";
	   		
 
	}	
	
			 //end Floor 6 Shelves function
>>>>>>> fbe41d95c93af90c39a9cb2a4a93b1991045ecda
		

		//	if ($location == 'BK') {
					//if valid, cut to the first 6 chars and test
					$location = "Floor 6";
					//strip the tags to prevent executable code from being passed in
					$callNum = strip_tags($callNum);
					//strip the first 19 chars off the call number
					//$callNum = substr_replace($callNum, '', 0, 19);
					
					//the way our catalog passes in call numbers leaves extra space characters
					//before the call number begins. This gets rid of them. Each catalog may
					//append different amounts of space to the numbers
					$subCall = substr($callNum, 0, 20);	
					print "<p><img src='../img/FL6-2012-SpecialCollection.gif' /></p>";
					print "<p> $callNum is on floor 6 in Special Collections.</p>";
		
		
<<<<<<< HEAD
	}	
	
			 //end Floor 6 Special Collections function
=======
			 
function fl6Spc($callNum){
		

		//	if ($location == 'BK') {
					//if valid, cut to the first 6 chars and test
					$location = "Floor 6";
					//strip the tags to prevent executable code from being passed in
					$callNum = strip_tags($callNum);
					//strip the first 19 chars off the call number
					//$callNum = substr_replace($callNum, '', 0, 19);
					
					//the way our catalog passes in call numbers leaves extra space characters
					//before the call number begins. This gets rid of them. Each catalog may
					//append different amounts of space to the numbers
					$subCall = substr($callNum, 0, 20);	
					print "<p><img src='../img/FL6-2012-SpecialCollection.gif' /></p>";
					print "<p> $callNum is on floor 6 in Special Collections.</p>";
		
		
	}	
	
<<<<<<< HEAD
			 //end Floor 6 Special Collections function
=======
//end Floor 6 Special Collections function
>>>>>>> fbe41d95c93af90c39a9cb2a4a93b1991045ecda
>>>>>>> 9b0a428ca3a58162fb3511ebe150469a5b328fbd

		
			//////////////////Storage basement function		/////////////////////////////
			
function storage($callNum){
					//if valid, cut to the first 6 chars and test
					$location = "Storage Basement";
					$callNum = strip_tags($callNum);
					$callNum = substr_replace($callNum, '', 0, 19);
					$pattern = '/Text me this call number/';
					$replace = '';
					//strip the text me this call number text from call number
					$callNum = preg_replace($pattern, $replace, $callNum);

					$subCall = substr($callNum, 0, 20);
					print '<div class="main">';
					print "<p>You searched for $callNum in location: $location </p>";
					//remove all whitespace from string
 
					//print "<p>Subcall is: $subCall </p>";
				
					
					print "<p>Request this item from the storage basement on the previous page.</p>";
					print "<p>Once your item is ready, you can pick it up at the reference desk on floor 2.</p>";

					print "<img src='img/FL2ref.gif' />";
						
					print '</div>';
		
}///////////end Storage Basement Function//////////////////////////

?>
