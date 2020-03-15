window.onload = function() {
	var casillas = document.getElementsByTagName('td');
	for (i = 0; i < casillas.length; i++) {
		if (casillas[i].innerHTML == "") {
			casillas[i].classList.add("blank");
		}
	}
};

function new_card() {
	var m = window.confirm("¿Cambiar de cartón?");
	
	if (m == true) {
		location.reload();
	}
}