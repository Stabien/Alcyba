var menu = document.getElementById("menu_deroulant");
var menu_ul = document.getElementsByTagName("ul");

function mouse_out() {
	var titre_menu = document.getElementById("titre_menu_deroulant");

	titre_menu.style.color = "white";
    titre_menu.style.border = "none";
}

function mouse_over() {
	var titre_menu = document.getElementById("titre_menu_deroulant");

	titre_menu.style.color = "#4EFD77";
	titre_menu.style.borderBottom = "4px solid #4EFD77";
}

menu.addEventListener('mouseover', mouse_over);
menu.addEventListener('mouseout', mouse_out);
menu_ul[1].addEventListener('mouseover', mouse_over);
menu_ul[1].addEventListener('mouseout', mouse_out);
