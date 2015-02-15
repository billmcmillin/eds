<?php
/*mapFuncs_Goal.php
This is an example of how the mapFuncs.php file should look when the
generator program is run.
*/

//include function to sort callNums
//include("../include/sort.php");

class stdObject {
    public function __construct(array $arguments = array()) {
        if (!empty($arguments)) {
            foreach ($arguments as $property => $argument) {
                $this->{$property} = $argument;
            }
        }
    }

    public function __call($method, $arguments) {
        $arguments = array_merge(array("stdObject" => $this), $arguments); // Note: method argument 0 will always referred to the main class ($this).
        if (isset($this->{$method}) && is_callable($this->{$method})) {
            return call_user_func_array($this->{$method}, $arguments);
        } else {
            throw new Exception("Fatal error: Call to undefined method stdObject::{$method}()");
        }
    }
}

//variables passed in from linx.js
$callNum = htmlspecialchars($_GET["callNum"]);
$loc = htmlspecialchars($_GET["loc"]);

//$subCall = sortable($callNum);
$subCall = $callNum;
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


//declare an object for each location and populate it
	
	$locObj = new stdObject();
	$locObj->libName = 'Milner';
	$locObj->location = 'Floor 2 Stacks';
	$locObj->callNumBegin = 'A';
	$locObj->callNumEnd = 'M';
	$locObj->imageFile = 'floor2range1.gif';

	$locObj1 = new stdObject();
	$locObj1->libName = 'Milner';
	$locObj1->location = 'Floor 2 Stacks';
	$locObj1->callNumBegin = 'N';
	$locObj1->callNumEnd = 'Z';
	$locObj1->imageFile = 'floor2range2.gif';

//put all the objects in an array

	$locArray = array(
		0 => $locObj,
		1 => $locObj1,
		);
	//var_dump($locArray);


//begin checking for locations


	foreach ($locArray as $locValue => $cur){

		if (($cur->location === $loc)&& ($subCall >= $cur->callNumBegin) && ($subCall < $cur->callNumEnd)) {
			print '<p>Call number ' . $subCall . 'is in location: ' . $cur->location . '.';
			print '<img src="../img/' . $cur->imageFile . '"/><br />';

			//print "subcall " . $subCall . " is between " . ($cur->callNumBegin) . " and ";
			//echo $cur->callNumEnd;
		}

		//echo $loc;
		//echo $cur->callNumEnd;
	}



//end location check

	print "</div>";
	print "</body>";
	print "</html>";


?>