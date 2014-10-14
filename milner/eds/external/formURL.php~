<?php

  include("../include/LIB_http.php");
  include("../include/LIB_parse.php");
  header('Content-Type: application/json');

    if ($_GET['idnum']):
        $id = ($_GET['idnum']);
    	
    	$url = 'http://vufind.carli.illinois.edu/vf-isu/Record/AJAX?method=GetHoldings&id=isu_' . $id;
    	
        getPage($url);

        //echo json_encode($td_array);
    endif;  

function getPage($url){

  $web_page = http_get($url, "");


  $td_array = parse_array($web_page['FILE'], "<td class=\"col2", "<");


for($xx=0; $xx<count($td_array); $xx++)
  {
  $td_array[$xx] = preg_replace("/<td class=\"col2\">/", "", $td_array[$xx]);
  $td_array[$xx] = preg_replace("/</", "", $td_array[$xx]);

  //echo $td_array[$xx]."\n";
}

    getBooks($td_array);
}

function getBooks($td_array) {
        
    for($xx=0, $currentItem = 0; $xx<count($td_array); $xx += 4, $currentItem++)
  {

  $loc = $td_array[($xx + 0)];
  $callnum = $td_array[($xx + 1)];
  //$copynum = $td_array[($xx + 2)];
  $itemavail = $td_array[($xx + 3)];
  $numItems = (count($td_array)/4);
  $totalItems = array();
  $itemArray = array();

  //echo $copynum . "<br />";
  	for($xy=0; $xy<$numItems; $xy++)
  		{
  			$itemNum = $xy + 1;

        $totalItems[$xy]['itemnum'] = $itemNum;
        $totalItems[$xy]['loc'] = $loc;
        $totalItems[$xy]['callnumber'] = $callnum;
        $totalItems[$xy]['itemavail'] = $itemavail;

       
	  	  }
        $json[] = array_values($totalItems);


        //encode area 1
      //echo json_encode($totalItems[$currentItem], JSON_FORCE_OBJECT);
      /*with the above line the data returns the correct data as an error in the console
      (with or without the JSON_FORCE_OBJECT) and nothing is displayed in the html:
      "{"itemnum":1,"loc":"Floor 4 Shelves","callnumber":"GV1803 .B78 2013",
      "itemavailable":"c.1 - Checked out (Due: January 15, 2015)"}{"itemnum":2,
      "loc":"Floor 4 Shelves","callnumber":"GV1803 .B78 2013","itemavailable":
      "c.2 - Checked out (Due: January 27, 2015)"}{"itemnum":3,"loc":"Floor 6 
      Special Collections: Building Use Only","callnumber":"GV1803 .B78 2013",
      "itemavailable":"Available"}{"itemnum":4,"loc":"Floor 6 Special Collections: 
      Building Use Only","callnumber":"GV1803 .B78 2013","itemavailable":"Available"}"
      */

      /*
      echo json_encode($totalItems);
      This outputs the correct data as above as an error 4 times
      */
}
        echo json_encode($json);

   // echo json_encode($totalItems);
     
    //encode area 2
      //echo json_encode($totalItems);
      /*with the above  line uncommented the data returns as an array of objects and displays
      the objects in html
      with each object as
      callnumber: "GV1803.B78 2013"
      itemavailable: "Available"
      itemnum: 2 
      loc: "Floor 6 ..."
      __proto__:Object

      itemnum is correct (and the only non-string value) but the rest of the
      values are the same for each object and are from the last iteration of 
      the loop
    */

/*
          for($i=0; $i<4; $i++){
        echo json_encode($totalItems[$i]);
      }
      with the above enabled, I get the same data as in the objects above as an error in the console
      */
}


?>