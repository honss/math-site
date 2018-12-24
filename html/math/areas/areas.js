var pi = 3.14
function increment($type) {
	$.post("../statistics/inputhandler.php", {type: $type});
}
function circ_area() {
	var r = document.getElementById("circ_inputr").value;
	document.getElementById("circ_area").innerHTML = "Area: "+pi*Math.pow(r,2);
	increment('circle_area');
}
function cyl_volume() {
	var r = document.getElementById("cyl_inputr").value;
	var h = document.getElementById("cyl_inputh").value;
	document.getElementById("cyl_solution").innerHTML = "Volume: "+pi*Math.pow(r,2)*h;
	increment('cylinder_volume');
}
function cone_volume() {
	var r = document.getElementById("cone_inputr").value;
	var h = document.getElementById("cone_inputh").value;
	var solution = pi*Math.pow(r,2)*h/3
	document.getElementById("cone_solution").innerHTML = "Volume: "+solution;
	increment('cone_volume');
}
function sphere_volume() {
	var r = document.getElementById("sphere_inputr").value;
	var area = (4/3)*pi*Math.pow(r,3);
	document.getElementById("sphere_volume").innerHTML = "Area: "+area;
	increment('sphere_volume');
} 
function tri_area() {
	var b = document.getElementById("tri_inputb").value;
	var h = document.getElementById("tri_inputh").value;
	document.getElementById("tri_area").innerHTML = "Area: "+0.5*b*h;
	increment('triangle_area');
}
function sqr_pyr_volume() {
	var s1 = document.getElementById("sqr_pyr_inputs1").value;
	var s2 = document.getElementById("sqr_pyr_inputs2").value;
	var h  = document.getElementById("sqr_pyr_inputh").value;
	document.getElementById("sqr_pyr_volume").innerHTML = "Volume: "+s1*s2*(h/3);
	increment('square_pyramid_volume');
}
