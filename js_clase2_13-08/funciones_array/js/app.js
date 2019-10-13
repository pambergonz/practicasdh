var alumno = {
  nombre:"Juan",
  apellido:"perez",
  dni: 2567899,
  email: "pedro@hmail.com"
}

console.log(Object.values(alumno));

var body = document.querySelector("body");


function cambiarColorBody(colorFondo){
  if(colorFondo!=="green"){
    body.style.backgroundColor= colorFondo;
    return true;
  }
  return false;
}

console.log(cambiarColorBody("green"));
var parrafosSinAfectar = 0;

for (var i = 0; i < 10; i++) {
 var losP = document.createElement('p');
 losP.innerText = "probandoooo";

 if([i]%2 == 0){
   losP.style.color="red";
   losP.style.fontWeight="bold";
   losP.style.textAlign="center";
 } else {
   console.log(parrafosSinAfectar++);
 }
 body.append(losP);
}

console.log(`la cantidad de parrafo sin afectar es ${parrafosSinAfectar}`)


var enigma = ["l", 1, "a", 2, 2, 5, "p", 5, 7, 5, 3, "e", 6,
"r", 7, 6, 5, 3, 2, 1, "s", 9, 9, 9, 6, "e", 2, "v", 5, "e", 3, "r",
2, "a", 1, 6, 4, 1, 2, "n", 2, "c", 3, 5, 5, 5, 7, "i", 4, "a", 5,
2, 1, 3, "e", 6, "s", 7, "l", 4, "a", 3, "c", 2, 3, 1, 5, 3, 2, "l",
3, "a", 4, "v", 5, "e", 6];

var numeros = enigma.filter(function(posiciones){
     return typeof posiciones== "number"}).reduce(function(acumulador,numero){
       return acumulador + numero;
     });

console.log(numeros);

/*var sumaTodosLosNumeros = numeros.reduce(function(acumulador,numero){
  return acumulador + numero;
});
console.log(sumaTodosLosNumeros);
*/

var letras = enigma.filter(function(posiciones){
     return typeof posiciones!== "number"}).reduce(function(acumulador,numero){
       return acumulador + numero;
     });
console.log(letras);

console.log(`${letras} ${numeros}`)
