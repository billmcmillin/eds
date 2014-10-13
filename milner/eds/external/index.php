

<?php

    include('simple_html_dom.php');
    include 'callnum.php';
    $page = $_SERVER['HTTP_REFERER'];

    
   
    $locations = array();
    $callNum = array();
    $combined = array();

    getBooks($page);


function getBooks($page) {
    global $books, $locations, $callNum;
    
    $html = new simple_html_dom();
    $html->load_file($page);

    
    foreach($html->find('table[class=holdingsdata]') as $book) {
    	    $item[0]     = $book->find('tr', 0)->innertext;
       	    $item[1]     = $book->find('tr', 1)->innertext;

    	   // $item['intro']    = $location->find('td', 0)->plaintext;
    	    $loc[] = $item;
    }

    foreach($loc as $info) {
      if (strpos($info[0],'Floor 6') == true){
      	fl6StacksMap($info[1]);
      	print("<br /><br />");
      }
       elseif (strpos($info[0],'Brooklyn Stacks Oversize') == true){
 				print("<p>Oversize stacks</p>");
      }
      
       elseif (strpos($info[0],'Storage Basement') == true){
 	storage($info[1]);
     	print("<br /><br />");

      }
      
      else{
        		print "<p>Unknown location. Please contact a librarian for help.</p>";  		

        }
     }

    
}

?>

