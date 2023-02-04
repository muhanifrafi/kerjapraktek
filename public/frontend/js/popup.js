/***************************/
//@Author: Adrian "yEnS" Mato Gondelle
//@website: www.yensdesign.com
//@email: yensamg@gmail.com
//@license: Feel free to use it, but keep this credits please!					
/***************************/

//SETTING UP OUR POPUP
//0 means disabled; 1 means enabled;
var popupStatus = 0;

//loading popup with jQuery magic!
function loadPopup(){
	//loads popup only if it is disabled
	if(popupStatus==0){
		$("#backgroundPopup").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup").fadeIn("slow");
		$("#popupView").fadeIn("slow");
		popupStatus = 1;
	}
}

//disabling popup with jQuery magic!
function disablePopup(){
	//disables popup only if it is enabled
	if(popupStatus==1){
		$("#backgroundPopup").fadeOut("slow");
		$("#popupView").fadeOut("slow");
		$("#popupLogin").fadeOut("slow");
		$("#popupPassword").fadeOut("slow");
		$("#popupChgPassword").fadeOut("slow");
		popupStatus = 0;
	}
}

//centering popup
function centerPopup(ID){
	//request data for centering
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	var popupHeight = $("#"+ID).height();
	var popupWidth = $("#"+ID).width();
	//centering
	$("#"+ID).css({
		"position": "absolute",
		"top": windowHeight/2-popupHeight/2,
		"left": windowWidth/2-popupWidth/2
	});
	//only need force for IE6
	
	$("#backgroundPopup").css({
		"height": windowHeight
	});
	
}

function Login(){
disablePopup();
popupStatus = 0;
	centerPopup("popupLogin");
	if(popupStatus==0){
		$("#backgroundPopup").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup").fadeIn("slow");
		$("#popupLogin").fadeIn("slow");
		popupStatus = 1;
	}
	
}
function ForgetPassword(){
disablePopup();
popupStatus = 0;
	centerPopup("popupPassword");
	if(popupStatus==0){
		$("#backgroundPopup").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup").fadeIn("slow");
		$("#popupPassword").fadeIn("slow");
		popupStatus = 1;
	}
	
}
function Register(){
disablePopup();
popupStatus = 0;
	centerPopup("popupRegister");
	if(popupStatus==0){
		$("#backgroundPopup").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup").fadeIn("slow");
		$("#popupRegister").fadeIn("slow");
		popupStatus = 1;
	}
	
}
function Profile(){
disablePopup();
popupStatus = 0;
	centerPopup("popupProfile");
	if(popupStatus==0){
		$("#backgroundPopup").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup").fadeIn("slow");
		$("#popupProfile").fadeIn("slow");
		popupStatus = 1;
	}
	
}
function ChgPassword(){
disablePopup();
popupStatus = 0;
	centerPopup("popupChgPassword");
	if(popupStatus==0){
		$("#backgroundPopup").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup").fadeIn("slow");
		$("#popupChgPassword").fadeIn("slow");
		popupStatus = 1;
	}
	
}


function closeDetil(){
jQuery("#popupView").fadeOut("slow");
jQuery("#backgroundPopup").fadeOut("slow")
}
	

//CONTROLLING EVENTS IN jQuery
$(document).ready(function(){
	
	//LOADING POPUP
	//Click the button event!
	$("#button").click(function(){
		//centering with css
		centerPopup();
		//load popup
		loadPopup();
	});
				
	//CLOSING POPUP
	//Click the x event!
	$("#popupViewClose").click(function(){
		disablePopup();
	});
	//Click out event!
	$("#backgroundPopup").click(function(){
		disablePopup();
	});
	//Press Escape event!
	$(document).keypress(function(e){
		if(e.keyCode==27 && popupStatus==1){
			disablePopup();
		}
	});

});
