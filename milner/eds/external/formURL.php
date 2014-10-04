<?php

  include("../include/LIB_http.php");
  include("../include/LIB_parse.php");


        $id = ($_GET['idnum']);
    	
    	$url = 'http://vufind.carli.illinois.edu/vf-isu/Record/AJAX?method=GetHoldings&id=isu_' . $id;
    	
        getPage($url);

        //echo json_encode($td_array);
  

function getPage($url){

  $web_page = http_get($url, "");


  $td_array = parse_array($web_page['FILE'], "<td class=\"col2", "<");


for($xx=0; $xx<=count($td_array); $xx++)
  {
  $td_array[$xx] = preg_replace("/<td class=\"col2\">/", "", $td_array[$xx]);
  $td_array[$xx] = preg_replace("/</", "", $td_array[$xx]);

  //echo $td_array[$xx]."\n";
}

    getBooks($td_array);
}

function getBooks($td_array) {
        
    for($xx=0; $xx<=count($td_array); $xx += 4)
  {
  $loc = $td_array[($xx + 0)];
  $callnum = $td_array[($xx + 1)];
  //$copynum = $td_array[($xx + 2)];
  $itemavail = $td_array[($xx + 3)];
  $numItems = (count($td_array)/4);

  //echo $copynum . "<br />";
  		for($xy=0; $xy<$numItems; $xy++)
  		{
  			$itemNum = $xy + 1;
  	  		$itemArray = Array("item" => Array('loc' => $loc,
                                    'callnumber' => $callnum,
                                    'itemavailable' => $itemavail
                                    )
	  							
	  						);

  		}
  		json_encode($itemArray);

	  //echo $td_array[$xx];
	  

 
  }



}


?>