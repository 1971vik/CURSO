var btn = document.getElementById('btn_cargar_usuarios');
var laoder = document.getElementById('loader');

btn.addEventListener('click', function(){
    var peticion = new XMLHttpRequest();
	//peticion.open('GET', 'http://www.json-generator.com/api/json/get/cpykqHDfjC?indent=2');
     peticion.open('GET', 'php/leer-datos.php');

    loader.classList.add('active');

    peticion.onload = function(){
      //console.log(JSON.parse(peticion.responseText));
      var datos = JSON.parse(peticion.responseText);

      for(var i = 0; i < datos.length; i++){
      var elemento = document.createElement('tr');
             elemento.innerHTML += ("<td>" + datos[i].id + "</td>");
             elemento.innerHTML += ("<td>" + datos[i].nombre + "</td>");
              elemento.innerHTML += ("<td>" + datos[i].edad + "</td>");
              elemento.innerHTML += ("<td>" + datos[i].pais + "</td>");
              elemento.innerHTML += ("<td>" + datos[i].correo + "</td>");
             elemento.innerHTML += ("<td>" + datos[i].telefono + "</td>");
          document.getElementById('tabla').appendChild(elemento);

      }

     // datos.forEach(persona => {
          // var elemento = document.createElement('tr');
           //  elemento.innerHTML += ("<td>" + persona.id + "</td>");
           //  elemento.innerHTML += ("<td>" + persona.nombre + "</td>");
            //  elemento.innerHTML += ("<td>" + persona.edad + "</td>");
            //  elemento.innerHTML += ("<td>" + persona.pais + "</td>");
            //  elemento.innerHTML += ("<td>" + persona.correo + "</td>");
           //  elemento.innerHTML += ("<td>" + persona.telefono + "</td>");
         // document.getElementById('tabla').appendChild(elemento);
     // });
    }

    peticion.onreadystatechange = function(){
    	if(peticion.readyState == 4 && peticion.status == 200){
    		loader.classList.remove('active');
    	}


    }
	peticion.send();
});


