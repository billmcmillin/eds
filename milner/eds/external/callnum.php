<?php

//////////////////BRK stacks		
function fl6StacksMap($callNum){
	

	$pattern = "Text me this call number";
	$replace = "";
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
	




	

		//	if ($location == 'BK') {
					//if valid, cut to the first 6 chars and test
					$location = "Floor 6";
					//strip the tags to prevent executable code from being passed in
					$callNum = strip_tags($callNum);
					//strip the first 19 chars off the call number
					$callNum = substr_replace($callNum, '', 0, 19);
					$pattern = '/Text me this call number/';
					$replace = '';
					//strip the text me this call number text from call number
					$callNum = preg_replace($pattern, $replace, $callNum);
					//the way our catalog passes in call numbers leaves extra space characters
					//before the call number begins. This gets rid of them. Each catalog may
					//append different amounts of space to the numbers
					$subCall = substr($callNum, 0, 20);	
					print "<p>You searched for $callNum in location: $location </p>";
					//remove all whitespace from string - necessary for comparisons
					$subCall = preg_replace('/\s+/', '', $subCall);
					
					
					//print "<p>Subcall is: $subCall </p>";
				
					
		
		// 0.001 - 006.5A - Shelf 1
			 if ($subCall >= '0.001' && $subCall < '006.5A'){
						print "<img src='img/shelf1.gif' />";
						print "<p> $callNum is on floor 1</p>";
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

		
				
			//////////////////ACM Brooklyn Children's Nonfiction stacks		/////////////////////////////
			
function acmNonFicStacksMap($callNum){
					//if valid, cut to the first 6 chars and test
					$location = "Brooklyn Children's Fiction";
					$callNum = strip_tags($callNum);
					$subCall = substr($callNum, 6, 20);	
					print "<p>You searched for $callNum in location: $location </p>";
					//remove all whitespace from string
					$subCall = preg_replace('/\s+/', '', $subCall);
					//print "<p>Subcall is: $subCall </p>";
				
					
					
			// ACM 001 - ACM 811 - Shelf 185
				if ($subCall >= 'ACM001' && $subCall < 'ACM811'){
						print "<img src='img/shelf185.gif' />";
						print "<p> $callNum is on floor 2M, row 2 </p>";
						
					}
					
					// ACM 811 - ACM 999 - Shelf 186
					elseif ($subCall >= 'ACM811' && $subCall < 'ACM999'){
						print "<img src='img/shelf186.gif' />";
						print "<p> $callNum is on floor 2M, row 2 </p>";
						
					
					}
		
}///////////end ACM Non-fiction Function//////////////////////////

////////////bkFiction function///////////////////////		
		
function bkFiction($callNum){
		//	if ($location == 'BK') {
					//if valid, cut to the first 6 chars and test
					$location = "Brooklyn Fiction";
					//strip the tags to prevent executable code from being passed in
					$callNum = strip_tags($callNum);
					//the way our catalog passes in call numbers leaves extra space characters
					//before the call number begins. This gets rid of them. Each catalog may
					//append different amounts of space to the numbers
					$subCall = substr($callNum, 6, 20);	
					print "<p>You searched for $callNum in location: $location </p>";
					//remove all whitespace from string - necessary for comparisons
					$subCall = preg_replace('/\s+/', '', $subCall);
					//print "<p>Subcall is: $subCall </p>";
				
			
		// A - BRO - Shelf 207
			 if ($subCall >= 'A' && $subCall < 'BRO'){
						print "<img src='img/shelf207.gif' />";
						print "<p> $callNum is on floor 1</p>";
		}
		
		// BRO - DEI - Shelf 208
			 elseif ($subCall >= 'BRO' && $subCall < 'DEI'){
						print "<img src='img/shelf208.gif' />";
						print "<p> $callNum is on floor 1</p>";
		}
		
		// DEI - FIC - Shelf 209
			elseif ($subCall >= 'DEI' && $subCall < 'FIC'){
						print "<img src='img/shelf209.gif' />";
						print "<p> $callNum is on floor 1</p>";
		}
		
		// FIC - HAR - Shelf 210
			 elseif ($subCall >= 'FIC' && $subCall < 'HAR'){
						print "<img src='img/shelf210.gif' />";
						print "<p> $callNum is on floor 1</p>";
		}
		
		// HAR - KAV - Shelf 211
			 elseif ($subCall >= 'HAR' && $subCall < 'KAV'){
						print "<img src='img/shelf211.gif' />";
						print "<p> $callNum is on floor 1</p>";
		}
		
		// KAV - MAN- Shelf 212
			 elseif ($subCall >= 'KAV' && $subCall < 'MAN'){
						print "<img src='img/shelf212.gif' />";
						print "<p> $callNum is on floor 1</p>";
		}
		
		// MAN - MAU - Shelf 213
			 elseif ($subCall >= 'MAN' && $subCall < 'MAU'){
						print "<img src='img/shelf213.gif' />";
						print "<p> $callNum is on floor 1</p>";
		}
		
		// MAU - RAN - Shelf 214
			 elseif ($subCall >= 'MAU' && $subCall < 'RAN'){
						print "<img src='img/shelf214.gif' />";
						print "<p> $callNum is on floor 1</p>";
		}
		
		// RAN - SPA Shelf 215
			 elseif ($subCall >= 'RAN' && $subCall < 'SPA'){
						print "<img src='img/shelf215.gif' />";
						print "<p> $callNum is on floor 1</p>";
		}
		
		// SPA - Z Shelf 216
			 elseif ($subCall >= 'SPA' && $subCall < 'Z'){
						print "<img src='img/shelf216.gif' />";
						print "<p> $callNum is on floor 1</p>";
		}
}
//////////////end bkFiction function//////////////////

/////////////bkLowerLevel///////////////////////

		
function bkLowerLevel($callNum){
		//	if ($location == 'BK') {
					//if valid, cut to the first 6 chars and test
					$location = "Brooklyn Lower Level Cage";
					//strip the tags to prevent executable code from being passed in
					$callNum = strip_tags($callNum);
					//the way our catalog passes in call numbers leaves extra space characters
					//before the call number begins. This gets rid of them. Each catalog may
					//append different amounts of space to the numbers
					$subCall = substr($callNum, 6, 20);	
					print "<p>You searched for $callNum in location: $location </p>";
					//remove all whitespace from string - necessary for comparisons
					$subCall = preg_replace('/\s+/', '', $subCall);
					//print "<p>Subcall is: $subCall </p>";
				
			
		// ref
		print "<img src='img/ref.gif' />";
		print "<p>Write down this call number and give it to the librarian: $callNum $location</p><br /><br />";
		
		
}
///////////////////end bkLowerLevel function///////////////////

/////////////bkClosedStacks///////////////////////

		
function bkClosedStacks($callNum){
		//	if ($location == 'BK') {
					//if valid, cut to the first 6 chars and test
					$location = "Brooklyn Closed Stacks";
					//strip the tags to prevent executable code from being passed in
					$callNum = strip_tags($callNum);
					//the way our catalog passes in call numbers leaves extra space characters
					//before the call number begins. This gets rid of them. Each catalog may
					//append different amounts of space to the numbers
					$subCall = substr($callNum, 6, 20);	
					print "<p>You searched for $callNum in location: $location </p>";
					//remove all whitespace from string - necessary for comparisons
					$subCall = preg_replace('/\s+/', '', $subCall);
					//print "<p>Subcall is: $subCall </p>";
				
			
		// ref

		print "<img src='img/ref.gif' />";
		print "<p>Write down this call number and give it to the librarian: $callNum </p><br /><br />";
		
}
///////////////////end bkClosedStacks function///////////////////


/////////////bkRare///////////////////////

		
function bkRare($callNum){
		//	if ($location == 'BK') {
					//if valid, cut to the first 6 chars and test
					$location = "Brooklyn Rare Books";
					//strip the tags to prevent executable code from being passed in
					$callNum = strip_tags($callNum);
					//the way our catalog passes in call numbers leaves extra space characters
					//before the call number begins. This gets rid of them. Each catalog may
					//append different amounts of space to the numbers
					$subCall = substr($callNum, 6, 20);	
					print "<p>You searched for $callNum in location: $location </p>";
					//remove all whitespace from string - necessary for comparisons
					$subCall = preg_replace('/\s+/', '', $subCall);
					//print "<p>Subcall is: $subCall </p>";
				
			
		// ref

		print "<img src='img/ref.gif' />";
		print "<p>Write down this call number and give it to the librarian: $callNum </p><br /><br />";
		
}
///////////////////end bkRare function///////////////////


/////////////bkRef///////////////////////

		
function bkRef($callNum){
		//	if ($location == 'BK') {
					//if valid, cut to the first 6 chars and test
					$location = "Brooklyn Reference";
					//strip the tags to prevent executable code from being passed in
					$callNum = strip_tags($callNum);
					//the way our catalog passes in call numbers leaves extra space characters
					//before the call number begins. This gets rid of them. Each catalog may
					//append different amounts of space to the numbers
					$subCall = substr($callNum, 6, 20);	
					print "<p>You searched for $callNum in location: $location </p>";
					//remove all whitespace from string - necessary for comparisons
					$subCall = preg_replace('/\s+/', '', $subCall);
					//print "<p>Subcall is: $subCall </p>";
				
			
			// 0 - 30 - Shelf 217
			 if ($subCall >= '000' && $subCall < '030'){
						print "<img src='img/shelf217.gif' />";
						print "<p> $callNum is on floor 1 - Reference</p>";
		}
		
		// 30 - 70
			 elseif ($subCall >= '030' && $subCall < '080'){
						print "<img src='img/shelf218.gif' />";
						print "<p> $callNum is on floor 1 - Reference</p>";
		}
		
			// 80 - 291
			 elseif ($subCall >= '080' && $subCall < '291'){
						print "<img src='img/shelf219.gif' />";
						print "<p> $callNum is on floor 1 - Reference</p>";
		}
		
		// 291 - 297
			 elseif ($subCall >= '291' && $subCall < '297'){
						print "<img src='img/shelf220.gif' />";
						print "<p> $callNum is on floor 1 - Reference</p>";
		}
		
			// 297 - 307
			 elseif ($subCall >= '297' && $subCall < '307'){
						print "<img src='img/shelf221.gif' />";
						print "<p> $callNum is on floor 1 - Reference</p>";
		}
		
			// 307 - 361
			 elseif ($subCall >= '307' && $subCall < '361'){
						print "<img src='img/shelf222.gif' />";
						print "<p> $callNum is on floor 1 - Reference</p>";
		}
		
			// 361 - 526
			 elseif ($subCall >= '361' && $subCall < '528'){
						print "<img src='img/shelf223.gif' />";
						print "<p> $callNum is on floor 1 - Reference</p>";
		}
		
			// 528 - 690
			 elseif ($subCall >= '528' && $subCall < '690'){
						print "<img src='img/shelf224.gif' />";
						print "<p> $callNum is on floor 1 - Reference</p>";
		}
		
			// 690 - 720
			 elseif ($subCall >= '690' && $subCall < '720'){
						print "<img src='img/shelf225.gif' />";
						print "<p> $callNum is on floor 1 - Reference</p>";
		}
		
		// 720 - 808
			 elseif ($subCall >= '720' && $subCall < '808'){
						print "<img src='img/shelf226.gif' />";
						print "<p> $callNum is on floor 1 - Reference</p>";
		}
		
		// 808 - 917
			 elseif ($subCall >= '808' && $subCall < '917'){
						print "<img src='img/shelf227.gif' />";
						print "<p> $callNum is on floor 1 - Reference</p>";
		}
		
			// 917 - 999
			 elseif ($subCall >= '917' && $subCall < '999'){
						print "<img src='img/shelf228.gif' />";
						print "<p> $callNum is on floor 1 - Reference</p>";
		}
		
}
///////////////////end bkRef function///////////////////

/////////////bkReadyRef///////////////////////

		
function bkReadyRef($callNum){
		//	if ($location == 'BK') {
					//if valid, cut to the first 6 chars and test
					$location = "Brooklyn Ready Reference";
					//strip the tags to prevent executable code from being passed in
					$callNum = strip_tags($callNum);
					//the way our catalog passes in call numbers leaves extra space characters
					//before the call number begins. This gets rid of them. Each catalog may
					//append different amounts of space to the numbers
					$subCall = substr($callNum, 6, 20);	
					print "<p>You searched for $callNum in location: $location </p>";
					//remove all whitespace from string - necessary for comparisons
					$subCall = preg_replace('/\s+/', '', $subCall);
					//print "<p>Subcall is: $subCall </p>";
				
			
		// ref

		print "<img src='img/ready.gif' />";
		
}
///////////////////end bkReadyRef function///////////////////





/////////////bkPopUp///////////////////////

		
function bkPopUp($callNum){
		//	if ($location == 'BK') {
					//if valid, cut to the first 6 chars and test
					$location = "Brooklyn Pop-up Books";
					//strip the tags to prevent executable code from being passed in
					$callNum = strip_tags($callNum);
					//the way our catalog passes in call numbers leaves extra space characters
					//before the call number begins. This gets rid of them. Each catalog may
					//append different amounts of space to the numbers
					$subCall = substr($callNum, 6, 20);	
					print "<p>You searched for $callNum in location: $location </p>";
					//remove all whitespace from string - necessary for comparisons
					$subCall = preg_replace('/\s+/', '', $subCall);
					//print "<p>Subcall is: $subCall </p>";
				
			
		// ref

		print "<img src='img/ref.gif' />";
		print "<p>Write down this call number and give it to the librarian: $callNum $location</p><br /><br />";
		
}
///////////////////end bkPopUp function///////////////////


/////////////bkArtistBks///////////////////////

		
function bkArtistBks($callNum){
		//	if ($location == 'BK') {
					//if valid, cut to the first 6 chars and test
					$location = "Brooklyn Artists' Books";
					//strip the tags to prevent executable code from being passed in
					$callNum = strip_tags($callNum);
					//the way our catalog passes in call numbers leaves extra space characters
					//before the call number begins. This gets rid of them. Each catalog may
					//append different amounts of space to the numbers
					$subCall = substr($callNum, 6, 20);	
					print "<p>You searched for $callNum in location: $location </p>";
					//remove all whitespace from string - necessary for comparisons
					$subCall = preg_replace('/\s+/', '', $subCall);
					//print "<p>Subcall is: $subCall </p>";
				
			
		// ref

		print "<img src='img/ref.gif' />";
		print "<p>Write down this call number and give it to the librarian: $callNum $location</p><br /><br />";
		
		
}
///////////////////end bkArtistBksfunction///////////////////

/////////////bkTek///////////////////////

		
function bkTek($callNum){
		//	if ($location == 'BK') {
					//if valid, cut to the first 6 chars and test
					$location = "Brooklyn Technical Services";
					//strip the tags to prevent executable code from being passed in
					$callNum = strip_tags($callNum);
					//the way our catalog passes in call numbers leaves extra space characters
					//before the call number begins. This gets rid of them. Each catalog may
					//append different amounts of space to the numbers
					$subCall = substr($callNum, 6, 20);	
					print "<p>You searched for $callNum in location: $location </p>";
					//remove all whitespace from string - necessary for comparisons
					$subCall = preg_replace('/\s+/', '', $subCall);
					//print "<p>Subcall is: $subCall </p>";
				
			
		// ref

		print "<img src='img/ref.gif' />";
		print "<p>Item may be unavailable. Write down this call number and give it to the librarian: $callNum $location</p><br /><br />";
		
		
}
///////////////////end bkTekfunction///////////////////


/////////////bkReserves///////////////////////

		
function bkReserves($callNum){
		//	if ($location == 'BK') {
					//if valid, cut to the first 6 chars and test
					$location = "Brooklyn Reserves";
					//strip the tags to prevent executable code from being passed in
					$callNum = strip_tags($callNum);
					//the way our catalog passes in call numbers leaves extra space characters
					//before the call number begins. This gets rid of them. Each catalog may
					//append different amounts of space to the numbers
					$subCall = substr($callNum, 6, 20);	
					print "<p>You searched for $callNum in location: $location </p>";
					//remove all whitespace from string - necessary for comparisons
					$subCall = preg_replace('/\s+/', '', $subCall);
					//print "<p>Subcall is: $subCall </p>";
				
			
		// ref

		print "<img src='img/circ.gif' />";
		print "<p>Item is on course reserves at the circulation desk. Write down this call number and give it to the librarian: $callNum $location</p><br /><br />";
		
		
}
///////////////////end bkReserves///////////////////


/////////////bkReserves///////////////////////

		
function bkPeriodicals($callNum){
		//	if ($location == 'BK') {
					//if valid, cut to the first 6 chars and test
					$location = "Brooklyn 2M Periodicals";
					//strip the tags to prevent executable code from being passed in
					$callNum = strip_tags($callNum);
					//the way our catalog passes in call numbers leaves extra space characters
					//before the call number begins. This gets rid of them. Each catalog may
					//append different amounts of space to the numbers
					$subCall = substr($callNum, 6, 20);	
					print "<p>You searched for $callNum in location: $location </p>";
					//remove all whitespace from string - necessary for comparisons
					$subCall = preg_replace('/\s+/', '', $subCall);
					//print "<p>Subcall is: $subCall </p>";
				
			
		// ref

		print "<p>Current issues of periodicals are in the Periodicals Reading Room on Floor 2, shelved in alphabetical order by title.</p><br /><br />";
		print "<p>Older issues of periodicals are bound and are kept in the rooms on either side of the periodicals reading room and are shelved in alphabetical order by title.</p><br /><br /><hr />";

		
		
}
///////////////////end bkReserves///////////////////

/////////////VMRdesk///////////////////////

		
function vmr_desk($callNum){
		//	if ($location == 'BK') {
					//if valid, cut to the first 6 chars and test
					$location = "VMR Desk, Lower Level";
					//strip the tags to prevent executable code from being passed in
					$callNum = strip_tags($callNum);
					//the way our catalog passes in call numbers leaves extra space characters
					//before the call number begins. This gets rid of them. Each catalog may
					//append different amounts of space to the numbers
					$subCall = substr($callNum, 6, 20);	
					print "<p>You searched for $callNum in location: $location </p>";
					//remove all whitespace from string - necessary for comparisons
					$subCall = preg_replace('/\s+/', '', $subCall);
					//print "<p>Subcall is: $subCall </p>";
				
			
		// ref

		print "<img src='img/vmr_desk.gif' />";
		print "<p>Write down this call number and give it to the VMR staff: $callNum $location</p><br /><br />";
		
		
}
///////////////////end VMR///////////////////



/////////////Equipment///////////////////////

		
function equipment($callNum){
		//	if ($location == 'BK') {
					//if valid, cut to the first 6 chars and test
					$location = "VMR Equipment Office, Lower Level";
					//strip the tags to prevent executable code from being passed in
					$callNum = strip_tags($callNum);
					//the way our catalog passes in call numbers leaves extra space characters
					//before the call number begins. This gets rid of them. Each catalog may
					//append different amounts of space to the numbers
					$subCall = substr($callNum, 6, 20);	
					print "<p>You searched for $callNum in location: $location </p>";
					//remove all whitespace from string - necessary for comparisons
					$subCall = preg_replace('/\s+/', '', $subCall);
					//print "<p>Subcall is: $subCall </p>";
				
			
		// ref

		print "<img src='img/equip.gif' />";
		print "<p>Ask for item at the equipment loan office: $callNum $location</p><br /><br />";
		
		
}
///////////////////end equipment///////////////////



/////////////////PMC function stacks
		
	//////////////////		
function pmcStacksMap($callNum){
					//if valid, cut to the first 6 chars and test
					$location = "Manhattan Stacks";
					$callNum = strip_tags($callNum);
					$subCall = substr($callNum, 6, 20);	
					print "<p>You searched for $callNum in location: $location </p>";
					//remove all whitespace from string
					$subCall = preg_replace('/\s+/', '', $subCall);
					//print "<p>Subcall is: $subCall </p>";
				//if the call number is 3 digits followed by a letter, insert .00 to make it sort correctly
					if(ctype_alpha($subCall[3]) && ctype_digit($subCall[2])){
							$subCall = substr($subCall,0,3).'.00'.substr($subCall,3,20);
							//print "<p>converted subcall is $subCall</p>";
					}
					
					// 000 - 020.19
					if ($subCall < '020.19'){
						print "<img src='img/PMC_shelf1.gif' />";
						print "<p> $callNum at PMC</p>";
						
					}
					
					// 020.19 -021.7
					elseif ($subCall >= '020.19' && $subCall < '021.7'){
						print "<img src='img/PMC_shelf2.gif' />";
						print "<p> $callNum at PMC</p>";
						
					}
					
					// 021.7 - 025
					elseif ($subCall >= '021.7' && $subCall < '025'){
						print "<img src='img/PMC_shelf2-5.gif' />";
						print "<p> $callNum at PMC</p>";
						
					}
					
					// 025 - 025.21
					elseif ($subCall >= '025.0' && $subCall < '025.21'){
						print "<img src='img/PMC_shelf3.gif' />";
						print "<p> $callNum at PMC</p>";
						
					}
					
					// 025.21 - 025.5
					elseif ($subCall >= '025.21' && $subCall < '025.5'){
						print "<img src='img/PMC_shelf4.gif' />";
						print "<p> $callNum at PMC</p>";
						
					}
					
					// 025.5 - 025.7
					elseif ($subCall >= '025.5' && $subCall < '025.7'){
						print "<img src='img/PMC_shelf4-5.gif' />";
						print "<p> $callNum at PMC</p>";
						
					}
					
					// 025.7 - 027.6				
					elseif ($subCall >= '025.7' && $subCall < '027.6'){
						print "<img src='img/PMC_shelf5.gif' />";
						print "<p> $callNum at PMC</p>";
						
					}
					
					// 027.6	- 028.52			
					elseif ($subCall >= '027.6' && $subCall < '028.52'){
						print "<img src='img/PMC_shelf6.gif' />";
						print "<p> $callNum at PMC</p>";
						
					}
					
					// 028.52 - 029.7			
					elseif ($subCall >= '028.52' && $subCall < '029.7'){
						print "<img src='img/PMC_shelf6-5.gif' />";
						print "<p> $callNum at PMC</p>";
						
					}
					
					// 029.7	- 371.35		
					elseif ($subCall >= '029.7' && $subCall < '371.35'){
						print "<img src='img/PMC_shelf7.gif' />";
						print "<p> $callNum at PMC</p>";
						
					}
					
					// 371.35	- 700
					elseif ($subCall >= '371.3' && $subCall < '700'){
						print "<img src='img/PMC_shelf8.gif' />";
						print "<p> $callNum at PMC</p>";
						
					}
					
					// 700 - 709.43
					elseif ($subCall >= '700' && $subCall < '709.43'){
						print "<img src='img/PMC_shelf8-5.gif' />";
						print "<p> $callNum at PMC</p>";
						
					}
					
					// 709.43 - 741.609
					elseif ($subCall >= '709.43' && $subCall < '741.609'){
						print "<img src='img/PMC_shelf9.gif' />";
						print "<p> $callNum at PMC</p>";
						
					}
					
					// 741.609 - 769.94
					elseif ($subCall >= '741.609' && $subCall < '769.94'){
						print "<img src='img/PMC_shelf10.gif' />";
						print "<p> $callNum at PMC</p>";
						
					}
					
					// 769.94 - 808
					elseif ($subCall >= '769.94' && $subCall < '808'){
						print "<img src='img/PMC_shelf10-5.gif' />";
						print "<p> $callNum at PMC</p>";
						
					}
					
					// 808 - 999
					elseif ($subCall >= '808' && $subCall < '999'){
						print "<img src='img/PMC_shelf11.gif' />";
						print "<p> $callNum at PMC</p>";
						
					}
					
					else{
						
						print "<p>Pratt Manhatten Stacks</p>";
					}
					
			}
			
			/////////////////PMC current periodicals
		
	//////////////////		
function pmcCurPeriodicalsMap($callNum){
					//if valid, cut to the first 6 chars and test
					$location = "PMC Current Periodicals";
					$callNum = strip_tags($callNum);
					$subCall = substr($callNum, 6, 20);	
					print "<p>You searched for $callNum in location: $location </p>";
					//remove all whitespace from string
					$subCall = preg_replace('/\s+/', '', $subCall);
					//print "<p>Subcall is: $subCall </p>";
				
					
				
					
						print "<img src='img/PMC_current_periodicals.gif' />";

						print "<p>Pratt Manhatten Current Periodicals</p>";
					
					
			}
			
			/////////////////PMC Reference
		
	//////////////////		
function pmcRef($callNum){
					//if valid, cut to the first 6 chars and test
					$location = "PMC Reference";
					$callNum = strip_tags($callNum);
					$subCall = substr($callNum, 6, 20);	
					print "<p>You searched for $callNum in location: $location </p>";
					//remove all whitespace from string
					$subCall = preg_replace('/\s+/', '', $subCall);
					//print "<p>Subcall is: $subCall </p>";
				
					
				
					
						print "<img src='img/PMC_ref.gif' />";

						print "<p>Pratt Manhatten Reference</p>";
					
					
			}
			
//////////////end pmcRef//////////////////


			/////////////////PMC Fiction//////////////////		
function pmcFic($callNum){
					//if valid, cut to the first 6 chars and test
					$location = "PMC Fiction";
					$callNum = strip_tags($callNum);
					$subCall = substr($callNum, 6, 20);	
					print "<p>You searched for $callNum in location: $location </p>";
					//remove all whitespace from string
					$subCall = preg_replace('/\s+/', '', $subCall);
					//print "<p>Subcall is: $subCall </p>";
				
					
				
					
						print "<img src='img/PMC_fic.gif' />";

						print "<p>Pratt Manhatten Fiction</p>";
					
					
			}
//////////end PMC Fiction///////////////////


/////////////pmcReserves///////////////////////

		
function pmcReserves($callNum){
		//	if ($location == 'BK') {
					//if valid, cut to the first 6 chars and test
					$location = "PMC Reserves";
					//strip the tags to prevent executable code from being passed in
					$callNum = strip_tags($callNum);
					//the way our catalog passes in call numbers leaves extra space characters
					//before the call number begins. This gets rid of them. Each catalog may
					//append different amounts of space to the numbers
					$subCall = substr($callNum, 6, 20);	
					print "<p>You searched for $callNum in location: $location </p>";
					//remove all whitespace from string - necessary for comparisons
					$subCall = preg_replace('/\s+/', '', $subCall);
					//print "<p>Subcall is: $subCall </p>";
				
			
		// ref

		print "<img src='img/pmccirc.gif' />";
		print "<p>Item is on course reserves at the circulation desk. Write down this call number and give it to the librarian: $callNum $location</p><br /><br />";
		
		
}
///////////////////end pmcReserves///////////////////


/////////////eResources///////////////////////

		
function eResource($callNum){
		//	if ($location == 'BK') {
					//if valid, cut to the first 6 chars and test
					$location = "World Wide Web";
					//strip the tags to prevent executable code from being passed in
					$callNum = strip_tags($callNum);
					//the way our catalog passes in call numbers leaves extra space characters
					//before the call number begins. This gets rid of them. Each catalog may
					//append different amounts of space to the numbers
					$subCall = substr($callNum, 6, 20);	
					//remove all whitespace from string - necessary for comparisons
					$subCall = preg_replace('/\s+/', '', $subCall);
					//print "<p>Subcall is: $subCall </p>";
				
			
		// ref

		print "<p>This is an electronic item. You can access it from the link on the previous page near the bottom of the catalog record.</p><br /><br />";
		
		
}
///////////////////end bkReserves///////////////////

?>
