<?php
/*mapFuncs_Goal.php
This is an example of how the mapFuncs.php file should look when the
generator program is run.
*/

//include function to sort callNums
include("../include/sort.php");

//variables passed in from linx.js
$callNum = htmlspecialchars($_GET["callNum"]);
$loc = htmlspecialchars($_GET["loc"]);

$subCall = sortable($callNum);

//result page that is displayed when user clicks on a link
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


//declare the array of location objects

	$locArray = array(
	    0 => array(
	    	'libName' => 'Milner',
	        'location' => 'Floor 1 Stacks',
	        'callNumBegin' => 'A',
	        'callNumEnd' => 'M',
	        'imageFile' => 'floor1range1.gif',

	    ),
	    1 => array(
	        'libName' => 'Milner',
	        'location' => 'Floor 1 Stacks',
	        'callNumBegin' => 'N',
	        'callNumEnd' => 'Z',
	        'imageFile' => 'floor1range2.gif',
	    ),
	);

//begin checking for locations


	foreach ($locArray as $locValue){

		if (($locValue.location == $loc) && ($subCall >= $locValue.callNumBegin) && ($subCall < $locValue.callNumEnd)) {
			print "We have a match!";
		}

	}



//end location check

	print "</div>";
	print "</body>";
	print "</html>";


?>