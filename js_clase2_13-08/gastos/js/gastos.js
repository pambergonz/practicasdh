window.onload = function(){

  var docTitle = document.querySelector('title');
  docTitle.innerHTML= "Reporte de gastos Familiares";
  var body = document.querySelector('body');

  body.classList.toggle('dark-theme')

  if(!confirm('querés iniciar sesión??')){
    alert('gracias por haber venido');
    window.location = 'https://netflix.com';
  }
  var familyMembers = prompt('cuántos integrantes son en tu familia?');
  console.log(typeof familyMembers);
  while (isNaN(familyMembers) || familyMembers < 3 ){
    alert('La cantidad de integrantes familiares debe ser numérica y mayor a tres');
    var familyMembers = prompt('cuántos integrantes son en tu familia?');
    }
  var parsedFamilyMembers = Number(familyMembers);

  //console.log(typeof parsedFamilyMembers);
  console.log(parsedFamilyMembers);

  var name;
  var expenses;
  var expensesAverage;
  var expensesArray = [];
  var familyArray = [];

  for (var i = 1; i <= parsedFamilyMembers; i++) {
    name = window.prompt(`cuál es el nombre del integrante nro. ${[i]}?`);
    //console.log(typeof name);
    while(name == "" || !isNaN(name)){
      alert('debes completar con el nombre del integrante');
      name = window.prompt(`cuál es el nombre del integrante nro. ${[i]}?`);
    }
    expenses = window.prompt(`cuáles son los gastos de ${name}?`);
    while(isNaN(expenses)){
      alert('debes completar los gastos en formato de número');
      expenses = window.prompt(`cuáles son los gastos de ${name}?`);
    }

  familyArray.push({nombre:name, gastos:expenses});
  console.log(familyArray);

  expensesArray.push(Number(expenses));

  var totalExpenses = expensesArray.reduce(function (acum, expenses){
    return acum + expenses;
  });

  expensesAverage = totalExpenses/expensesArray.length;
  var highestExpenses = (Math.max(...expensesArray));
  var lowestExpenses = (Math.min(...expensesArray));

  var highestExpensesMember = familyArray.find(function(member){
    return member.gastos == highestExpenses;

  });

  var lowestExpensesMember = familyArray.find(function(member){
    return member.gastos == lowestExpenses;
  });

  highestExpensesMember = JSON.stringify(highestExpensesMember.nombre);
  lowestExpensesMember = JSON.stringify(lowestExpensesMember.nombre);
  totalExpenses=  JSON.stringify(totalExpenses);
  expensesAverage =  JSON.stringify(expensesAverage);

  }

  var ul = document.createElement('ul');

  var lis = document.createElement('li');
  lis.innerHTML= `El miembro que más gasta es ${highestExpensesMember}`;
  ul.append(lis);

  var lis = document.createElement('li');
  lis.innerHTML= `El miembro que menos gasta es ${lowestExpensesMember}`;
  ul.append(lis);

  var lis = document.createElement('li');
  lis.innerText=`El total de los gastos es ${totalExpenses}`;
  ul.append(lis);

  var lis = document.createElement('li');
  lis.innerText=`El porcentaje de los gastos es ${expensesAverage}`;
  ul.append(lis);

  body.append(ul);

  if(highestExpenses > 1200){
    var button = document.createElement('button');
    button.innerHTML = "la familia se pasó del presupuesto menusal";
    body.append(button);

    var helperDiv = document.createElement('div');
    helperDiv.innerText="Si vas al Día ahorras más"
    body.append(helperDiv);
    helperDiv.style.display="none";
    helperDiv.style.height="50px";
    helperDiv.style.width="200px";
    helperDiv.style.background="red";
    helperDiv.style.textAlign="center";

    button.addEventListener('mouseover', function () {
      helperDiv.style.display="block";
      setTimeout(function(){ helperDiv.style.display="none" }, 3000);

    });
  }

  window.addEventListener('keydown', function(event) {
    var q = event.keyCode;
    if(q == 81) {  // código teclado de q
    alert ("presionaste la tecla secreta q");
  }
  });

}
