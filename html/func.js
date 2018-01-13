function quadratic() {
                var a = parseInt(document.getElementById("quad_inputa").value)
                var b = parseInt(document.getElementById("quad_inputb").value)
                var c = parseInt(document.getElementById("quad_inputc").value)
                var topleft=-b
                var topright=Math.sqrt(b**2-(4*a*c))
                var bottom=2*a
                /*alert("topleft: "+topleft);
                alert("topright: "+topright);
                alert("bottom: "+bottom);*/
                var vertex=topleft/bottom
                document.getElementById("quad_vertex").innerHTML = "Vertex: "+topleft/bottom
                var x = [(topleft+topright)/bottom];
                x.push((topleft-topright)/bottom)
		if(x[0]==x[1]) {
			document.getElementById("quad_solution").innerHTML = "Solution: "+x[0];
                }
		else {
			document.getElementById("quad_solution").innerHTML = "Solution: "+x
		}
            };
function func1() {
	var x1 = document.getElementById("func1_input1x").value;
	var y1 = document.getElementById("func1_input1y").value;
	var x2 = document.getElementById("func1_input2x").value;
	var y2 = document.getElementById("func1_input2y").value;
	var step1 = x2 - x1;
	var right = y2 - y1;
	var inside = step1**2;
	var a = right/inside;
	document.getElementById("func1_solution").innerHTML = "Equation: f(x) = "+a+"(x - "+x1+")^2 + "+y1;
}
function func2() {
	var x1 = document.getElementById("func2_inputx1").value;
	var px = document.getElementById("func2_inputpx").value;
	var x2 = document.getElementById("func2_inputx2").value;
	var py = document.getElementById("func2_inputpy").value;
	var left = px - x1;
	var right = px - x2;
	var a = py/(left*right)
	document.getElementById("func2_solution").innerHTML = "Equation: f(x) = "+a+"(x - "+x1+")(x - "+x2+")";
}

