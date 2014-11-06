$(document).ready(function() {

var $j = jQuery.noConflict();

//get the id number from the record
var obj = document.getElementsByClassName("rtac toggle-container tog-style4");
idnum = obj[0].id;

var idnum = idnum.replace(/rtac_milner_/g, "");

//make the AJAX request 
    $j.ajax({

        type: "GET",
        url: "./external/formURL.php",
        data: 'idnum=' + idnum, //send the id number
        success: function(json){
        //console.log(json); //for debugging
=        var data = json;
        processResult(data);
        },
         error: function (jqXHR, textStatus, errorThrown) {
        console.log(jqXHR.responseText); //for debugging
    }

    }); // close Ajax Call


function processResult(data){       
    //print the html to the div
    headhtml = '<div class="mapHeader">Find this Item</div>';
    $j(headhtml).appendTo("#output");

<<<<<<< HEAD
    $j.each(data, function() {
      $j.each(this, function(name, value) {
=======
    $j.each(data, function() { //for each object
      $j.each(this, function(name, value) { //for each object inside the object of objects
>>>>>>> fbe41d95c93af90c39a9cb2a4a93b1991045ecda
      			
       // console.log(value.loc + value.callnumber + value.itemnum + value.itemavail);
        content = '<div class="mapItem">';
        content = '<p><strong>Location: </strong>' + value.loc + '</p>';
        content += '<p><strong>Call No: </strong>' + value.callnumber + '</p>';   
        content += '<p><strong>Status: </strong>' + value.itemavail + '</p>';    
        //create the link to the getMap function, passing the location and call number
        content += '<a href="external/getMap.php?callNum=' + value.callnumber + '&loc=' + value.loc + '">Show on a Map' + '</a>';
        content += '<hr />';

        content += '</div>';

      });
        $j(content).appendTo("#output");
     
    });
          
}    

}); //close doc ready

