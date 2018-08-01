(function () {
    "use strict";
    
    var regalo = document.getElementById('regalo');
    var regalo = document.getElementById('regalo');
    document.addEventListener('DOMContentLoaded', function () {
      //Seleccionamos elemento por id       Campos Datos Usuario
      var nombre = document.getElementById('nombre');
      var apellido = document.getElementById('apellido');
      var email = document.getElementById('email');
      //Campos PAses
      var pase_dia = document.getElementById('pase_dia');
      var pase_dosdias = document.getElementById('pase_dosdias');
      var pase_completo = document.getElementById('pase_completo');
      //botones y div
      var calcular = document.getElementById('calcular');
      var errordiv = document.getElementById('error');
      var botonRegistro = document.getElementById('btnRegistro');
      var lista_productos = document.getElementById('lista-productos')
      var suma = document.getElementById('suma-total');
      


      //regalos
      // var camisas = document.getElementById('camisa-evento');
      var etiquetas = document.getElementById('etiquetas');

      calcular.addEventListener('click', calcularMontos); //capturo el evento click
      pase_dia.addEventListener('blur', mostrarDias);// evento que guarda el valor introducido en el input
      pase_dosdias.addEventListener('blur', mostrarDias);
      pase_completo.addEventListener('blur', mostrarDias);

      function calcularMontos(event){
        event.preventDefault();
        if(regalo.value == '') {  // funcion que confirma seleccion del regalo (value igual a nada = alert!)
          alert("Debes elegir un regalo");
          regalo.focus();
        } else {
          var boletosDia = pase_dia.value, // var que calcula la cantidad de tickets
              boletos2Dias = pase_dosdias.value,
              boletoCompleto = pase_completo.value,
              // cantCamisas = camisas.value,
              cantEtiquetas = etiquetas.value;
          
          var totalPagar = (boletosDia * 30) + (boletos2Dias * 45) + (boletoCompleto * 50) + (cantEtiquetas * 2);
          
          
          var listadoProductos = new Array();
          var esp = "";
          if(boletosDia >=1){ // valido form para que no entren valores igual a cero
            listadoProductos.push(boletosDia + 'Ticket por un día');
          }
          if(boletos2Dias >=1){
            listadoProductos.push(boletos2Dias + 'Ticket por dos días');
          }
          if(boletoCompleto >=1){
            listadoProductos.push(boletoCompleto + 'Ticket completo');
          }
          if(cantEtiquetas >=1){
            listadoProductos.push(cantEtiquetas + 'Etiquetas');
          }
          lista_productos.innerHTML = ''; // pinto en pantalla lista productos
          for(var i = 0; i< listadoProductos.length; i++) {
            lista_productos.innerHTML += listadoProductos[i] +'<br/>';
          }
         suma.innerHTML = "€" + totalPagar.toFixed(2); // pinto el total, uso toFixed 2 para un máximo de dos decimales (evita problemas al realizar cobros por tarjetas)

                                                              

        }
      }
      function mostrarDias(){
        var boletosDia = pase_dia.value, // var que calcula la cantidad de tickets
              boletos2Dias = pase_dosdias.value,
              boletoCompleto = pase_completo.value;

              var diasElegidos = new Array (); //array que recorre los dias para hacer un display = block a los dias que no correspondan en la seleccion
              if(boletosDia > 0){
                  diasElegidos.push('viernes');
                  console.log(diasElegidos);
                }
              if(boletos2Dias>0) {
                  diasElegidos.push('viernes', 'sabado');
                  console.log(diasElegidos);
              }
              if(boletoCompleto>0) {    
                  diasElegidos.push('viernes', 'sabado', 'domingo');
                  console.log(diasElegidos);
              }
              for(var i = 0; i < diasElegidos.length; i++) {
                document.getElementById(diasElegidos[i]).style.display = 'block';
              }
              
            }

            }
      
      );
    })(); 