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

if(strpos($loc,'Floor 2') == true)
{
	echo 'on floor 2!';
}
elseif(strpos($loc,'Floor 3') == true){
	echo 'on floor 3!';
}
elseif(strpos($loc,'Floor 4') == true){
	echo 'on floor 4!';
}
elseif(strpos($loc,'Floor 5') == true){
	echo 'on floor 5!';
}
elseif(strpos($loc,'Floor 6') == true){
	echo 'on floor 6!';
}
else{
	echo 'not sure where it is!';
}



if($loc=='Floor 5 Shelves')
{
	echo 'on floor 5!';
}	
fl6StacksMap($callNum);




//////////////////BRK stacks		
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
						print "<img src='../img/FL4GHB.gif' />";
						//print "<p> $callNum is not on floor 6</p>";
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
	
			 //end BK function
		
		
		
		
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
