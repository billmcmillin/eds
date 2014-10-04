$(document).ready(function() {

var $j = jQuery.noConflict();

var obj = document.getElementsByClassName("rtac toggle-container tog-style4");
idnum = obj[0].id;

var idnum = idnum.replace(/rtac_milner_/g, "");

$j.getJSON('./external/formURL.php?idnum='+idnum, function(data) {
            console.log(data); //uncomment this for debug
            //alert (data.item+" "+data.item+" "+data.item); //further debug
            //$j('#output').html("<p>item1="+data.item+" item2="+data.item+" item3="+data.item+"</p>");
        });




   /* $j.ajax({

        type: "GET",
        url: "./external/formURL.php",
        data: 'idnum=' + idnum,
        success: function(json){
            processResult(json);
           //$j('#output').text(data);
           
        }
    }); // Ajax Call

function processResult(json){
    console.log(json);
    
    $j.each(json, function(i, item) {
            $j("#output").append("<tr><td>" + item.loc + "hello" + "</td><td>" + item.callnumber + "</td></tr>");
        });


   /* for (var i = 0; i < item.length; i++) {
        var object = item[i];
        for (property in object) {
            var value = object[property];
            alert(property + "=" + value); 
        }
    }*/

    

}); //close doc ready


/*
$j.each(json.item, function(i,item){
            content = '<p>' + item.loc + '</p>';
            
            $j(content).appendTo("#output");
          });

*/