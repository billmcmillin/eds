//LibChat bootstrap file
var head = document.getElementsByTagName('head')[0];
var script = document.createElement('script');
script.type = 'text/javascript';
script.src = '//libchat.s3.amazonaws.com/chat_client_in.js?v2.05';
// script.src = '//libchat.s3.amazonaws.com/chat_client_in_min.js?v2.05';
// script.src = '//chris.springyaws.com/libchat_s3/chat_client_in_min.js?v2.05';
head.appendChild(script);
