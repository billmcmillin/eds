ep.registerInstance("ep.controller.CustomWidgetController","ep.base.Controller",{onDomLoad:function(){this.setCustomWidgetsEvents();var b="a[href='#related_information_widget_other_formats_and_editions']";jQuery(b).live("click",function(){jQuery("#otherFormatsEditions").parent().prev().trigger("click");jQuery(b).die()})},setCustomWidgetsEvents:function(){ep.require("ep/controller/search.js");var b=jQuery("#content").find(".custom-widget");b.each(jQuery.proxy(function(a,d){if(jQuery(d).find(".collapse-toggle.active").length){this.populateCustomWidget(jQuery(d).find(".collapse-content")[0]);return true}this.widgetBinder(d)},this));jQuery(".custom-widget").delegate(".findTitleLink","click",function(){ep.clientData.SetupSearchCriteria.SearchTerm=jQuery(this).data("search");ep.publish("ep.invokesearch",ep.clientData.SetupSearchCriteria)})},widgetBinder:function(c){var d=jQuery(c).find(".collapse-content");d.bind("toggled",jQuery.proxy(function(){this.populateCustomWidget(d);jQuery(d).unbind("toggled")},this))},populateCustomWidget:function(h){var f=jQuery(h).find(".widget_url").first();var g=jQuery(h).find(".widget_height").first();f=f.length?f.val():null;g=g.length?g.val():200;if(f){var e='<iframe src="'+f+'" height="'+g+'" width="100%" noresize="noresize" frameborder="no"></iframe>';jQuery(h).html(e)}jQuery(h).find(".toggle-icon").remove();jQuery(h).find(".toggle-text").html("Check Availability")}});