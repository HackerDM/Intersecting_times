function moreOptions(){
	window.alert("hi");
	var x = document.createElement("td");
	var y = document.createTextNode("Preference: ");
	var z = document.createElement("input");
	z.setAttribute(type, "text");
	x.appendChild(y);
	x.appendChild(z);
	document.getElementById("add").appendChild(x);
}