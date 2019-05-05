window.onload = function(){
	document.forms["search"].onsubmit = search_check;
	document.getElementById("btn_last_nav").onclick = about;
}

function search_check(){
	if(document.forms["search"]["search_input"].value == ""){
		alert("Empty feald!");
		return false;
	}
}

function about(){
	document.getElementById("teem").scrollIntoView();
}