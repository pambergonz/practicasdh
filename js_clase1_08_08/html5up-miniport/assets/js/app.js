////rompehielo
window.onload = function() {

var unString = "soy un string";
var unArray = ["hola", "soy", 1, true];
var unBooleano = true;
var botonDePrueba = document.getElementById('miBoton');
botonDePrueba.addEventListener("click", function(){
  alert("Testeando el click");
});
console.log(unString +" "+unArray +" "+unBooleano);

for (var i = 0; i <= 137 ; i++) {
  if(i%2!==0){
    console.log(i);
  }
}
////Objetos literales

var numeroPoder = Math.floor(Math.random()* 3);
function namePoder(){
for (var poder in this.poderes) {

  if (poder==numeroPoder) {
    return this.poderes[poder];
    }
  }
}

function nivelEnergia (getPoder){
if(this.getPoder()=="Volar"){
  console.log(this.energia)
    var energia = this.energia - 10;
    console.log(this.energia);
  }
}


var ironMan = {
  nombre:"Iron Man",
  equipo:"Avengers",
  poderes: ["Volar", "Lanzar misiles", "Disparar láser"],
  energia: 100,
  getPoder:namePoder,
  energiaDisponible:nivelEnergia,
}



var hulk = {
  nombre:"Hulk",
  equipo:"Avengers",
  poderes: ["Aplastar", "Gritar", "Golpear"],
  energia: 100,
  getPoder:namePoder,
      }


console.log(ironMan.energiaDisponible());


function saludar(){

    return  "Hola soy " + this.nombre + ' ' + this.apellido + " y tengo " + this.edad;

}


  var misDatos = {
    nombre: "pam",
    apellido: "bergon",
    dni:3483009,
    comidaFavorita:"sushi",
    edad: 29,
    saludo:saludar,
  }

  for (var dato in misDatos) {
    if(typeof misDatos[dato] !== 'function'){
  console.log(misDatos[dato]);
  }
}
  console.log(misDatos.saludo());


};
