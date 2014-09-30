

var obj = document.getElementsByClassName("rtac toggle-container tog-style4");
idnum = obj[0].id;

var idnum = idnum.replace(/rtac_milner_/g, "");
var str2 = "http://vufind.carli.illinois.edu/vf-isu/Record/AJAX?method=GetHoldings&id=isu_"
var res = str2.concat(idnum);
var lox ="http://billmcmillin.com/milner/eds/external/getHoldings.php"
console.log(res);
function  myajaxcall_get(myURL){     
$.ajax({ 
        url: myURL,
        cache: false,            
        type : "GET",            
        data: {idnum},
        dataType: 'json',
        success: function(response)
        {
            console.log(response);    
        }
  });
}

myajaxcall_get(lox);

/*
var text = $('.record-has-rtac').text();
var comparingText = 'rtac_milner_'
if(text == comparingText){
// $('#OTHER_DIV').css('display','none'); 
 alert(jQuery('.record-has-rtac').length + ' elements!');

 }; 
</script>
jQuery(document).ready(function() {
	jQuery('<div>A new paragraph!</div>').addClass('hide_maps').insertBefore('#similarArticleControl');
});

/*

jQuery(document).ready(function() {
 alert(jQuery('#relatedInfoLinks').length + ' elements!');
});

*/