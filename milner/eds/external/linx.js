$(document).ready(function() {

var $j = jQuery.noConflict();

var obj = document.getElementsByClassName("rtac toggle-container tog-style4");
idnum = obj[0].id;

var idnum = idnum.replace(/rtac_milner_/g, "");


/*
$j.getJSON('./external/formURL.php', idnum, function(data) {
            console.log(data); //uncomment this for debug
            //alert (data.item+" "+data.item+" "+data.item); //further debug
            //$j('#output').html("<p>item1="+data.item+" item2="+data.item+" item3="+data.item+"</p>");
        });

*/


    $j.ajax({

        type: "GET",
        url: "./external/formURL.php",
        data: 'idnum=' + idnum,
        success: function(json){
        console.log(json);
        //var data = JSON.parse(json);
        var data = json;
        processResult(data);
        },
         error: function (jqXHR, textStatus, errorThrown) {
        console.log(jqXHR.responseText);
    }

    }); // Ajax Call

function processResult(data){       

     //console.log(data);

    /*
    $j.each(data, function(key1, value1) {
                console.log( "key" + key1[0] + ": " + "value" + value1.callnum);
        
    });
    */
    headhtml = '<div class="mapHeader">Find this Item</div>';
    $j(headhtml).appendTo("#output");

    $j.each(data, function() {
      $j.each(this, function(name, value) {
       // console.log(value.loc + value.callnumber + value.itemnum + value.itemavail);
        content = '<div class="mapItem">';
        content = '<p><strong>Location: </strong>' + value.loc + '</p>';
        content += '<p><strong>Call No: </strong>' + value.callnumber + '</p>';   
        content += '<p><strong>Status: </strong>' + value.itemavail + '</p>';    
        content += '<a href="external/getMap.php?callNum=' + value.callnumber + '&loc=' + value.loc + '">Show on a Map' + '</a>';
        content += '<hr />';

        content += '</div>';

      
     
      });
        $j(content).appendTo("#output");
     

    });
          


}    

}); //close doc ready


/*
<div class="rtac-panel border-p1">
                    <h3 class="rtac-panel-header bg-p1 color-s1">Holdings Information</h3>
                    <div class="rtac-panel-content">
                        <div class="circulation ">
                            <p><strong>Location:</strong> Floor 6 Special Collections: Building Use Only</p>
                            <p><strong>Call No.:</strong>  GV1803 .B78 2013</p>
                            <p><strong>Status:</strong> Available  </p>
                        </div>
                            <p><a href="http://eds.a.ebscohost.com.libproxy.lib.ilstu.edu/eds/detail/detail?vid=7&sid=6620fc3a-2577-45de-9630-97e7845def25%40sessionmgr4004&hid=4110&bdata=JnNpdGU9ZWRzLWxpdmUmc2NvcGU9c2l0ZQ%3d%3d#rtac_milner_1672714" class="rtac-show-more"><span class="icon"></span><span>More Copies</span></a></p>
                    </div>
                </div>

*/