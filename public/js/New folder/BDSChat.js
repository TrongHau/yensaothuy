var chatServerUrl="";var senderId="";var senderName="";var productId=0;var chatPK="";var userChatInfo=null;var supportUserOnline=new Array();var senderGender=0;var badWordRegex=/(^|\W)(mẹ mày|đĩ|địt con mẹ|dm|dmm|dkm|đụ|vkl|vcl|vãi lều|vãi lìn|vãi lờ|vãi l|đkm|clmm|đcm|dcm|vl|fuck|fuk|shit|ifastnet|sitesled|buồi|nứng|lồn|fucking|cock|bitch|cặc|kặc|suck|mẹ mày|lỗ đít|liếm lìn|mặt lìn|con phò|lịt mẹ|tiên sư bố|tổ sư bố|mả mẹ mày|mả cha mày|mả bố mày|mả tổ mày|mả mẹ chúng mày|mả cha chúng mày|mả bố chúng mày|mả tổ chúng mày|lỗ đít|mặt lìn|liếm lìn|móc lìn|ăn lìn|liếm đít|con phò|con đĩ|con điếm|đĩ đực|điếm đực|đồ chó|đồ lợn|cứt|ăn kặc|bú kặc|củ kặc|con kặc|mút kặc|ăn kẹc|bú kẹc|củ kẹc|con kẹc|bú dái|bú dzái|mút zái|bú cu|bú ku|con ku|kứt|ngứa dzái|ngứa dái|bán dzâm|ngứa zdái|bỏ mẹ|dis mẹ|nhu lon|lon`|zú bự|zu' bu|zu' bự|minh trị|minh trị|minh trị|minh trị|cờ vàng 3 sọc đỏ|cờ vàng 3 sọc đỏ|cờ vàng ba sọc đỏ|đàn áp tôn giáo|đàn áp tôn giáo|đàn áp tôn giáo|thăng tiến việt nam|cu hồ|hot^. le.|hột le|trung cộng|viêt cộng|trung cong|viet cong|trung cong|thanh minh thiền viện|trym|hãm|cpvntd|sjp|lo^`n|buô`i|trym|f.u.c.k|f.u.c.k|f u c k|f u c k|dy~|f*ck|địt|đỵt|đít ghẻ|chó đẻ|fản động|phản động|đéo|đis mẹ|dit me|đy~ chó|đĩ chó|đù má|đéo mẹ|đù má mày|chúng mày|đù má chúng mày|lỳn|kon kac|con di~|thang con ket|lo`n|chó ghẻ|lonz|dit con me may|nguyễn tất thành|nguyễn sinh cung|cụ hồ|lão hồ|ông hồ|nguyễn đức nhanh|lê nin|nông đức mạnh|trương tấn sang|đinh la thăng|lê văn luyện|nguyễn tấn dũng|đcs|dcs|đảng cộng sản|ho chi minh|h c minh|minh râu|việt cộng|triều đình cộng sản|vương triều cộng sản|vương triều hà nội|đảng trị|đả đảo cộng sản|đả đảo xhcn|cộng sản bán nước|tội ác cộng sản|tội ác của chế độ csvn|tội ác của chế độ cộng sản|cộng sản độc tài|độc tài cộng sản|cộng sản thối nát|cộng sản mị dân|cộng sản mỵ dân|nguyễn phú trọng|nguyễn xuân phúc)($|\W)/ig;function changeChatCaptcha(a){$.ajax({type:"POST",url:"/CaptchaGenerator.aspx?type=base64&t="+(new Date()).getTime(),success:function(b,d,c){$("#"+a).attr("etag",c.getResponseHeader("Etag"));$("#"+a).attr("src","data:image/jpeg;base64,"+b)},error:function(c,d,b){}})}BDSChat=new function(){var b=0;var o=[];var r={Year:"year",Month:"month",Day:"day",Hour:"hour",Minute:"minute",Second:"second"};var j="/trang-ca-nhan/HandlerWeb/ChatHandler.ashx";var e="CHAT_ROOM";var n=null;var d="chat-time-";var f="https://file4.batdongsan.com.vn/images/no-avatar.png";var g="https://file4.batdongsan.com.vn/images/no-photo.jpg";var h="https://file4.batdongsan.com.vn/images/support-avatar.png";var c="/Modules/Chats/scripts/ChatSound.mp3";var m=60;var k=false;var l=false;this.chatServer=null;var i={handle:"#etoggle",dir:"https://file4.batdongsan.com.vn/images/emoticons/",label:"On Emoticons",style:"background: #eee",css:"class2"};window.onbeforeunload=function(){if(b>0){BDSChat.closeAllRoom()}};var a=this;this.attachEvents=function(){BDSChat.addChatArea();senderGender=senderGender!=null?senderGender:0;if($.connection!=null){$.connection.hub.url=chatServerUrl+"/signalr/hubs";$.connection.hub.qs="__ui="+encodeURIComponent(senderId)+"&__gd="+senderGender+"&__un="+encodeURIComponent(senderName)+(chatPK!=null&&chatPK!=""&&k?"&__pk="+encodeURIComponent(chatPK):"");a.chatServer=$.connection.chatServer;$.connection.hub.start({transport:"longPolling"},function(){}).fail(function(s){chatBrowserLog("Could not connect chat hub: "+s.toString())}).done(function(){if(!k){BDSChat.loadStaff();BDSChat.loadUnreadMessageForMenu()}BDSChat.loadRoomFromCookie();if(typeof BDSChatAdminInbox!="undefined"){BDSChatAdminInbox.requestListOnlineUsers()}setInterval(function(){BDSChat.keepConnected()},120000)})}};this.registerEvents=function(){if($.connection!=null){$.connection.chatServer.client.initiateChatUI=function(u,y,x,B){if(o[u.chatRoomId]!=undefined){if(o[u.chatRoomId].popup!=null){o[u.chatRoomId].popup.displayRoomExternal(u.chatRoomId)}}else{var C=u.toUserId!=senderId?u.toUserId:u.fromUserId;o[u.chatRoomId]={popup:null,oldTime:null,lastTime:null,toUserId:C,avatarUrl:null,fileId:null,highLightFunc:null,productId:u.productId,isLoadHistory:true,totalUnread:B,isChatSound:true,isSendEmail:true,sendEmail:userChatInfo.Email,isRead:true};$("#divChatWithBDS").hide();var w=$(strNewChatroomTemplate).tmpl(u);var s=$(strNewChatHeader).tmpl(u);var v=w.find(".chatMessages");b++;if(!k){if(u.productId>0){BDSChat.loadProductDetail(v,u,y);v.css("height",184)}else{if(BDSChat.loadSupportDetail(v,u,y)){s.find(".user-status").css("display","none");s.find(".user-status").after($("<span />").addClass("link-chat-bds-header"));s.addClass("chat-header-bds");v.css("height",184)}else{v.css("height",280)}}}if(y){s.find(".user-status").addClass("online-status");s.find(".link-chat-bds-header").removeClass("offline-status")}else{s.find(".user-status").removeClass("online-status");s.find(".link-chat-bds-header").addClass("offline-status")}if(!l){o[u.chatRoomId].popup=w.chatPopup({id:u.chatRoomId,fullName:BDSChat.getFullName(u.chatUsers),title:s,Gender:BDSChat.getGender(u.chatUsers),close:function(D){BDSChat.closeRoom(D)}})}BDSChat.loadMaximizeOrMinimize(u.chatRoomId,C);BDSChat.updateUnreadMessage();o[u.chatRoomId].isLoadHistory=false;BDSChat.requestHistory(u.chatRoomId);$("#newmessage-"+u.chatRoomId).focus(function(){if(!$(this).hasClass("text-focus")){$(this).addClass("text-focus")}if(o[u.chatRoomId]!=undefined&&o[u.chatRoomId].popup!=null){o[u.chatRoomId].popup.addUnreadMessageExternal(u.chatRoomId,0)}if((n==null||n.length==0)&&(!o[u.chatRoomId].isRead)){o[u.chatRoomId].isRead=true;a.chatServer.server.updateReadMessage(u.chatRoomId)}});$("#newmessage-"+u.chatRoomId).blur(function(){if($(this).hasClass("text-focus")){$(this).removeClass("text-focus")}});$("#messages-"+u.chatRoomId).scroll(function(){if($(this).scrollTop()==0){var D=parseInt($(this).attr("id").split("-")[1]);if(o[D].isLoadHistory){BDSChat.requestHistory(D)}}});$("#sendmessage-"+u.chatRoomId).keypress(function(D){if((D.which&&D.which==13)||(D.keyCode&&D.keyCode==13)){$("#chatsend-"+u.chatRoomId).click();return false}});$("#pnlEmoticions-"+u.chatRoomId).click(function(D){currentactiveRoom=u.chatRoomId;var F=$(this).offset();var G=$(this).outerWidth();var E=$(this).outerHeight();$(".emoticons").attr("rel",u.chatRoomId).css({position:"absolute",top:(F.top-$(".emoticons").outerHeight())+"px",left:(F.left-$(".emoticons").outerWidth()+G)+"px"});D.stopPropagation();showIconTable()});if(!k){var t=$("#chatPopup-"+u.chatRoomId);if(!userChatInfo.IsGuest){t.find(".edit-user-info").hide();t.find(".setting-phone").hide();t.find(".setting-email").hide()}else{t.find(".setting-phone input").val(userChatInfo.PhoneNumber);t.find(".setting-email input").val(userChatInfo.Email)}if(o[u.chatRoomId].isChatSound){t.find(".divIsRoomSound input").val("1");t.find(".divIsRoomSound").css("background-image","url(/Modules/Chats/styles/images/chat-checked-icon.png)")}else{t.find(".divIsRoomSound input").val("0");t.find(".divIsRoomSound").css("background-image","url(/Modules/Chats/styles/images/chat-unchecked-icon.png)")}if(o[u.chatRoomId].isSendEmail){t.find(".divIsSendEmail input").val("1");t.find(".divIsSendEmail").css("background-image","url(/Modules/Chats/styles/images/chat-checked-icon.png)")}else{t.find(".divIsSendEmail input").val("0");t.find(".divIsSendEmail").css("background-image","url(/Modules/Chats/styles/images/chat-unchecked-icon.png)")}t.find(".divTxtSendEmail input").val(o[u.chatRoomId].sendEmail);$("#chatPopup-"+u.chatRoomId+" .divIsRoomSound").click(function(){var D=$(this).find("input");if(D.val()=="1"){D.val("0");$(this).css("background-image","url(/Modules/Chats/styles/images/chat-unchecked-icon.png)")}else{D.val("1");$(this).css("background-image","url(/Modules/Chats/styles/images/chat-checked-icon.png)")}});$("#chatPopup-"+u.chatRoomId+" .divIsSendEmail").click(function(){var D=$(this).find("input");if(D.val()=="1"){D.val("0");$(this).css("background-image","url(/Modules/Chats/styles/images/chat-unchecked-icon.png)")}else{D.val("1");$(this).css("background-image","url(/Modules/Chats/styles/images/chat-checked-icon.png)")}});$("#chatPopup-"+u.chatRoomId+" a.btnsave").click(function(){var F=$("#chatPopup-"+u.chatRoomId+" .divTxtSendEmail input").val().trim();var D=$("#chatPopup-"+u.chatRoomId+" .setting-email input").val().trim();var E=$("#chatPopup-"+u.chatRoomId+" .setting-phone input").val().trim();if(F.length<=0||!BDSChat.checkEmail(F)){alert("Bạn phải nhập đúng định dạng email để nhận lịch sử chat.");$("#chatPopup-"+u.chatRoomId+" .divTxtSendEmail input").focus();return}if(userChatInfo.IsGuest){if(D.length<=0||!BDSChat.checkEmail(D)){alert("Bạn phải nhập đúng định dạng email.");$("#chatPopup-"+u.chatRoomId+" .setting-email input").focus();return}if(E.length<=0||!BDSChat.checkPhoneNumber(E)){alert("Số điện thoại không hợp lệ.");$("#chatPopup-"+u.chatRoomId+" .setting-phone input").focus();return}}o[u.chatRoomId].sendEmail=F;o[u.chatRoomId].isChatSound=$("#chatPopup-"+u.chatRoomId+" .divIsRoomSound input").val()=="1";o[u.chatRoomId].isSendEmail=$("#chatPopup-"+u.chatRoomId+" .divIsSendEmail input").val()=="1";BDSChat.setCookie();if(userChatInfo.IsGuest){a.chatServer.server.saveGuestInfo(senderId,D,E);$(".chatPopup .setting-phone input").val(E);$(".chatPopup .setting-email input").val(D);userChatInfo.Email=D;userChatInfo.PhoneNumber=E;$.ajax({url:j+"?action=updatechatuser",data:{email:D,phone:E},success:function(G){}})}alert("Lưu thông tin thành công.")});$("#chatPopup-"+u.chatRoomId+" .setting-spam a").click(function(){a.chatServer.server.reportSpam(u.chatRoomId);alert("Phản hồi của bạn đã được gửi đến quản trị.")});$("#chatPopup-"+u.chatRoomId+" a.btnclear").click(function(){var D=$("#chatPopup-"+u.chatRoomId);if(o[u.chatRoomId].isChatSound){D.find(".divIsRoomSound input").val("1");D.find(".divIsRoomSound").css("background-image","url(/Modules/Chats/styles/images/chat-checked-icon.png)")}else{D.find(".divIsRoomSound input").val("0");D.find(".divIsRoomSound").css("background-image","url(/Modules/Chats/styles/images/chat-unchecked-icon.png)")}if(o[u.chatRoomId].isSendEmail){D.find(".divIsSendEmail input").val("1");D.find(".divIsSendEmail").css("background-image","url(/Modules/Chats/styles/images/chat-checked-icon.png)")}else{D.find(".divIsSendEmail input").val("0");D.find(".divIsSendEmail").css("background-image","url(/Modules/Chats/styles/images/chat-unchecked-icon.png)")}D.find(".setting-phone input").val(userChatInfo.PhoneNumber);D.find(".setting-email input").val(userChatInfo.Email);D.find(".divTxtSendEmail input").val(o[u.chatRoomId].sendEmail)})}BDSChat.setCookie();if(!y&&x!=null){var z=$("#newmessage-"+u.chatRoomId);var A="Liên hệ với khách hàng qua ";if(x.Phone!=null&&x.Phone!=""){A+="SĐT: "+x.Phone}if(x.Email!=null&&x.Email!=""){A+="\nEmail: "+x.Email}z.val(A);z.prop("disabled",true);z.css({"background-color":"#fff","font-style":"italic"});autoResizeTextArea(z)}}};$.connection.chatServer.client.receiveChatMessage=function(s,t,x){var z=/http:\/\/.*[^\s+$]/.exec(s.messageText);if(z!=null&&z.length>0){s.messageText=s.messageText.replace(z,'<a target="_blank" href="'+z+'">'+z+"</a>")}s.messageText=s.messageText.replace(badWordRegex,"$1***$3");if(o[t.chatRoomId]==undefined){$.connection.chatServer.client.initiateChatUI(t,x,null,0);if($("#m-"+s.chatMessageId).length>0){return}}o[t.chatRoomId].isRead=false;var u=$("#chatRoom-"+s.chatRoomId);var v=$("#messages-"+s.chatRoomId);BDSChat.processDatetime(s,v);var w;if(senderId==s.senderId){w=$(strNewMessageTemplateRight).tmpl(s).appendTo(v)}else{w=$(strNewMessageTemplateLeft).tmpl(s).appendTo(v);BDSChat.getAvatar(s,t,w);var y=false;if(o[s.chatRoomId].popup!=null&&(!o[s.chatRoomId].popup.hasClass("show")||o[s.chatRoomId].popup.hasClass("chatPopup-header-maximinze"))){y=true}else{a.chatServer.server.updateReadMessage(t.chatRoomId)}if(y){if(o[s.chatRoomId].highLightFunc!=null){clearTimeout(o[s.chatRoomId].highLightFunc)}o[s.chatRoomId].highLightFunc=setTimeout('BDSChat.highlightChatRoom("'+s.chatRoomId+'");',1000);o[s.chatRoomId].totalUnread+=1;if(o[s.chatRoomId]!=undefined&&o[s.chatRoomId].popup!=null){o[s.chatRoomId].popup.addUnreadMessageExternal(t.chatRoomId,o[s.chatRoomId].totalUnread)}if(typeof BDSChatAdminInbox!="undefined"){if(k){BDSChat.marqeePageTitle()}BDSChatAdminInbox.addUnreadMessage(s,t)}}if(o[s.chatRoomId].isChatSound){BDSChat.playSound()}}if(typeof(w)!="undefined"){w.emoticons(i)}v.scrollTop(v[0].scrollHeight)};$.connection.chatServer.client.receiveLeftChatMessage=function(s){};$.connection.chatServer.client.receiveEndChatMessage=function(s){b--};$.connection.chatServer.client.updateOnlineContacts=function(s){BDSChat.updateStatusUserForRoom(s,true);if(typeof BDSChatAdminInbox!="undefined"){BDSChatAdminInbox.updateOnlineUser(s)}};$.connection.chatServer.client.updateOfflineContacts=function(s){BDSChat.updateStatusUserForRoom(s,false);if(typeof BDSChatAdminInbox!="undefined"){BDSChatAdminInbox.updateOfflineUser(s)}};$.connection.chatServer.client.receiveErrorMessage=function(v){if(v.chatRoomId!=""){var s=$("#messages-"+v.chatRoomId);var t=$(strChatMessageErrorTemplate).tmpl(v);s.after(t);var u=t.height()+1;s.css("height",s.height()-u);setTimeout(function(){t.remove();s.css("height",s.height()+u)},3000)}else{chatBrowserLog(v.messageText)}};$.connection.chatServer.client.receiveHistoryMessage=function(s,t,u){if(s.length>0){for(var v=0;v<s.length;v++){BDSChat.loadChatHistoryMessage(s[v],t,u)}if(o[t.chatRoomId].isLoadHistory==false){o[t.chatRoomId].isLoadHistory=true;if($("#messages-"+t.chatRoomId)[0]!=undefined){$("#messages-"+t.chatRoomId).scrollTop($("#messages-"+t.chatRoomId)[0].scrollHeight)}}else{$("#messages-"+t.chatRoomId).scrollTop(50)}}else{o[t.chatRoomId].isLoadHistory=false}};$.connection.chatServer.client.receiveSupporter=function(t){var w=$(".chat-container").find(".lst-support ul");for(var u=0;u<t.length;u++){var s=h;if(!t[u].IsOnline){s="https://file4.batdongsan.com.vn/images/support-avatar-offline.png"}else{supportUserOnline.push(t[u].UserId)}var v=$(strChatLstSupportTemplate).tmpl({UserId:t[u].UserId,FullName:t[u].FullName,AvatarUrl:s,IsOnline:(t[u].IsOnline?"online":"")});v.click(function(){$(".list-chat-room").removeClass("active")});v.find("img").error(function(){$(this).attr("src",h)});w.append(v)}};$.connection.chatServer.client.deleteMessage=function(t){var s=$("#messages-"+t+" .message:not(#m-0)");if(s.length>0){s.remove()}var u=$("#messages-"+t+" .chat-time");if(u.length>0){u.remove();o[t].oldTime=null;o[t].lastTime=null}alert("Tin nhắn đã được xóa.")};$.connection.chatServer.client.updateReadMessage=function(s){if(o[s]!=undefined&&o[s].popup!=null){o[s].totalUnread=0;o[s].popup.addUnreadMessageExternal(s,0)}if(typeof BDSChatAdminInbox!="undefined"){BDSChatAdminInbox.updateReadMessage(s)}};$.connection.chatServer.client.updateOnlineUsers=function(s){if(typeof BDSChatAdminInbox!="undefined"){BDSChatAdminInbox.updateListOnlineUsers(s)}}}};this.LogOutSingR=function(s){a.chatServer.server.logOutSingR(userChatInfo.UserId,s)};this.sendChatMessage=function(t){var u=$("#newmessage-"+t);if(u.val()==null||u.val().trim()==""){return}var s={chatRoomId:t,messageText:$("<div />").text(u.val()).html().replace(/\n/g,"<br>")};u.val("");u.focus();a.chatServer.server.sendChatMessage(s).fail(function(v){chatBrowserLog("Send chat failure: "+v.toString())});return false};this.closeRoom=function(s){delete o[parseInt(s)];BDSChat.setCookie();BDSChat.endChat(s.toString())};this.endChat=function(t){var u=$("#newmessage-"+t);var s={senderId:senderId,senderName:senderName,chatRoomId:t,messageText:u.val()};u.val("");u.focus();a.chatServer.server.endChat(s).fail(function(v){console.log("End chat failure: "+v.toString())})};this.initiateChat=function(t,s){if(a.chatServer==null){console.log("Problem in connecting to Chat Server. Please Contact Administrator!");return}a.chatServer.server.initiateChat(s,t).fail(function(u){console.log("Initiate chat failure: "+u.toString())})};this.initiateChatRandom=function(){if(supportUserOnline.length>0){var s=supportUserOnline[Math.floor(Math.random()*supportUserOnline.length)];BDSChat.initiateChat(s,"0")}else{$(".list-chat-room").toggleClass("active")}};this.formatName=function(s,t){var u=this.subWords(s,t);return'<span title="'+s+'">'+u+"</span>"};this.isCurrentUser=function(s){return s==senderId};var q=[" ","-"];this.subWords=function(s,t){if(s.length<=t||t<=0){return s}var u=s.substring(0,t);return u+"..."};this.updateStatusUserForRoom=function(y,t){if(o!=undefined&&o!=null){for(key in o){if(o[key].toUserId!=undefined){if(o[key].toUserId==y.UserId){var u=$("#chatRoomHeader-"+key+" .user-status");var v=$("#chatRoomHeader-"+key+" .link-chat-bds-header");var x=$("#chatRoom-"+key+" .support-online-text");if(t){u.addClass("online-status");v.removeClass("offline-status");if(x.length>0){x.text("Sẵn sàng hỗ trợ")}}else{u.removeClass("online-status");u.addClass("offline-status");v.addClass("offline-status");if(x.length>0){x.text("Đang offline")}}if(o[key].popup!=null){o[key].popup.updateStatusExternal(key,t)}}}}}var w=$(".lst-support li a");for(var s=0;s<w.length;s++){if($(w[s]).attr("uid")==y.UserId){if(t){$(w[s]).find(".support-item-status").addClass("online")}else{$(w[s]).find(".support-item-status").removeClass("online")}break}}};this.getFullName=function(t){for(var s=0;s<t.length;s++){if(t[s].UserId!=senderId){return BDSChat.subWords(t[s].FullName,30)}}return""};this.getGender=function(t){for(var s=0;s<t.length;s++){if(t[s].UserId!=senderId){return t[s].Gender}}return""};this.convertDatetimeToString=function(t,A){var B=t.getFullYear();var y=t.getMonth()+1;var u=t.getDate()<10?("0"+t.getDate()):t.getDate();var w=t.getHours();var v=w%12==0&&w>0&&w!=24?12:w%12;var x=t.getMinutes()<10?("0"+t.getMinutes()):t.getMinutes();var z=t.getSeconds()<10?("0"+t.getSeconds()):t.getSeconds();var s=w>12?" PM":" AM";if(A==r.Second){return v+":"+x+":"+z+s}else{if(A==r.Minute){return v+":"+x+s}else{if(A==r.Hour){return v+":"+x+s}else{if(A==r.Day){return v+":"+x+s+" "+u+" tháng "+y}else{if(A==r.Month){return v+":"+x+s+" "+u+" tháng "+y}else{if(A==r.Year){return v+":"+x+s+" "+u+" tháng "+y+" năm "+B}}}}}}return v+":"+x+" "+u+" tháng "+y};this.processDatetime=function(s,t){var u=new Date(s.timestamp);var v=false;var w=r.Hour;if(o[s.chatRoomId].lastTime==null){o[s.chatRoomId].lastTime=u;v=true}else{if(u.getFullYear()>o[s.chatRoomId].lastTime.getFullYear()){this.removeTimeMessage(r.Hour,t);this.removeTimeMessage(r.Day,t);this.removeTimeMessage(r.Month,t);v=true}else{if(u.getMonth()>o[s.chatRoomId].lastTime.getMonth()){this.removeTimeMessage(r.Hour,t);this.removeTimeMessage(r.Day,t);v=true}else{if(u.getDate()>o[s.chatRoomId].lastTime.getDate()){this.removeTimeMessage(r.Hour,t);v=true}else{if(u>(new Date(o[s.chatRoomId].lastTime.getTime()+(m*60*1000)))){v=true}}}}}if(v){o[s.chatRoomId].lastTime=u;this.addTimeMessage(u,w,t,true)}};this.addTimeMessage=function(t,w,s,u,v){if(u){s.append("<div class='chat-time chat-time-"+w+"' timestamp='"+t.getTime()+"'><div><span>"+this.convertDatetimeToString(t,w)+"</span></div></div>")}else{if(v.length==0){s.prepend("<div class='chat-time chat-time-"+w+"' timestamp='"+t.getTime()+"'><div><span>"+this.convertDatetimeToString(t,w)+"</span></div></div>")}else{v.after("<div class='chat-time chat-time-"+w+"' timestamp='"+t.getTime()+"'><div><span>"+this.convertDatetimeToString(t,w)+"</span></div></div>")}}};this.removeTimeMessage=function(v,s){s.find("."+d+v+":gt(0)").remove();var u=v;if(v==r.Hour){u=r.Day}else{if(v==r.Day){u=r.Month}else{if(v==r.Month){u=r.Year}}}var t=s.find("."+d+v);t.find("span").text(this.convertDatetimeToString(new Date(parseInt(t.attr("timestamp"))),u));t.removeClass(d+v).addClass(d+u)};this.getAvatar=function(s,t,w){var u="";for(var v=0;v<t.chatUsers.length;v++){if(t.chatUsers[v].UserId!=senderId){u=t.chatUsers[v].Avatar}}if(o[t.chatRoomId].avatarUrl!=null&&s!=null){this.updateAvatar(o[t.chatRoomId].avatarUrl,t.chatRoomId,w)}else{if(u!=null){$.ajax({url:j+"?action=getavatar&fileid="+u,success:function(y){var x=f;if(y.avatarUrl.length>0){x=y.avatarUrl}o[t.chatRoomId].avatarUrl=x;if(s!=null){BDSChat.updateAvatar(x,t.chatRoomId,w)}}})}else{o[t.chatRoomId].avatarUrl=f;if(s!=null){BDSChat.updateAvatar(f,t.chatRoomId,w)}}}};this.updateAvatar=function(s,w,v){var u=v.find(".avatar img");var t=document.createElement("img");$(t).attr("src",s);$(t).error(function(){s=f;o[w].avatarUrl=f;v.find(".avatar img").attr("src",s)});u.attr("src",s)};this.BDSChatMarqeeTitle=null;var p=" Bạn có tin nhắn mới - Quản lý Chat ";this.marqeePageTitle=function(){p=p.substring(1,p.length)+p.substring(0,1);document.title=p;BDSChat.BDSChatMarqeeTitle=setTimeout("BDSChat.marqeePageTitle()",300)};this.highlightChatRoom=function(s){if(!$("#newmessage-"+s).hasClass("text-focus")){$("#chatPopup-"+s+" .chatPopup-header").toggleClass("header-blink");if(typeof(o[s])!="undefined"&&o[s].highLightFunc!=null){clearTimeout(o[s].highLightFunc)}if(typeof(o[s])!="undefined"){o[s].highLightFunc=setTimeout('BDSChat.highlightChatRoom("'+s+'");',1000)}}else{if($("#chatPopup-"+s+" .chatPopup-header").hasClass("header-blink")){$("#chatPopup-"+s+" .chatPopup-header").removeClass("header-blink")}if(k){clearTimeout(BDSChat.BDSChatMarqeeTitle);document.title="Quản lý Chat"}}};this.loadProductDetail=function(t,s,u){$.ajax({url:j+"?action=getproduct&productId="+s.productId+"&chatRoomId="+s.chatRoomId,success:function(v){if(v.success){var x=$(strChatProductDetailsTemplate).tmpl(v.product);t.before(x);var w=x.find("img");w.error(function(){w.attr("src",g)});if(v.product.UserId!=senderId){if(u){BDSChat.displayWelComeMessage(t,s,"Rất vui vì bạn đã quan tâm đến tin rao của chúng tôi. Nếu có gì cần tư vấn hoặc giải đáp thì liên hệ với tôi!")}else{BDSChat.displayWelComeMessage(t,s,"Rất vui vì bạn đã quan tâm đến tin rao của chúng tôi. Hiện tôi đang không online, vui lòng để lại tin nhắn cho tôi")}}}}})};this.displayWelComeMessage=function(u,t,w){var v;var s={chatMessageId:0,messageText:w};v=$(strNewMessageTemplateLeft).tmpl(s);u.prepend(v);BDSChat.getAvatar(s,t,v);if(typeof(v)!="undefined"){v.emoticons(i)}};this.loadSupportDetail=function(t,s,v){var y=s.toUserId!=senderId?s.toUserId:s.fromUserId;for(var u=0;u<s.chatUsers.length;u++){if(s.chatUsers[u].UserId==y){if(s.chatUsers[u].IsStaff){var x=$(strChatCallerBdsTemplate).tmpl({userId:y,FullName:s.chatUsers[u].FullName,OnlineText:(v?"Sẵn sàng hỗ trợ":"Đang offline")});t.before(x);if(s.chatUsers[u].Avatar!=null){$.ajax({url:j+"?action=getavatar&fileid="+s.chatUsers[u].Avatar,success:function(A){var z=h;if(A.avatarUrl.length>0){z=A.avatarUrl}o[s.chatRoomId].fileId=s.chatUsers[u].Avatar;o[s.chatRoomId].avatarUrl=z;var B=x.find(".support-avatar");B.attr("src",z);B.error(function(){o[s.chatRoomId].avatarUrl=h;B.attr("src",h)})}})}else{o[s.chatRoomId].fileId=s.chatUsers[u].Avatar;o[s.chatRoomId].avatarUrl=h;var w=x.find(".support-avatar");w.attr("src",h);w.error(function(){o[s.chatRoomId].avatarUrl=h;w.attr("src",h)})}if(v){this.displayWelComeMessage(t,s,"Rất vui vì đã ghé thăm Batdongsan.com.vn. Bạn có cần tư vấn hoặc giải đáp thắc mắc gì, hãy chat với chúng tôi!")}else{this.displayWelComeMessage(t,s,"Rất vui vì bạn đã ghé thăm Batdongsan.com.vn. Hiện CSKH đang không online, vui lòng để lại lời nhắn cho chúng tôi!")}return true}}}return false};this.likeAndDislike=function(t,s){a.chatServer.server.likeOrDislikeSupporter(t,s)};this.loadRoomFromCookie=function(){n=this.getCookie();if(n.length>0){$("#divChatWithBDS").show();$(".chat-container").hide();BDSChat.initiateChat(n[0].toUserId,n[0].productId)}else{$("#divChatWithBDS").show()}};this.loadMaximizeOrMinimize=function(t,u){if(n!=null&&n.length>0){for(var s=0;s<n.length;s++){if(n[s].toUserId==u){if(o[t]!=undefined&&o[t].popup!=null){o[t].popup.minimizeOrMaximizeExternal(t,n[s].isMaximize);o[t].isChatSound=n[s].isChatSound;o[t].isSendEmail=n[s].isSendEmail;o[t].sendEmail=n[s].sendEmail}n.removeItem(n[s]);if(n!=null&&n.length>0){BDSChat.initiateChat(n[0].toUserId,n[0].productId)}else{$(".chat-container").show()}break}}}};this.updateUnreadMessage=function(){if(o!=undefined&&o!=null){for(key in o){if(typeof(o[key].toUserId)!="undefined"){if(o[key].popup!=null&&typeof(o[key].totalUnread)!="undefined"){o[key].popup.addUnreadMessageExternal(key,o[key].totalUnread)}}}}};this.addChatArea=function(){var s=$(document.createElement("div"));s.addClass("chat-container");$("body").append($(document.createElement("div")).addClass("emoticons"));s.append($("<div style ='display:none' id='chatSound'></div>"));if(k){$("body").append(s)}else{$("body").append(s);s.append($(strChatContainerTemplate).tmpl());$("#chat-width-bds").click(function(){$(".list-chat-room").toggleClass("active")})}};this.getCookie=function(){var x=getCookieChat(e);var w=[];if(x!=undefined&&x.length>0){var u=x.split("|");if(u.length>1&&u[0]==senderId){for(var t=1;t<u.length;t++){var v=u[t].split(",");if(v.length>3){try{w.push({toUserId:v[0],productId:v[1],isMaximize:v[2]!="false",isChatSound:v[3]!="false",isSendEmail:v[4]!="false",sendEmail:v[5]})}catch(s){}}}}}return w};this.setCookie=function(){var y=[];var s=$(".collapse-room-item:not(.active)");if(s.length>0){for(var u=0;u<s.length;u++){y.push($(s[u]).attr("roomId"))}}if($.fn.chatPopupShowList!=undefined&&$.fn.chatPopupShowList!=null&&$.fn.chatPopupShowList.length>0){for(var v=0;v<$.fn.chatPopupShowList.length;v++){y.push($.fn.chatPopupShowList[v])}}if(y.length>0){var t=senderId;for(var w=0;w<y.length;w++){var x=o[parseInt(y[w])];t+="|";t+=x.toUserId+","+x.productId+","+!$("#chatPopup-"+y[w]).hasClass("chatPopup-header-maximinze")+","+x.isChatSound+","+x.isSendEmail+","+x.sendEmail}setCookieChat(e,t)}else{setCookieChat(e,"",1)}};this.loadChatHistoryMessage=function(s,t,w){if($("#m-"+s.chatMessageId).length>0){return}var z=/http:\/\/.*[^\s+$]/.exec(s.messageText);if(z!=null&&z.length>0){s.messageText=s.messageText.replace(z,'<a target="_blank" href="'+z+'">'+z+"</a>")}s.messageText=s.messageText.replace(badWordRegex,"$1***$3");var u=$("#chatRoom-"+s.chatRoomId);var v=$("#messages-"+s.chatRoomId);var y=v.find("#m-0");var x;if(senderId==s.senderId){if(y.length!=0){x=$(strNewMessageTemplateRight).tmpl(s);y.after(x)}else{x=$(strNewMessageTemplateRight).tmpl(s).prependTo(v)}}else{if(y.length!=0){x=$(strNewMessageTemplateLeft).tmpl(s);y.after(x)}else{x=$(strNewMessageTemplateLeft).tmpl(s).prependTo(v)}BDSChat.getAvatar(s,t,x)}BDSChat.processDatetimeHistory(y,s,v,w);if(typeof(x)!="undefined"){x.emoticons(i)}};this.requestHistory=function(v){try{var t=$("#chatRoom-"+v+" .message");var u=0;if(t.length>0){if($(t[0]).attr("id")!="m-0"){u=parseInt($(t[0]).attr("timestamp"))}else{if(t.length>1){u=parseInt($(t[1]).attr("timestamp"))}}}a.chatServer.server.requestHistory(v,u)}catch(s){}};this.processDatetimeHistory=function(x,s,t,v){var w=new Date(s.timestamp);var u=new Date(v);var y=r.Year;if(o[s.chatRoomId].lastTime==null){o[s.chatRoomId].lastTime=w}if(w.getFullYear()<u.getFullYear()){y=r.Year}else{if(w.getMonth()<u.getMonth()){y=r.Month}else{if(w.getDate()<u.getDate()){y=r.Day}else{y=r.Hour}}}this.removeTimeMessageHistory(y,t,w,s.chatRoomId);this.addTimeMessage(w,y,t,false,x)};this.removeTimeMessageHistory=function(A,s,y,x){var z=s.find(".chat-time");if(z.length>0){var B=y.getFullYear();var w=y.getMonth();var u=y.getDate();var v=0;var t=null;switch(A){case r.Year:for(v=0;v<z.length;v++){t=new Date(new Date(parseInt($(z[v]).attr("timestamp"))));if(t.getFullYear()==B){$(z[v]).remove();if(t==o[x].lastTime){o[x].lastTime=y}}}break;case r.Month:for(v=0;v<z.length;v++){t=new Date(new Date(parseInt($(z[v]).attr("timestamp"))));if(t.getFullYear()==B&&t.getMonth()==w){$(z[v]).remove();if(t==o[x].lastTime){o[x].lastTime=y}}}break;case r.Day:for(v=0;v<z.length;v++){t=new Date(new Date(parseInt($(z[v]).attr("timestamp"))));if(t.getFullYear()==B&&t.getMonth()==w&&t.getDate()==u){$(z[v]).remove();if(t==o[x].lastTime){o[x].lastTime=y}}}break;case r.Hour:for(v=0;v<z.length;v++){t=new Date(new Date(parseInt($(z[v]).attr("timestamp"))));if(y.getTime()-t.getTime()<m*60*1000){$(z[v]).remove();if(t==o[x].lastTime){o[x].lastTime=y}}}break;default:break}}};this.setIsAdmin=function(s){k=s};this.setIsUserMgr=function(s){l=s};this.chatWithProductOwner=function(x,v,w){if(senderId==""){setCookieChat(e,"",1);if($(".chat-reg").length>0){if(parseInt($("#txtChatProductId").val())==w){$(".chat-reg .chatRoom").show();return}else{$(".chat-reg").remove()}}var s="";var t="";if(w==0){s="chat-header-bds"}else{t="bds-icon-none"}var u=$(strChatRegTempalte).tmpl({userId:x,fullName:v,productId:w,bdsClass:s,bdsIconClass:t});if(w>0){$.ajax({url:j+"?action=getproduct&productId="+w,success:function(y){if(y.success){var z=$(strChatProductDetailsTemplate).tmpl(y.product);z.find("img").error(function(){z.find("img").attr("src",g)});u.find(".chatRoom").prepend(z)}}})}else{u.find(".online-status").hide();u.find(".chatRoom").css({"padding-top":"5px"})}$("body").append(u);changeChatCaptcha("img_CAPTCHA_RESULT_123456");u.find("#btnChatClear").click(function(){$("#txtChatPhoneNumber").val("");$("#txtChatEmail").val("");$("#txtChatName").val("");$("#chkChatSaveInfo").val("1");$("#txtChatCapchar").val("");$("#txtChatPhoneNumber").focus();u.find(".chat-reg-save-info span").css("background-image","url(/Modules/Chats/styles/images/chat-checked-icon.png)")});u.find(".header-icon-minimize").click(function(y){u.toggleClass("minimize");y.stopPropagation();return false});u.find(".header-icon-close").click(function(y){u.remove();y.stopPropagation();return false});u.find(".chatPopup-header").click(function(y){u.toggleClass("minimize")});u.find("#btnStartChat").click(function(){if($("#txtChatPhoneNumber").val().trim()==""||!BDSChat.checkPhoneNumber($("#txtChatPhoneNumber").val().trim())){$("#regMessage").html("Số điện thoại không hợp lệ.");$("#txtChatPhoneNumber").focus();changeChatCaptcha("img_CAPTCHA_RESULT_123456");return false}if($("#txtChatName").val().trim()==""){$("#regMessage").html("Bạn cần nhập tên.");$("#txtChatName").focus();changeChatCaptcha("img_CAPTCHA_RESULT_123456");return false}if($("#txtChatEmail").val().trim().length>0&&!BDSChat.checkEmail($("#txtChatEmail").val().trim())){$("#regMessage").html("Bạn cần nhập đúng định dạng email.");$("#txtChatEmail").focus();changeChatCaptcha("img_CAPTCHA_RESULT_123456");return false}if($("input[name=rdGender]:checked").val()==null){$("#regMessage").html("Bạn cần chọn giới tính.");changeChatCaptcha("img_CAPTCHA_RESULT_123456");return false}if($("#txtChatCapchar").val().trim()==""){$("#regMessage").html("Bạn cần nhập Mã an toàn.");$("#txtChatCapchar").focus();changeChatCaptcha("img_CAPTCHA_RESULT_123456");return false}$.ajax({url:j+"?action=regchatuser",type:"POST",data:{name:$("#txtChatName").val(),phone:$("#txtChatPhoneNumber").val(),email:$("#txtChatEmail").val(),captcha:$("#txtChatCapchar").val(),etag:$("#img_CAPTCHA_RESULT_123456").attr("etag"),Gender:$("input[name=rdGender]:checked").val()},dataType:"json",success:function(y){if(y.Success){senderGender=parseInt($("input[name=rdGender]:checked").val(),0);senderId=y.Data.Id;senderName=y.Data.Name;u.remove();if(w>0){setCookieChat(e,senderId+"|"+x+","+w+",true,true,true,"+y.Data.Email,1)}var z={UserId:senderId,UserName:senderName,Email:y.Data.Email,PhoneNumber:y.Data.Phone,Gender:y.Data.Gender,IsGuest:true};registerChat(z);$("#chat-width-bds-noreg").hide();$("#chat-quick-inbox-content").show();$(".emoticons").allemoticons(emoSetting);if(w==null||w==0){setTimeout(function(){BDSChat.initiateChatRandom()},1000)}}else{changeChatCaptcha("img_CAPTCHA_RESULT_123456");alert(y.Message)}}})});u.find(".chat-reg-save-info span").click(function(){if($("#chkChatSaveInfo").val()=="1"){$("#chkChatSaveInfo").val("0");u.find(".chat-reg-save-info span").css("background-image","url(/Modules/Chats/styles/images/chat-unchecked-icon.png)")}else{$("#chkChatSaveInfo").val("1");u.find(".chat-reg-save-info span").css("background-image","url(/Modules/Chats/styles/images/chat-checked-icon.png)")}})}else{BDSChat.initiateChat(x,w)}};this.loadStaff=function(){a.chatServer.server.requestSupporter().fail(function(s){chatBrowserLog("Get supporters failure: "+s.toString())})};this.keepConnected=function(){a.chatServer.server.keepConnected()};this.closeAllRoom=function(){for(key in o){if(o[key].toUserId!=undefined){BDSChat.endChat(key)}}};this.playSound=function(){};this.loadUnreadMessageForMenu=function(){var s=$("#chat-quick-inbox-icon .mnu-chat-icon-unread");if(s.length>0){$.ajax({url:j+"?action=getinboxunreadroom",success:function(t){if(t!=null&&t.length>0&&s.length>0){s.text(t.length);s.css("display","block");var w=$(".chat-quick-inbox-content .inbox-body ul");if(w.length>0){var u="";for(var v=0;v<t.length;v++){u+="<li id='quick-inbox-item-"+t[v].Room.RoomId+"' onclick=\"BDSChat.quickInboxItemClick(this,'"+t[v].User.UserId+"','"+t[v].Room.ProductId+"', '"+t[v].Room.RoomId+"')\">";u+="<span class='quick-inbox-item-title'>"+t[v].User.FullName+"</span><br/>";u+="<span class='quick-inbox-item-lastMessage'>"+BDSChat.subWords(t[v].ChatMessage.messageText,42)+"</span><br/>";u+="<span class='quick-inbox-item-time'>"+BDSChat.convertTime(t[v].ChatMessage.timestamp,(new Date()).getTime())+"</span>";u+="</li>"}w.html(w.html()+u);w.emoticons(i);$("#chat-quick-inbox-icon").click(function(){if($("#pnlQuickBoxChat:visible").length>0){$("#pnlQuickBoxChat").hide()}else{$("#pnlQuickBoxChat").show()}})}}else{}}})}};this.addUnreadMessageForMenu=function(s,t){};this.removeUnreadMessageForMenu=function(s){};this.quickInboxItemClick=function(t,v,u,s){BDSChat.initiateChat(v,u);a.chatServer.server.updateReadMessage(s);$(t).remove();$("#chat-quick-inbox-icon .mnu-chat-icon-unread").html($("#chat-quick-inbox-icon .mnu-chat-icon-unread").html()-1);$(".chat-quick-inbox-content").removeClass("active")};this.getChatServer=function(){return a.chatServer};this.checkPhoneNumber=function(s){s=s.trim();if(s.length!=0&&s.length>=8&&s.length<=15&&/\+?[0-9]+([\.\-][0-9]{3,})*/.test(s)){return true}return false};this.checkEmail=function(u){var s=u.trim();var t=/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}(.[a-zA-Z]{2,6}){0,1}$/;if(s!=""){if(t.test(s)){return true}}return false};this.convertTime=function(C,u){var v=new Date(C);var t=new Date(u);var D=v.getFullYear();var A=v.getMonth()+1;var w=v.getDate()<10?("0"+v.getDate()):v.getDate();var y=v.getHours();var x=y%12==0&&y>0&&y!=24?12:y%12;var z=v.getMinutes()<10?("0"+v.getMinutes()):v.getMinutes();var B=v.getSeconds()<10?("0"+v.getSeconds()):v.getSeconds();var s=y>12?" PM":" AM";if(v.getFullYear()<t.getFullYear()){return x+":"+z+s+" "+w+" tháng "+A+" năm "+D}else{if(v.getMonth()<t.getMonth()){return x+":"+z+s+" "+w+" tháng "+A}else{if(v.getDate()<t.getDate()){return x+":"+z+s+" "+w+" tháng "+A}else{return x+":"+z+s}}}}};BDSChat.registerEvents();$(document).ready(function(){$.ajax({url:"/trang-ca-nhan/HandlerWeb/ChatHandler.ashx",type:"POST",dataType:"json",data:{action:"getuserinfo"},success:function(a){try{if(a!=null){senderGender=a.Gender;if(!a.IsGuest){bindAuthenticateChat()}registerChat(a);$("#chat-quick-inbox-content").show()}else{$("#chat-width-bds-noreg").show()}$(document).ready(function(){$(".emoticons").allemoticons(emoSetting)})}catch(b){return}}})});