function quadratic() {
                var a = document.getElementById("quad_inputa").value;
                var b = document.getElementById("quad_inputb").value;
                var c = document.getElementById("quad_inputc").value;
                var topleft=-b
                var topright=Math.sqrt(Math.pow(b,2)-(4*a*c));
                var bottom=2*a;
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
            }
function func1() {
	var x1 = document.getElementById("func1_input1x").value;
	var y1 = document.getElementById("func1_input1y").value;
	var x2 = document.getElementById("func1_input2x").value;
	var y2 = document.getElementById("func1_input2y").value;
	var step1 = x2 - x1;
	var right = y2 - y1;
	var inside = Math.pow(step1, 2);
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
function square() {
    var a = document.getElementById("square_inputa").value;
    var b = document.getElementById("square_inputb").value;
    var c = document.getElementById("square_inputc").value;
	var d = b/(2*a)
	var temp = Math.pow(b,2)/(4*a)
	var e = c-temp
    document.getElementById("square_solution").innerHTML = "Solution: "+a+"(x + "+d+")^2 + "+e;
    }
function pyth() {
        var a = parseFloat(document.getElementById("pyth_inputa").value);
        var b = parseFloat(document.getElementById("pyth_inputb").value);
        var c = parseFloat(document.getElementById("pyth_inputc").value);
        if(isNaN(a)) {
            var first = -1*Math.pow(b,2);
            var second = Math.pow(c,2);
            var pyth_solutiona = Math.sqrt(first+second);
            document.getElementById("pyth_solution").innerHTML = "Solution: "+pyth_solutiona;
        }
        if(isNaN(b)) {
            var first = -1*Math.pow(a,2);
            var second = Math.pow(c,2);
            var pyth_solutionb = Math.sqrt(first+second);
            document.getElementById("pyth_solution").innerHTML = "Solution: "+pyth_solutionb;
        }
        if(isNaN(c)) {
            var pyth_solutionc = Math.sqrt(Math.pow(a,2)+Math.pow(b,2));
            document.getElementById("pyth_solution").innerHTML = "Solution: "+pyth_solutionc;
        }

    }