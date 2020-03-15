function check_card(clicked_id) {
    var click_class = document.getElementById(clicked_id).className;
    if (click_class == "clickable") {
    	document.getElementById(clicked_id).classList.add("checked");
    	document.getElementById(clicked_id).classList.remove("clickable");
    }
    if (click_class == "checked") {
    	var m = window.confirm("¿Desmarcar?");
    	if (m == true) {
    		document.getElementById(clicked_id).classList.add("clickable");
    		document.getElementById(clicked_id).classList.remove("checked");
    	}
    }
}

function new_card() {
	var m = window.confirm("¿Cambiar de cartón?");
	
	if (m == true) {
		location.reload();
	}
}