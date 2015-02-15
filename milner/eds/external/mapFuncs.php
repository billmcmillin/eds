<?php


function fl4StacksMap($callNum){
		

	$location = "Floor 4";
	$callNum = strip_tags($callNum);
	//just use the first 20 chars of call number				
	$subCall = substr($callNum, 0, 20);	
	print "<p>You searched for $callNum</p>";
					
		
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
		

	$location = "Floor 6";
					//strip the tags to prevent executable code from being passed in
	$callNum = strip_tags($callNum);
	$subCall = substr($callNum, 0, 20);	
	print "<p>You searched for $callNum</p>";
					
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

			}
		else{
			print "<p>Other call number</p>";

			}
    	print "</div>";
	   		
	}	
	
			 //end Floor 6 Shelves function
		
		
		
			 
function fl6Spc($callNum){
		
	$location = "Floor 6";
	$callNum = strip_tags($callNum);
				
	$subCall = substr($callNum, 0, 20);	
	print "<p><img src='../img/FL6-2012-SpecialCollection.gif' /></p>";
	print "<p> $callNum is on floor 6 in Special Collections.</p>";
		
		
	}	
	
//end Floor 6 Special Collections function

		
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
