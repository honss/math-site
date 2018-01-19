function circ_area() {
	var r = document.getElementById("circ_inputr").value;
	document.getElementById("circ_area").innerHTML = "Area: "+Math.PI*Math.pow(r,2);
}
function sphere_area() {
	var r = document.getElementById("sphere_inputr").value;
	var area = (4/3)*Math.PI*Math.pow(r,2);
	document.getElementById("sphere_area").innerHTML = "Area: "+area;
} 
function tri_area() {
	var b = document.getElementById("tri_inputb").value;
	var h = document.getElementById("tri_inputh").value;
	document.getElementById("tri_area").innerHTML = "Area: "+0.5*b*h;
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