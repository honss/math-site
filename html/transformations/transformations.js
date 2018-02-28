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
function rotation() {
	var px1 = document.getElementById("rot_inputpx").value;
	var py1 = document.getElementById("rot_inputpy").value;
	var cx = document.getElementById("rot_inputcx").value;
	var cy = document.getElementById("rot_inputcy").value;
	var d = document.getElementById("rot_inputd").value;
	var px = px1-cx;
	var py = py1-cy;
	if(d==90){
			var temp = -1*py;
			var x = +temp + +cx;
			var y = +px + +cy;
			var solution = "("+x+", "+y+")";
	}
	if(d==180){
			var x = +(-1*px)+ +cx;
			var y = +(-1*py)+ +cy;
			var solution = "("+x+", "+y+")";
	}
	if(d==270){
			var x = +cy + +(-1*px);
			var y = +cx + +py
			var solution = "("+y+", "+x+")";
	}
	document.getElementById("rot_solution").innerHTML = "Point: "+solution;
	increment('rotation');
}

