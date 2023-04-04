olfa mabrouk
// script innerHTML
// soit le body suivant :
<body id="body">
    <div id="demo">Hello Amine</div>
</body>
<script>
	var element = document.getElementById("demo");
		// innerHTML ajoute du contenu a l'element lui meme
        element.innerHTML = "I am Strong"
		// outerHTML includes the tags themselfs
        element.outerHTML = "<h2> je suis grand </h2>"
</script>




// soit le body suivant :
<body id="body">
    <div id="demo">Hello Amine</div>
</body>

// Creation of the html element.
<script>
	   var element = document.createElement("h1");
       element.innerHTML = "this a script paragraph";
       console.log(element); // 1. affichage e l'element sur la console
	   // 2. ajouter l'element a un parent au choix
	   document.getElementById("body").appendChild(element);
	   // 3. essayer d'ajouter un css au div
	   // remplacer le getElementById("body") par 
	    document.getElementById("demo").appendChild(element);
</script>

// possibilté d'injection de page html dans une autre 
// sans avoir recours au raffraichissment de la page

// Créeer une autre page html intitulé dummy.html
<strong style="color: olive;" >Loaded via AJAX</strong>
// notre page index.html contient le code suivant
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="mystyle.css">
    <title>Document</title>
</head>
<body id="body">
    <div id="demo"></div>
    <script>
     // create hml http request object. 
     var xmlhttpRquest = new XMLHttpRequest();
     // set the target to the dummyHtml fragment
     xmlhttpRquest.open("GET","dummy.html");
     // place the html fragment into the container on load
     xmlhttpRquest.onload = function () {
        document.getElementById("demo").innerHTML = this.response;
     };
     // send the AJAX request
     xmlhttpRquest.send();
    </script> 
</body>
</html>


// Exemple 4 : Ajax Load DATA
<script>
     // generating some dummy data by crating an array
     var dummy = [
        { name: "Amine", age: 37 },
        { name: "Jhon", age: 25 },
        { name: "Samus", age: 21 },
        { name: "Eric", age: 12 },
        { name: "NAdia", age: 27 },
     ];
     dummy = JSON.stringify(dummy);
     console.log(dummy);
     // Save the encoded String into a file named dataEncoded.txt
	 // copier coller et effacer le code précédent
    </script> 
	
	// reprendre un script pour lire de ce fichier :
	<body id="body">
    <div id="demo"></div>
    <script>
        var xhtmlrequest = new XMLHttpRequest();
        xhtmlrequest.open("GET","dataencoded.txt");
        xhtmlrequest.onload = function () {
			// 1. Ecrire d'abord la ligne suivante
			console.log(this.response);
			// 2. ensuite remplacer par :
            var data = JSON.parse(this.response);
			console.log(data);
			// 3. construire une liste et afficher proprement
			var list = "<ul>"
            for(let person of data) {
                //altgr + 7
                list += `<li> ${person.name} - ${person.age} </li>`;
            }
            list += "</ul>";
            // append this list to an existing html element
            document.getElementById("demo").innerHTML = list;
			
        };
        xhtmlrequest.send();
    </script>
</body>




Exemple 5 : CSS Dynamique
// créer un fichier dummyCSS file
html,
body {
  background: red;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 30px;
}

// créer un nouveau html element et l'jouter à la page
<body id="body">
    <div id="demo">Hi Amine</div>
	</body>
</html>

// créer un nouveau lien css dans le script
<script>
    var link = document.createElement("link") ;
    link.rel="stylesheet";
    link.type = "text/css";
    link.href = "dummy.css"
    document.head.appendChild(link);
    </script>



















		
		
		