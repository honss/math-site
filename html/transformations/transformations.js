var pi = 3.14
function increment($type) {
	$.post("../statistics/inputhandler.php", {type: $type});
}	
function dilation() {
	var px = document.getElementById("dil_inputpx").value;
	var py = document.getElementById("dil_inputpy").value;
	var cx = document.getElementById("dil_inputcx").value;
	var cy = document.getElementById("dil_inputcy").value;
	var f = document.getElementById("dil_inputf").value;
	var deltax = (px-cx)*f;
	var deltay = (py-cy)*f;
	var x = +deltax + +cx;
	var y = +deltay + +cy;
	document.getElementById("dil_solution").innerHTML = "Point: ("+x+", "+y+")";
	increment('dilation');
}

