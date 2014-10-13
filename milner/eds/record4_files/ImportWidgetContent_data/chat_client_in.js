var springSpace = springSpace || {};

var la_iid;
var la_top_options; 
var la_domain; 
var la_featured; 
var la_css; 
var la_noresults; 

(function(){


		var chat_div;
		var chat_load;
		
		libchat_inline = libchat_inline || {};

		//check jquery version up to second decimal
		//is the current version >= minimum version
		function minVersion(minv, curr) {
			curr = curr || window.jQuery.fn.jquery;
			c = curr.split('.');
			m = minv.split('.');
			
			if (c[0] > m[0]) { return true; }
			else if (c[0] < m[0]) { return false; }
			else {
				if (c[1] == undefined) { c[1] = 0; }
				if (c[1] > m[1]) { return true; }
				else if (c[1] < m[1]) { return false; }
				else { return true; }
			}
		}

		//get jquery + ui either from namespace, window, or by loading it
		if (typeof springSpace.jq == "undefined") {
			if (window.jQuery === undefined) {
				loadJquery();
			} else {
				if (minVersion('1.8', window.jQuery.fn.jquery)) {
					springSpace.jq = window.jQuery;
					loadChatVars();
				} else {
					loadJquery();
				}
			}

		} else {
			loadChatVars();
		}		
		
		//Load jQuery
		function loadJquery(){
			var script_tag = document.createElement('script');
			script_tag.setAttribute("type","text/javascript");
			script_tag.setAttribute("src",
				"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js");
			
			if (script_tag.readyState) { // for IE
				script_tag.onreadystatechange = function () {
					if (this.readyState == 'complete' || this.readyState == 'loaded') {
						scriptLoadHandler();
					}
				};
			} else {
				script_tag.onload = scriptLoadHandler;
			}
			
			(document.getElementsByTagName("head")[0] || document.documentElement).appendChild(script_tag);
		}		
		
		//Called once jQuery has loaded
		function scriptLoadHandler() {
			springSpace.jq = window.jQuery.noConflict(true);
			loadChatVars();
		}		
		
		//Load Chat variables/settings
		function loadChatVars(){
		
			if (typeof libchat_inline.iid == "undefined") { throw new Error("IID required!"); }
			if (typeof libchat_inline.domain == "undefined") { throw new Error("Domain not defined!"); }
			if (typeof libchat_inline.key == "undefined") { throw new Error("Key not defined!"); }
			
			libchat_inline = springSpace.jq.extend({
				splash: "Welcome to LibChat!",
				offline: "Ask Us",
				input_name: "Name:",
				input_name_default: "",
				input_guest: "Guest",				
				input_dept: "Select Department:",
				containerID: "libchat_inline_widget",
				enableSound: false,
				css: "//libchat.s3.amazonaws.com/chat_client_inline_iframe.css?v1.00",
				chatcss: "//libchat.s3.amazonaws.com/chati.css?v1.00",
				ladomain: 'libanswers.com', //Dev/Prod
				ops_left: "Thanks for chatting with us!",
				wait: "Please wait... A librarian will connect shortly!",
				joined: " has joined the chat",
				left: " has left the chat",
				typing: " is typing...",
				chat_button: "Chat!",
				sound_on: "Sound is On",
				sound_off: "Sound is Off",
				star_ratings: true,
				star_text: "Please rate this chat:",
				trans_prompt: "Enter an email address to send this chat transcript to:",
				error_offline: "Sorry it doesn't appear any librarians are online... Please try again later.",
				error_sess: "Error starting session.",
				error_send: "Error sending this message.",
				error_tran: "Error sending transcript.",
				depart_id: 0,
				width: "190px", //can be px or % - but only if la_hide = true (for Temple)
				height: "290px",
				la_hide: true,
				la_hide_msg: "Sorry, chat is offline. <br/><br/><a href='http://"+libchat_inline.domain+"'>Search the Knowledge Base or Submit your Question</a>",
				la_top_options: "0,12,0,0,130,80", 
				la_css: "1", 
				la_noresults: "",
				comments: "",
				question: "",
				color_backg: "#f9f9f9",
				color_border: "#eeeeee",
				color_heading: "#3278e0",
				color_button: "#FFFFFF"
				
			}, libchat_inline);
			
			main();			
		
        }
		
        
        function main() {	
			
			if(document.createStyleSheet) {
				try { document.createStyleSheet(libchat_inline.css); } catch (e) { }
			}
			else {
				var css_tag = document.createElement("link");
				css_tag.setAttribute("rel", "stylesheet");
				css_tag.setAttribute("type", "text/css");
				css_tag.setAttribute("href", libchat_inline.css);
				(document.getElementsByTagName("head")[0] || document.documentElement).appendChild(css_tag);
			}			
			
			
			chat_div = springSpace.jq('#'+libchat_inline.containerID);
			chat_div.html('<div id="lci_chat_load" class="lci_chat_load"></div>');
			chat_load = springSpace.jq('#lci_chat_load');
			chat_load.css({'width': libchat_inline.width, 'height': libchat_inline.height, 'background-color': libchat_inline.color_backg});
			
			//Get Status
			springSpace.jq.ajax({
				url : '//'+libchat_inline.ladomain+'/chat_client_status.php',
				dataType : "jsonp",
				data: { d: libchat_inline.depart_id, iid: libchat_inline.iid },
				success : function(data) {
					(data.status) ? showChat() : showLA(); 
				},
				error : function() { showLA();  }
			});
			
		}//end main

		function showLA(){
			
			if(libchat_inline.la_hide){
				
				var offline_code =''+
				'<div class="lci_off_cont">'+
				'<h3 class="lci_h3">'+libchat_inline.offline + '</h3>'+
				'<div class="lci_offlinemsg">'+libchat_inline.la_hide_msg + '</div>'+
				'</div>';
				chat_load.html(offline_code);

				//Colors lci_chat_load
				springSpace.jq('.lci_h3').css('color',libchat_inline.color_heading);				
				springSpace.jq('.lci_chat_load').css('border-color',libchat_inline.color_border);
			}else{
					
				la_iid = libchat_inline.iid;
				la_domain = libchat_inline.domain;
				la_top_options = libchat_inline.la_top_options;
				la_css = libchat_inline.la_css;
				la_noresults = libchat_inline.la_noresults;
			
				var script_tag = document.createElement('script');
				script_tag.setAttribute("type", "text/javascript");
				script_tag.setAttribute("src", "//libanswers.com/js/widget.min.js");
				
				if (script_tag.readyState) { // for IE
					script_tag.onreadystatechange = function () {
						if (this.readyState == 'complete' || this.readyState == 'loaded') {
							renderLA();
						}
					};
				} else {
					script_tag.onload = renderLA;
				}
				(document.getElementsByTagName("head")[0] || document.documentElement).appendChild(script_tag);
					
			}	

		}
		function renderLA(){
		
				var LA_code =''+
				'<style>#la_widget { width: '+ (parseInt(libchat_inline.width, 10) - 6) +'px!important; border: none; } '+
				'#la_widget #la_qentry { width: '+ (parseInt(libchat_inline.width, 10) - 68) +'px; } '+
				'#la_widget #la_topselect { width: '+ (parseInt(libchat_inline.width, 10) - 68) +'px; } </style>'+
				'<div id="la_widget">'+
				'<h3 class="lci_h3">'+libchat_inline.offline + '</h3>'+
				'<form method="post" name="la_qform" id="la_qform" action="http://'+libchat_inline.domain+'/search.php" style="display:inline; margin:0; padding:0;">'+
				'<input type="hidden" name="iid" value="'+libchat_inline.iid+'" />'+
				'<input type="hidden" name="src" value="4" />'+
				'<label for="la_qentry" class="sreader_hide">Ask a Question: </label>'+
				'<div class="ui-widget">'+
				'<input id="la_qentry" name="question" value=""/>'+
				'<button id="la_qformbutton" type="submit" title="Ask Us">Ask</button>'+
				'</div>'+
				'</form>'+
				'<div id="la_topdiv"><span id="la_topintro">Or browse by topic:</span></div>'+
				'</div>';
				chat_load.html(LA_code);

				//Colors
				springSpace.jq('.lci_h3').css('color',libchat_inline.color_heading);
				springSpace.jq('.lci_chat_load').css('border-color',libchat_inline.color_border);				
		
		}

			
		function showChat(){
		
				//iframe querystring
				var qs = 'k='+libchat_inline.key+'&w=2&d='+libchat_inline.depart_id+'&i='+libchat_inline.iid+'&r='+encodeURIComponent(document.URL);
				if(libchat_inline.splash != "Welcome to LibChat!"){ qs = qs+'&t='+ encodeURIComponent(libchat_inline.splash);  }
				if(libchat_inline.input_name != "Name:"){ qs = qs+'&nl='+ encodeURIComponent(libchat_inline.input_name);  }
				if(libchat_inline.input_name_default != ""){ qs = qs+'&nd='+ encodeURIComponent(libchat_inline.input_name_default);  }
				if(libchat_inline.input_guest != "Guest"){ qs = qs+'&gl='+ encodeURIComponent(libchat_inline.input_guest);  }
				if(libchat_inline.input_dept != "Select Department:"){ qs = qs+'&dl='+ encodeURIComponent(libchat_inline.input_dept);  }
				if(libchat_inline.enableSound === true){ qs = qs+'&s=1';  }
				if(libchat_inline.chatcss != "//libchat.s3.amazonaws.com/chati.css?v1.00"){ qs = qs+'&css='+ encodeURIComponent(libchat_inline.chatcss);  }
				if(libchat_inline.ops_left != "Thanks for chatting with us!"){ qs = qs+'&ol='+ encodeURIComponent(libchat_inline.ops_left);  }
				if(libchat_inline.wait != "Please wait... A librarian will connect shortly!"){ qs = qs+'&cw='+ encodeURIComponent(libchat_inline.wait);  }
				if(libchat_inline.joined != " has joined the chat"){ qs = qs+'&cj='+ encodeURIComponent(libchat_inline.joined);  }
				if(libchat_inline.left != " has left the chat"){ qs = qs+'&cl='+ encodeURIComponent(libchat_inline.left);  }
				if(libchat_inline.typing != " is typing..."){ qs = qs+'&ct='+ encodeURIComponent(libchat_inline.typing);  }
				if(libchat_inline.chat_button != "Chat!"){ qs = qs+'&cb='+ encodeURIComponent(libchat_inline.chat_button);  }
				if(libchat_inline.sound_on != "Sound is On"){ qs = qs+'&so='+ encodeURIComponent(libchat_inline.sound_on);  }
				if(libchat_inline.sound_off != "Sound is Off"){ qs = qs+'&sf='+ encodeURIComponent(libchat_inline.sound_off);  }
				if(libchat_inline.star_ratings === false){ qs = qs+'&sr=0';  }
				if(libchat_inline.star_text != "Please rate this chat:"){ qs = qs+'&st='+ encodeURIComponent(libchat_inline.star_text);  }
				if(libchat_inline.trans_prompt != "Enter an email address to send this chat transcript to:"){ qs = qs+'&tp='+ encodeURIComponent(libchat_inline.trans_prompt);  }
				if(libchat_inline.error_offline != "Sorry it doesn't appear any librarians are online... Please try again later."){ qs = qs+'&eo='+ encodeURIComponent(libchat_inline.error_offline);  }
				if(libchat_inline.error_sess != "Error starting session."){ qs = qs+'&es='+ encodeURIComponent(libchat_inline.error_sess);  }
				if(libchat_inline.error_send != "Error sending this message."){ qs = qs+'&ed='+ encodeURIComponent(libchat_inline.error_send);  }
				if(libchat_inline.error_tran != "Error sending transcript."){ qs = qs+'&et='+ encodeURIComponent(libchat_inline.error_tran);  }
				if(libchat_inline.comments != ""){ qs = qs+'&com='+ encodeURIComponent(libchat_inline.comments);  }
				if(libchat_inline.question != ""){ qs = qs+'&iq='+ encodeURIComponent(libchat_inline.question);  }
				if(libchat_inline.color_backg != "#f9f9f9"){ qs = qs+'&cbg='+ encodeURIComponent(libchat_inline.color_backg);  }
				if(libchat_inline.color_border != "#eeeeee"){ qs = qs+'&cbb='+ encodeURIComponent(libchat_inline.color_border);  }
				if(libchat_inline.color_heading != "#3278e0"){ qs = qs+'&chd='+ encodeURIComponent(libchat_inline.color_heading);  }
				if(libchat_inline.color_button != "#FFFFFF"){ qs = qs+'&cbt='+ encodeURIComponent(libchat_inline.color_button);  }		
				if(libchat_inline.file_upload === false){ qs = qs+'&fu=0';  }		
				
				//Chat HTML
				var chat_html =''+
				'<iframe src="'+window.location.protocol+'//'+libchat_inline.ladomain+'/chati.php?'+qs+'" width="'+libchat_inline.width+'" height="'+parseInt(libchat_inline.height,10)+'" frameborder="0" scrolling="no"></iframe>';					
				chat_load.html(chat_html);
				
				//colors
				springSpace.jq('.lci_chat_load').css('border-color',libchat_inline.color_border);
		
		}//end showchat

				
})(); //end anonymous function