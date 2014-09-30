

<?php
  include("../include/LIB_http.php");
  include("../include/LIB_parse.php");
   
    $keys = parse_url($url);
    $path = explode("/", $keys['path']);
    $end = end($path);
    $end = prev($path);
      
  $page = 'http://vufind.carli.illinois.edu/vf-isu/Record/AJAX?method=GetHoldings&id='.$end;
    
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
    global $books, $locations, $callNum;
        
    for($xx=0; $xx<count($td_array); $xx++)
  {

  echo $td_array[$xx]."<br />";
  }

  $loc = $td_array[0];
  $callnum = $td_array[1];
  $copynum = $td_array[2];
  $itemavail = $td_array[3];

  echo json_encode($td_array);
}

?>

