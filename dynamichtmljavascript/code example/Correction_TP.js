
// Correction TP1_JS.html
function myFunction() {
        document.getElementById("demo").style.fontSize = "25px";
        document.getElementById("demo").style.color = "red";
        document.getElementById("demo").style.backgroundColor = "yellow";
    }

// Correction TP2_JS.html
 function light(bulbState){
    var picture;
    var description;
    if (bulbState == 0){
    picture = "images/bulboff.jpg";
    description = "the light is off";
    }else{
    picture = "images/bulbon.jpg";
    description = "the light is on";
    }
	document.getElementById('myImg').src = picture;
	document.getElementById('desc').textContent = description;
}

// Correction TP3_JS.html
var paragraphe = document.getElementById("parag").innerHTML.toUpperCase();
// sol one
document.getElementById("parag").innerHTML = paragraphe;
// sol two
var paragraphe = document.getElementById("parag").textContent.toUpperCase();


// Correction TP4_JS.html
var elem_h1 = document.createElement("h1");
elem_h1.innerHTML = "Ceci est un Heading from Javascript";
elem_h1.style.fontSize = "32px";
elem_h1.style.color = "blue";
document.getElementById("demo").appendChild(elem_h1);


// Correction TP5_JS.html
function revealMessage() {   
document.getElementById("hiddenMessage").style.display= "block";
}












