function quadratic() {
                var a = document.getElementById("quad_inputa").value;
                var b = document.getElementById("quad_inputb").value;
                var c = document.getElementById("quad_inputc").value;
                if(a=="volley" && b=="ball" && c==";)") {
                    alert("Nuthing but Net... Don't ask, it's for a friend. Also get out of my code.");
                }
                if(a=="llamas" && b=="=" && c=="life") {
                    alert("It's True")
		    window.open("https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Llama_lying_down.jpg/1200px-Llama_lying_down.jpg");
                }

                var topleft=-b
                var topright=Math.sqrt(Math.pow(b,2)-(4*a*c));
                var bottom=2*a;
                /*alert("topleft: "+topleft);
                alert("topright: "+topright);
                alert("bottom: "+bottom);*/
                var vertex=topleft/bottom
                document.getElementById("quad_vertex").innerHTML = "Vertex: "+topleft/bottom
                var x = [(topleft-topright)/bottom];
                x.push((topleft+topright)/bottom);
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


function ysolve() {
    var a = document.getElementById("ysolve_inputa").value;
    var b = document.getElementById("ysolve_inputb").value;
    var c = document.getElementById("ysolve_inputc").value;
    var x = document.getElementById("ysolve_inputx").value;
    var lef = Math.pow(x,2)*a;
    var mid = x*b;
	var solution = lef+mid+parseFloat(c);
    document.getElementById("ysolve_solution").innerHTML = "Solution: ("+x+", " + solution + ")";
    }
function func_combiner() { 
	var a1 = document.getElementById("comb_inputa1").value;
    var b1 = document.getElementById("comb_inputb1").value;
    var c1 = document.getElementById("comb_inputc1").value;	
	var a2 = document.getElementById("comb_inputa2").value;
    var b2 = document.getElementById("comb_inputb2").value;
    var c2 = document.getElementById("comb_inputc2").value;
	var newa = a1-a2
	var newb = b1-b2
	var newc = c1-c2
    var topleft=-newb
    var topright=Math.sqrt(Math.pow(newb,2)-(4*newa*newc));
    var bottom=2*newa;
	var x = [(topleft-topright)/bottom];
	x.push((topleft+topright)/bottom);
	y = [];
	for(i = 0; i < x.length; i++) {
	    var lef = Math.pow(x[i],2)*a1;
		var mid = x[i]*b1;
		var y_temp = lef+mid+parseFloat(c1);	
		y.push(y_temp);
		}
	document.getElementById("comb_solution").innerHTML = "Solution: ("+x[0]+", "+y[0]+"), ("+x[1]+", "+y[1]+")"
	}
