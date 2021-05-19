var action = document.getElementById('menu');
action.addEventListener("click", function(){
	var etat = document.getElementById('menuv').style.display;
	if (etat ==  "none") {
		document.getElementById('menuv').style.display = "block";
	} else {
		document.getElementById('menuv').style.display = "none";
	}
}, false);