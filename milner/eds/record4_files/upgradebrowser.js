(function(f){function d(){var a=f("[data-mobilesitelink='true']");if(a.length>0){a.bind("click",function(b){e(b)})}}function e(a){if(f.browser.msie&&parseInt(f.browser.version,10)<8){f(a.target).epmodal({url:"UpgradeBrowser/MobileSite",data:{theUrl:a.currentTarget.href}});a.preventDefault()}}f(d)})(jQuery);