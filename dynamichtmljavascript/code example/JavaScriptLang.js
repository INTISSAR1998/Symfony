// Open Console to write javascript code directly
// parler des numbers.

/*
exemple de Youtube : 
Nombre entiers Integer 0 300 -12 
Number of subscribers
Number of likes
Number of videos
Number of Hits
------------------
Nombre decimals 2.3 556.6 -2.3 -0.0
les prix
le rating
--------------------------
les string 
caracteres, + - % 
utilisation des quotes pour designer 
	qu'un chiffre devient un string
	
"a" ,"3", " " ==> des caractères.
--------------------------------
les Booleens
*/

// Data Type : Array
["Amine","Ali","youssef"] 
["Amine","Ali","youssef"].length();
console.log(["Amine","Ali","youssef"].length);

// Array combiné
[1,2.3,55,55.1,2] // decimal et entiers
["Foulen",2,4,3.2,"Abricot"] // plusieurs types.


// Data Type : Object
// ==> Group Of Informations
{authorname:"Amine",rating:5,explanation:"great product"}
 
 { location:"adresse 12/34",
	price:"70",
	rating:5,
	availability:true,
	images:["image1link","image2link","image3link"]}
	
	//Javascript comprend la différence entre 
	//les types et les mets avec des couleurs différentes

--------- les opérations arithmétiques ------------
5+3
10*5
10%3
(10*5+6)*2
...

------------------------
// utilisation des opérations arithmétiques avec 
// les string .

"12"+"12" concatination
"Amine"+37
"bla"+false

/// les variables
var userName = "Amine";
console.log(username);
// ==> sensible à la casse
console.log(userName);

//********--------
//exemple:

// On appelle la variable dans beaucoup d'endroits.

var productAPrice = 50;

// list of product
"sneaker price: $ "+ productAPrice

// sneaker detail page
"sneaker price: $ "+ productAPrice

// combi products
"sneaker price: $ "+ productAPrice + " and other products";

-------------
*************
-------------
// Trois manières pour exécuter un script

1.- Execute in Browser Console.
2.- <script> in index.html file.
3.- Link it from external JS file.

--------- les conditions et les opérateurs------
/******comparaison*********/
= assignment operator 
var name = "John"

== or === checking equality of values.
//example
var age = 30
age == 30 -> true
age === 30 -> true

age == "30" -> true : égalité des valeurs
age === "30" -> false : égalité des valeurs + type de donnée

age === 40 -> false
age === "40" -> false

< > <= et >=
var totalPrice = 19
totalPrice > 20 : false
totalPrice < 20 : true
totalPrice <= 19 : false

if (totalPrice > 20){
	shippingCost = 0;
}else{
	shippingCost = 5;
}

==================================================
Exemple 
/*********condition (if/else)**********/
les opérateurs logiques.



























