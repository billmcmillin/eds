var ep = window.ep || {}; ep.bundles = ep.bundles || []; ep.bundles = ep.bundles.concat('bundled/eds/page/detail.js','ep/controller/control/imagequickview.js', 'ep/eprecordpreviewhover.js', 'ep/widgets/eppanel.js', 'ep/util/form.js', 'ep/controller/page/citationcontroller.js', 'ep/controller/control/foldertool.js', 'ep/controller/control/bookjackets.js');
ep.register("ep.controller.control.ImageQuickView",function(k){var h=function(a){ep.debug("ep.controller.control.ImageQuickView.onIQVLinkClick");a.preventDefault();var b=k(a.target).data("iqvargs");if(b){m(ep.controller.control.ImageQuickView.thumbnailType,b)}};function l(a){ep.debug("ep.controller.control.ImageQuickView.setEvents");var b=k("a[id^='linkQuikView']");if(b.length){if(a){b.unbind()}else{b.click(h)}}}function j(c,b){ep.debug("ep.controller.control.ImageQuickView.setAjaxActivity");var a=k("#ajaxActivity_"+b);if(a.length){a.css({display:(c)?"inline":"none"})}}function m(b,c){ep.debug("ep.controller.control.ImageQuickView.getThumbnails");var a=c.itemId;var e=("tContainer2_"+a);j(true,a);if(k("#"+e).is(":empty")){var d={theThumbnailType:b,SearchTerm:c.searchTerm,DB:c.db,ParentUI:c.an,Tag:c.tag,theSearchData:c.searchData};var f=ep.utilities.buildAjaxRequestPath("ImageQuickView/GetThumbnails");k.ajax({type:"POST",url:f,data:d,context:this,success:function(g){n(e,g)}})}else{n(e)}}function n(b,a){ep.debug("ep.controller.control.ImageQuickView.processThumbnailData");var e=k("#"+b);var c=b.split("_")[1];var f=k("#linkQuikView11_"+c);var d=k("#linkQuikView21_"+c);var g=k("#linkQuikView22_"+c);if(e.is(":visible")){e.hide();f.css({display:"inline"});d.css({display:"none"});g.parent().css({display:"none"})}else{e.show();f.css({display:"none"});d.css({display:"inline"});g.parent().css({display:"inline"})}if(e.is(":empty")){e.html(a)}j(false,c)}function i(){ep.debug("ep.controller.control.ImageQuickView.Initialize");ep.getInstance("ep.utilities");l(false);k(window).unload(k.proxy(function(){l(true)},this))}ep.domLoad(i)}(jQuery));(function(b){ep.dialog.RecordPreview=function(){var v={};function t(e){var d=jQuery(".json-data",e);if(!d.length){return null}var c=jQuery.parseJSON(d[0].firstChild.nodeValue);c.theHoverElement=e;return r(c,null,true)}function s(f){var l=null;var c=f+1;var h="";var g=jQuery("#hoverPreview"+c).data("hoverpreviewjson");if(g){var j=null;if(g.resultListId||g.archiveNoteItemId){j=ep.utilities.buildAjaxRequestPath("Detail/HoverPreview");h=g.resultListId}else{if(g.db&&g.tag&&g.term){j=ep.utilities.buildAjaxRequestPath("Detail/HoverPreview",{Db:g.db,Tag:g.tag,Term:g.term})}}var e=jQuery("#hoverPreview"+c).parent().parent("ol").hasClass("related-info-list");var i=jQuery("#hoverPreview"+c).attr("targetid");var k=jQuery("#hoverPreview"+c).data("reasontext");var d={theIsRelatedInfo:e,theTargetId:i,theResultListId:h,isNovList:g.isNovList};if(g.archiveNoteItemId){d.theArchiveNoteItemId=g.archiveNoteItemId}if(g.isNote){d.theIsNote=g.isNote}jQuery.ajax({url:j,data:d,async:false,success:function(x){l=r(x,f,k)}})}return l}function r(j,g,y){var z="";z+="<dl class=\"preview-detail\" data-auto='preview_detail'>";var i;var h;var f;if(j.IgnoreProperties){i="Title";h=j.DisplayValues[i];f=i;z+="<dt data-auto='preview_detail_title_hidden'";z+=' class="hidden"';z+=">"+f+":</dt><dd";z+=" data-auto='preview_detail_title' class=\"title-link\"";if(false){z+='href="'+b(j.theHoverElement).parent().find("a").attr("href")+'"'}else{z+='href="#"'}z+=">"+u(j,h,b(j.theHoverElement).parent().find("a").attr("href"))+"</dd>";j.IgnoreProperties.push("Title")}if(y){j.DisplayValues.Reason=y+j.RecommendationFeedbackTag}for(i in j.DisplayValues){if(typeof j.DisplayValues[i]!=="function"){if(a(j.IgnoreProperties,i)){continue}h=j.DisplayValues[i];if(h&&h.length>0){f=i;if(_.isArray(h)){h=o(h)}if(ep.clientData.hoverPreviewLabelData[i]){f=ep.clientData.hoverPreviewLabelData[i]}z+="<dt data-auto='preview_detail_info_label'";if(i==="Title"){z+=' class="hidden"'}z+=">"+f+":</dt><dd data-auto='preview_detail_info_value'";if(i==="Title"){z+=' class="title-link"';z+=">"+u(j,h)+"</dd>"}else{z+=">"+h+"</dd>"}}}}z+="</dl>";if(j.HeaderLinks||j.FooterLinks){z+="<div class=\"hover-links\" data-auto='preview_detail_links'>"}var l=j.HeaderLinks;if(l&&l.length>0&&j.TargetId){for(var d=0;d<l.length;d++){z+=n(j.TargetId,l[d])}}else{if(j.ResultListIndex){z+=q(j.ResultListIndex)}}if(ep.dialog.RecordPreview.isShowFolderLink){z+=m(g,j)}var c=j.FooterLinks;if(c&&c.length>0&&j.TargetId){for(var e=0;e<c.length;e++){z+=n(j.TargetId,c[e])}}else{if(j.ResultListIndex){z+=p(j.ResultListIndex,"record-type format-citation",ep.clientData.hoverPreviewLabelData.FullCitation);var k=document.getElementById("externalLinks"+j.ResultListIndex);if(k&&k.innerHTML&&k.innerHTML.length>0){z+='<div class="hover-external-links" data-auto="preview_detail_external_links">'+k.innerHTML+"</div>"}}}z+="</div>";if(ep.isPageRTL()){z=ep.utilities.bidiSanitizeContent(z)}return z}function u(h,i,e){if(h.ResultListIndex){return p(h.ResultListIndex,"",i)}else{if(h.FooterLinks){var d=h.FooterLinks;if(d&&d.length>0&&h.TargetId){for(var f=0;f<d.length;f++){if(d[f].Args==="Citation"||d[f].Text==="Retrieve Item"){var g=jQuery.extend({},d[f]);g.CssClass="";g.Text=i;return n(h.TargetId,g)}}}return null}else{var c="";if(e){c+='<a href="'+e+"\" data-auto='title_link'>"+i+"<a/>"}else{c=i}return c}}}function o(d){var c=d[0];b.each(d,function(f,e){if(f>0){c+="; "+e}});return c}function a(d,c){if(!d){return false}return _.indexOf(d,c)>-1}function m(g,c){var h="hover-add-folder";var e=ep.clientData.hoverPreviewLabelData.AddToFolder;var f=!c.RecordHasEISExtLink?ep.clientData.hoverPreviewLabelData.AddToFolderTitle:ep.clientData.hoverPreviewLabelData.AddExternalRecToFolder;var i=false;if(c.ResultListIndex){var j=document.getElementById("add_"+c.ResultListIndex);if(j&&j.style.display==="none"){i=true}}else{i=c.IsInFolder}if(i){h="hover-remove-folder";if(ep.dialog.isShowAddFolderPopup){e=ep.clientData.hoverPreviewLabelData.AddRemoveToFolder;f=ep.clientData.hoverPreviewLabelData.AddRemoveToFolderTitle}else{e=ep.clientData.hoverPreviewLabelData.RemoveFromFolder;f=!c.RecordHasEISExtLink?ep.clientData.hoverPreviewLabelData.RemoveFromFolderTitle:ep.clientData.hoverPreviewLabelData.RemoveExternalRecFromFolder}}var d="";if((window.location.href.indexOf("/folder?")<0)&&(!c.NoteContentType)){if(ep.dialog.isShowAddFolderPopup){d+='<a data-auto="hover_folder_link" class="{cssclass}" id="hover_folder" href="#" onclick="ep.dialog.RecordPreview.showFolderPopup(event, {dataIndex})" title="{titleText}"><span data-auto="hover_folder_icon" class="icon"></span>{text}</a>'}else{d+='<a data-auto="hover_folder_link" class="{cssclass}" id="hover_folder" href="#" onclick="return ep.dialog.RecordPreview.toggleHoverFolderLink(this,{dataIndex},{rlindex},{RecordHasEISExtLink});" title="{titleText}"><span data-auto="hover_folder_icon" class="icon"></span>{text}</a>';d=d.replace(/\{rlindex\}/g,c.ResultListIndex?c.ResultListIndex.toString():"null")}d=d.replace(/\{dataIndex\}/,g.toString());d=d.replace(/\{RecordHasEISExtLink\}/,c.RecordHasEISExtLink);d=d.replace(/\{cssclass\}/,h);d=d.replace(/\{text\}/g,e);d=d.replace(/\{titleText\}/g,f)}else{d+='<span data-auto="hover_remove_folder_icon" class="hover-remove-folder"><span class="icon"></span>';d+=ep.clientData.hoverPreviewLabelData.FolderItem;d+="</span>";d=d.replace(/\{text\}/,e);d=d.replace(/\{titleText\}/,f)}return d}function n(c,d){var e="<a data-auto='hover_link' href=\"";if(d.DoPostBack===true){e+="javascript";e+=":__doPostBack('";e+=c;e+="','"+d.Args+"');"}else{if(d.Args.indexOf("url=http")>-1){e+=d.Args;e+='" target="_blank'}else{e+=d.Args+'"'}}if(d.CssClass&&d.CssClass.length>0){e+='" class="'+d.CssClass}e+='">'+d.Text;e+="</a>";return e}function p(f,e,d){var g=document.getElementById("Result_"+f);var c;if(g){if(g.getAttributeNode("onclick")===null){c="<a data-auto='citation_link' href=\""+g.getAttribute("data-href")+'" onclick="'+g.getAttributeNode("data-onclick").nodeValue}else{c="<a data-auto='citation_link' href=\""+g.getAttribute("href")+'" onclick="'+g.getAttributeNode("onclick").nodeValue}c+='" class="'+e+'">'+d+"</a>"}return c}function q(f){var c="";var g=jQuery("#formats"+f);if(g.length){var h=jQuery(g).clone();if(jQuery.trim(h.html())===""){var d=jQuery("#htmlft"+f);if(d&&d.length){h.append(d[0].outerHTML)}var e=jQuery("#pdfft"+f);if(e&&e.length){h.append(e[0].outerHTML)}}h.find("[id*='Download']").remove();h.find("[class*='requires-wma']").remove();h.find("[class*='audio-clip']").remove();c+=h.html()}return c}return{initPreviewHovers:function(f,d){ep.dialog.RecordPreview.isShowFolderLink=f;var e=jQuery('[id^="hoverPreview"]').length;for(var g=0;g<e;g++){var h="hoverPreview"+(g+1);var c=document.getElementById(h);if(c){ep.dialog.HoverPopup.addHover(h,g,s,d)}}},addSelfContainedRecordPreview:function(c,d){if(!v[c.id]){ep.dialog.HoverPopup.addHover(c,c,t,d)}v[c.id]=true},showFolderPopup:function(e,d){e.preventDefault();var i=d+1;var h=jQuery("#hoverPreview"+i).data("hoverpreviewjson");if(h){var g=false;var c=i?i:"";var f=jQuery("#add_"+c);if(f.length&&f.css("display")!=="none"){g=true}ep.controller.control.AddToFolderPopup.showAddToFolderPopup(e,{theResultId:c,theIsResultList:true,theIsResultHover:true,theIsToggleIcon:g})}},toggleHoverFolderLink:function(e,d,g,h){var i=d+1;var c=jQuery("#hoverPreview"+i).data("hoverpreviewjson");if(c){var j=e.className==="hover-add-folder";if(g!==null){ep.folder.toggleFolderItem(g,j)}else{if(c){var f=ep.utilities.buildAjaxRequestPath("Folder/SetRouteKeyFolderJson",{Db:c.db,Tag:c.tag,Term:c.term});jQuery.ajax({url:f,async:false,success:function(k){ep.folder.toggleFolderItem(g,j,k)}})}}if(j){e.title=!h?ep.clientData.hoverPreviewLabelData.RemoveFromFolderTitle:ep.clientData.hoverPreviewLabelData.RemoveExternalRecFromFolder;e.innerHTML='<span class="icon" data-auto="hover_folder_icon"></span>'+ep.clientData.hoverPreviewLabelData.RemoveFromFolder;e.className="hover-remove-folder";c.IsInFolder=true}else{e.title=!h?ep.clientData.hoverPreviewLabelData.AddToFolderTitle:ep.clientData.hoverPreviewLabelData.AddExternalRecToFolder;e.innerHTML='<span class="icon" data-auto="hover_folder_icon"></span>'+ep.clientData.hoverPreviewLabelData.AddToFolder;e.className="hover-add-folder";c.IsInFolder=false}}return false}}}()})(jQuery);(function(b){b.widget("ui.eppanel",{options:{Panel:"#ToolPanelContent",Id:"",Url:"",Js:""},_eventNamespace:"",_panel:{},_isOpen:false,_isInProg:false,_panelUrl:"",_create:function(){ep.debug("eppanel:create");this._setNamespace();this._panel=b(this.options.Panel);var a=this;this._panel.bind("click"+this._eventNamespace,function(d){a._clickHandler(d)});this._panel.bind("panelReady"+this._eventNamespace,function(e,f){if(f!==a.options.Id){ep.debug("trigger: panelOnClose - "+a.options.Id);a._panel.trigger("panelOnClose",a.options.Id);a.destroy()}else{ep.debug("No longer in progress "+a.options.Id);a._inProg=false}});this._panel.bind("panelClose"+this._eventNamespace,function(e,f){if(f===a.options.Id){a._close()}})},_setNamespace:function(){if(this.options.Id&&this.options.Id.length>0){this._eventNamespace=".eppanel-"+this.options.Id}else{this._eventNamespace=".eppanel-"+Math.floor(Math.random()*1001)}},_init:function(){if(this._isOpen){ep.debug("trigger: panelOnClose - "+this.options.Id);this._panel.trigger("panelOnClose",this.options.Id);this._close()}else{this._open()}},_open:function(){ep.debug("eppanel:open "+this.options.Id);if(!this._isInProg){this._isInProg=true;this.element.parent().addClass("active bg-p2");this._setPanelUrl();this._getContent()}},_close:function(){ep.debug("eppanel:close "+this.options.Id);if(this._isOpen){this._panel.hide();this._panel.resize();this.destroy();this._isOpen=false}},destroy:function(){ep.debug("eppanel:destroy "+this.options.Id);this.element.parent().removeClass("active bg-p2");b(document).unbind(this._eventNamespace);this._panel.unbind(this._eventNamespace);b.Widget.prototype.destroy.call(this)},_clickHandler:function(d){var a=b(d.target);if(a.hasClass("close-panel")){this._close()}},_setPanelUrl:function(){if(this.options.Url.indexOf("?")!==-1){var a=ep.utilities.buildRouteKey(ep.clientData.currentRecord.Db,ep.clientData.currentRecord.Term,ep.clientData.currentRecord.Tag);this._panelUrl=this.options.Url+"&recordKey="+a;if(ep.newReturnUrl){this._panelUrl+="&ReturnUrl="+encodeURIComponent(ep.newReturnUrl)}}else{this._panelUrl=ep.utilities.buildAjaxRequestPathWithNewReturn(this.options.Url,ep.clientData.currentRecord)}},_getContent:function(){var a=this;b.ajax({url:this._panelUrl,dataType:"html",success:function(d){a._updatePanel(d);a._loadJs();a._notify();a._panel.find(":tabbable").first().focus();a._isOpen=true}})},_doEmptyWrapper:function(){var a=this._panel.children(".wrapper");if(a.children().length){a.empty()}},_updatePanel:function(d){var a=this._panel.children(".wrapper");this._doEmptyWrapper();a.append(d);if(ep.isPageRTL()){ep.utilities.bidiSanitizeContent(a.get(0))}this._panel.show();this._panel.find("a.close-panel").show();this._panel.resize()},_loadJs:function(){if(this.options.Js&&this.options.Js!==""){ep.require(this.options.Js)}},_notify:function(){ep.debug("trigger: panelReady - "+this.options.Id);this._panel.trigger("panelReady",this.options.Id)}});b(function(){b(document).delegate("[data-panel]","click",function(e){var f=b(e.currentTarget);var a=f.data("panel");f.eppanel(a);e.preventDefault();return false})})})(jQuery);(function(k){var h=function(a){var d=k(a).data("form").action;if(d){var e=k("<form>",{action:ep.utilities.replaceEPCommand(d),method:"POST"});var c=k("*",a).serializeArray();k.each(c,function(n,f){e.append(k("<input>",{type:"hidden",name:f.name,value:f.value}))});var b=k(a).data("inputs");if(b){k.each(b,function(n,f){e.append(k("<input>",{type:"hidden",name:n,value:f}))})}k("body").append(e);e[0].submit()}},i=13,l=32,j=1,g=0;k("[data-form]").live("click keydown",function(q){var r=q.which,b=false,c=k(this),s=c.data("form");if(q.target.type==="submit"||q.target.type==="button"||q.target.type==="image"){var f=k(q.target).data("default-textbox"),a;if(f){a=k(this).find("#"+f).val()}if(s.allowFormSubmit||((s.allowEmptySubmit||a!=="")&&(r===i||r===j||r===g))){b=true}}if(q.target.type==="text"){if(q.type==="keydown"&&r===i){if(s.allowEmptySubmit||q.target.value!==""&&r===i){b=true}}}if(b){if(s.checkResultsBeforeSubmit){var t={},d=k("*",this).serializeArray(),e=k(c).data("inputs");k.each(d,function(n,m){t[m.name]=m.value});if(e){k.each(e,function(n,m){t[n]=m})}k.ajax({url:ep.utilities.buildAjaxRequestPath(s.checkResultsUrl),type:"POST",data:ep.util.JSON.stringify(t),contentType:"application/json; charset=utf-8",dataType:"html",success:function(m){var n=c.siblings("[data-no-results]");if(m!==""){if(!n.length){c.after(k('<div data-no-results=""></div>').html(m))}}else{if(n.length){n.remove()}h(c,q)}},error:function(m){}})}else{h(c,q)}q.preventDefault();return false}})})(jQuery);ep.registerInstance("ep.controller.page.CitationController","ep.base.PageController",{onDomLoad:function(){this.initControls();this.setEvents()},onLoad:function(){_.defer(ep.loadImages)},initControls:function(){var b=jQuery("a[id^='linkQuikView']");if(b.length){ep.getInstance({epId:"ep.controller.control.ImageQuickView",thumbnailType:"THUMB_LARGE"})}if(jQuery("#column1").length){ep.getInstance({epId:"ep.controller.CollapsibleController",page:"citation"})}if(jQuery(".custom-widget").length){ep.getInstance({epId:"ep.controller.CustomWidgetController",page:"citation"});ep.getInstance({epId:"ep.controller.control.BookRelatedInformationController",page:"citation"});if(jQuery("body").hasClass("guest")){ep.getInstance({epId:"ep.controller.GuestLoginController",restrictedElements:[]})}}if(jQuery("#addThis").length&&ep.clientData.addThis){ep.require(ep.clientData.addThis.widgetUrl,function(){setTimeout(function(){addthis.init()},500)})}if(jQuery("html").attr("dir")==="rtl"){jQuery("#citationFields dd").bidi()}},setEvents:function(){this.setAddToFolderPopupEvents();this.setElementsVisibility();jQuery("#collapseall, #expandall").bind("click",function(){jQuery(".collapse-toggle").trigger("click",(this.id==="expandall"));return false});jQuery("#Subsidiaries").parent().next().bind("toggled",this.subsidiariesSectionLinkClick)},setElementsVisibility:function(){if(!jQuery("#widgetsAnchor").length&&jQuery("#widgetLink").length){jQuery("#widgetLink").hide()}},setAddToFolderPopupEvents:function(){if(ep.clientData.isShowAddFolderPopup){jQuery(".folder-delivery-item button").each(jQuery.proxy(function(c,d){d.click(jQuery.proxy(this.addToFolderPopupLinkClick,this))},this))}},addToFolderPopupLinkClick:function(c){var d=ep.getInstance({epId:"ep.controller.control.AddToFolderPopup",params:{theClickEvent:c,theIsDetail:true,isExternalCitation:ep.clientData.isExternalCitation,theRecordDetails:ep.clientData.theRecordDetails}});if(d){d.showAddToFolderPopup(c)}return false},subsidiariesSectionLinkClick:function(d){ep.require("_layout2/companyresults.css");var e=jQuery("#Subsidiaries");e.addClass("loading");jQuery.ajax({url:ep.utilities.getBaseRequestPath()+e.attr("href"),context:d.target,success:function f(c){e.removeClass("loading").unbind("click").parent().next().unbind("toggled").attr({href:"#"});var a=jQuery(this).find("table tbody"),b=jQuery(c);a.attr("aria-expanded","true").append(b);ep.getInstance("ep.controller.control.companyInfoResults",function(){ep.controller.control.companyInfoResults.init()})}});return false}});(function(b){b(function(){if(ep.clientData.isShowAddFolderPopup){ep.require("ep.controller.control.AddToFolderPopup")}b("[data-folder]").click(function(f){var a=b(f.target);var e=a.data("folder");if(ep.clientData.isShowAddFolderPopup){ep.controller.control.AddToFolderPopup.showAddToFolderPopup(f,{theIsDetail:true,isExternalCitation:ep.clientData.isExternalCitation,theRecordDetails:ep.clientData.theRecordDetails,theIsToggleIcon:true})}else{if(a.hasClass("cit-folder-control")){ep.folder.toggleFolderItem(null,false,e,false);a.removeClass("cit-folder-control");a.attr("title",ep.messages.Add_to_folder);a.text(ep.messages.Add_to_folder)}else{ep.folder.toggleFolderItem(null,true,e,false);a.addClass("cit-folder-control");a.attr("title",ep.messages.Remove_from_folder);a.text(ep.messages.Remove_from_folder)}}return false})})})(jQuery);ep.register("ep.controller.control.BookJackets");ep.controller.control.BookJackets=(function(h){function e(c,a){var b=h(a);var d=b.data("book-jacket");if(d&&d.ThumbImageUrl&&d.ThumbImageUrl.length>0){h("<img />").load(function(){if(this.width>1||this.naturalWidth>1){b.prepend(h(this));h(this).wrapAll('<span class="bj-img"></span>');b.removeClass();if(d.Type===3){b.addClass("book-jacket-series")}else{b.addClass("book-jacket")}}else{h(this).remove()}}).attr({src:d.ThumbImageUrl,alt:d.ToolTip})}}function g(c,a){var b=h(a);var d=b.data("book-jacket");if(d&&d.ThumbImageUrl&&d.ThumbImageUrl.length>0){h("<img />").load(function(){if(this.width>1||this.naturalWidth>1){b.prepend(h(this));h(".pubtype-icon",b).remove();if(h.browser.msie){h(this).removeAttr("height").removeAttr("width")}h(this).attr("width","60px");b.removeClass("pubtype");if(d.Type===3){b.addClass("book-jacket-series")}else{b.addClass("book-jacket")}}else{h(this).remove()}}).attr({src:d.ThumbImageUrl,alt:d.ToolTip})}}function f(c,a){var b=h(a);var d=b.data("book-jacket");if(d&&d.ThumbImageUrl&&d.ThumbImageUrl.length>0){h("<img />").load(function(){if(this.width>1||this.naturalWidth>1){b.prepend(h(this));if(d.DetailImageUrl!==null&&h.trim(d.DetailImageUrl).length>0){h(this).wrapAll('<a href="'+d.DetailImageUrl+'" target="_blank"></a>')}if(h.browser.msie){h(this).removeAttr("height").removeAttr("width")}}else{h(this).remove()}}).attr({src:d.ThumbImageUrl,alt:d.ToolTip})}}return{loadResultBookJacketForMobile:function(a){h(a).find(".mobile-jacket[data-book-jacket]").each(e)},loadResultBookJacket:function(){h(".record-icon[data-book-jacket]").each(g)},loadDetailBookJacket:function(){h("#bookJacket[data-book-jacket]").each(f)},loadMobileResultBookJacket:function(){h(".mobile-jacket[data-book-jacket]").each(e)}}})(jQuery);(function(b){b(function(){ep.controller.control.BookJackets.loadDetailBookJacket();ep.controller.control.BookJackets.loadResultBookJacket();ep.controller.control.BookJackets.loadMobileResultBookJacket()})})(jQuery);