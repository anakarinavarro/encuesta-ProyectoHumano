let dirigirSolucion = 0;
let entrenarSolucion = 0;
let apoyarSolucion = 0;
let delegarSolucion = 0;

let personalidad = 1;
let resultadoPersonalidadUno;
let resultadoPersonalidadDos;
let resultadoPersonalidadTres;
let resultadoPersonalidadCuatro;
let resultadoPersonalidadCinco;
let resultadoPersonalidadSeis;
let resultadoPersonalidadSiete;
let resultadoPersonalidadOcho;
let resultadoPersonalidadNueve;
let resultadoPersonalidadDiez;
let resultadoPersonalidadOnce;
let resultadoPersonalidadDoce;
let textoPersonalidad;

// Variables de campos
    const nombre = document.getElementById("firstName").value;
    const apellido = document.getElementById("lastName").value;
    const correoElectronico = document.getElementById("email").value;
let respuestaUno = document.getElementsByName("respuestaUno");
let respuestaDos = document.getElementsByName("respuestaDos");
let respuestaTres = document.getElementsByName("respuestaTres");
let respuestaCuatro = document.getElementsByName("respuestaCuatro");
let respuestaCinco = document.getElementsByName("respuestaCinco");
let respuestaSeis = document.getElementsByName("respuestaSeis");
let respuestaSiete = document.getElementsByName("respuestaSiete");
let respuestaOcho = document.getElementsByName("respuestaOcho");
let respuestaNueve = document.getElementsByName("respuestaNueve");
let respuestaDiez = document.getElementsByName("respuestaDiez");
let respuestaOnce = document.getElementsByName("respuestaOnce");
let respuestaDoce = document.getElementsByName("respuestaDoce");
const botonAgregar = document.getElementById('botonAgregar');
const contenedorDatos = document.getElementById('contenedorDatos');
const contenedorp1 = document.getElementById('pregunta1');
const contenedorp2 = document.getElementById('pregunta2');
const contenedorp3 = document.getElementById('pregunta3');
const contenedorp4 = document.getElementById('pregunta4');
const contenedorp5 = document.getElementById('pregunta5');
const contenedorp6 = document.getElementById('pregunta6');
const contenedorp7 = document.getElementById('pregunta7');
const contenedorp8 = document.getElementById('pregunta8');
const contenedorp9 = document.getElementById('pregunta9');
const contenedorp10 = document.getElementById('pregunta10');
const contenedorp11 = document.getElementById('pregunta11');
const contenedorp12= document.getElementById('pregunta12');

botonAgregar.addEventListener("click", function (event) {
    event.preventDefault();
    const nombre = document.getElementById("firstName").value;
    const apellido = document.getElementById("lastName").value;
    const correoElectronico = document.getElementById("email").value;
    if (nombre == "" || apellido == "" || correoElectronico == "" ) {
        alert("Los datos personales son obligatorios.");
        contenedorDatos.classList.add("error");
        return
    }
/////////////////
    let aRadios1 = document.getElementsByName("respuestaUno");
    let radioActivo1 = null;

    for( var contador=0; contador < aRadios1.length; contador++ )
    {
        if( aRadios1[contador].checked == true )
            radioActivo1 = aRadios1[contador].value;
    }

    if( radioActivo1 == null ){
        alert("falta contestar la pregunta 1");
        contenedorp1.classList.add("error");
        return
    }
 /////////////////   
    let aRadios2 = document.getElementsByName("respuestaDos");
    let radioActivo2 = null;

    for( var contador=0; contador < aRadios2.length; contador++ )
    {
        if( aRadios2[contador].checked == true )
            radioActivo2 = aRadios2[contador].value;
    }

    if( radioActivo2 == null ){
        alert("falta contestar la pregunta 2");
        contenedorp2.classList.add("error");
        return
    }
/////////////////
    let aRadios3 = document.getElementsByName("respuestaTres");
    let radioActivo3 = null;

    for( var contador=0; contador < aRadios3.length; contador++ )
    {
        if( aRadios3[contador].checked == true )
            radioActivo3 = aRadios2[contador].value;
    }

    if( radioActivo3 == null ){
        alert("falta contestar la pregunta 3");
        contenedorp3.classList.add("error");
        return
    }
/////////////////
    let aRadios4 = document.getElementsByName("respuestaCuatro");
    let radioActivo4 = null;

    for( var contador=0; contador < aRadios4.length; contador++ )
    {
        if( aRadios4[contador].checked == true )
            radioActivo4 = aRadios4[contador].value;
    }

    if( radioActivo4 == null ){
        alert("falta contestar la pregunta 4");
        contenedorp4.classList.add("error");
        return
    }
/////////////////
    let aRadios5 = document.getElementsByName("respuestaCinco");
    let radioActivo5 = null;

    for( var contador=0; contador < aRadios5.length; contador++ )
    {
        if( aRadios5[contador].checked == true )
            radioActivo5 = aRadios5[contador].value;
    }

    if( radioActivo5 == null ){
        alert("falta contestar la pregunta 5");
        contenedorp5.classList.add("error");
        return
    }
/////////////////
    let aRadios6 = document.getElementsByName("respuestaSeis");
    let radioActivo6 = null;

    for( var contador=0; contador < aRadios6.length; contador++ )
    {
        if( aRadios6[contador].checked == true )
            radioActivo6 = aRadios6[contador].value;
    }

    if( radioActivo6 == null ){
        alert("falta contestar la pregunta 6");
        contenedorp6.classList.add("error");
        return
    }
/////////////////
    let aRadios7 = document.getElementsByName("respuestaSiete");
    let radioActivo7 = null;

    for( var contador=0; contador < aRadios7.length; contador++ )
    {
        if( aRadios7[contador].checked == true )
            radioActivo7 = aRadios7[contador].value;
    }

    if( radioActivo7 == null ){
        alert("falta contestar la pregunta 7");
        contenedorp7.classList.add("error");
        return
    }
/////////////////
    let aRadios8 = document.getElementsByName("respuestaOcho");
    let radioActivo8 = null;

    for( var contador=0; contador < aRadios8.length; contador++ )
    {
        if( aRadios8[contador].checked == true )
            radioActivo8 = aRadios8[contador].value;
    }

    if( radioActivo8 == null ){
        alert("falta contestar la pregunta 8");
        contenedorp8.classList.add("error");
        return
    }
/////////////////
    let aRadios9 = document.getElementsByName("respuestaNueve");
    let radioActivo9 = null;

    for( var contador=0; contador < aRadios9.length; contador++ )
    {
        if( aRadios9[contador].checked == true )
            radioActivo9 = aRadios9[contador].value;
    }

    if( radioActivo9 == null ){
        alert("falta contestar la pregunta 9");
        contenedorp9.classList.add("error");
        return
    }
/////////////////
    let aRadios10 = document.getElementsByName("respuestaDiez");
    let radioActivo10 = null;

    for( var contador=0; contador < aRadios10.length; contador++ )
    {
        if( aRadios10[contador].checked == true )
            radioActivo10 = aRadios10[contador].value;
    }

    if( radioActivo10 == null ){
        alert("falta contestar la pregunta 10");
        contenedorp10.classList.add("error");
        return
    }
/////////////////
    let aRadios11 = document.getElementsByName("respuestaOnce");
    let radioActivo11 = null;

    for( var contador=0; contador < aRadios11.length; contador++ )
    {
        if( aRadios11[contador].checked == true )
            radioActivo11 = aRadios11[contador].value;
    }

    if( radioActivo11 == null ){
        alert("falta contestar la pregunta 11");
        contenedorp11.classList.add("error");
        return
    }
/////////////////
    let aRadios12 = document.getElementsByName("respuestaDoce");
    let radioActivo12 = null;

    for( var contador=0; contador < aRadios12.length; contador++ )
    {
        if( aRadios12[contador].checked == true )
            radioActivo12 = aRadios11[contador].value;
    }

    if( radioActivo12 == null ){
        alert("falta contestar la pregunta 12");
        contenedorp12.classList.add("error");
        return
    }






    for (let i = 0; i < respuestaUno.length; i++) {
        if (respuestaUno[i].checked == true) {
            respuestaUno[i].value;
            if (respuestaUno[i].value == "A") {
                dirigirSolucion++;
                resultadoPersonalidadUno = (personalidad * 2);
            } else if (respuestaUno[i].value == "B") {
                apoyarSolucion++;
                resultadoPersonalidadUno = personalidad * (-1);
            } else if (respuestaUno[i].value == "C") {
                entrenarSolucion++;
                resultadoPersonalidadUno = personalidad * 1;
            } else if (respuestaUno[i].value == "D") {
                delegarSolucion++;
                resultadoPersonalidadUno = personalidad * (-2);
            } 
        }
    }

    for (let i = 0; i < respuestaDos.length; i++) {
        if (respuestaDos[i].checked == true) {
            respuestaDos[i].value;
            if (respuestaDos[i].value == "A") {
                entrenarSolucion++;
                resultadoPersonalidadDos = personalidad * (2);
            } else if (respuestaDos[i].value == "B") {
                delegarSolucion++;
                resultadoPersonalidadDos = personalidad * -2;
            } else if (respuestaDos[i].value == "C") {
                apoyarSolucion++;
                resultadoPersonalidadDos = personalidad * (1);
            } else if (respuestaDos[i].value == "D") {
                dirigirSolucion++;
                resultadoPersonalidadDos = personalidad * (-1);
            }
        }
    }

    for (let i = 0; i < respuestaTres.length; i++) {
        if (respuestaTres[i].checked == true) {
            respuestaTres[i].value;
            if (respuestaTres[i].value == "A") {
                entrenarSolucion++;
                resultadoPersonalidadTres = personalidad * (1);
            } else if (respuestaTres[i].value == "B") {
                delegarSolucion++;
                resultadoPersonalidadTres = personalidad * (-1);
            } else if (respuestaTres[i].value == "C") {
                dirigirSolucion++;
                resultadoPersonalidadTres = personalidad * -2;
            } else if (respuestaTres[i].value == "D") {
                apoyarSolucion++;
                resultadoPersonalidadTres = personalidad * (2);
            }
        }
    }

    for (let i = 0; i < respuestaCuatro.length; i++) {
        if (respuestaCuatro[i].checked == true) {
            respuestaCuatro[i].value;
            if (respuestaCuatro[i].value == "A") {
                apoyarSolucion++;
                resultadoPersonalidadCuatro = personalidad * (1);
            } else if (respuestaCuatro[i].value == "B") {
                dirigirSolucion++;
                resultadoPersonalidadCuatro = personalidad * (-2);
            } else if (respuestaCuatro[i].value == "C") {
                delegarSolucion++;
                resultadoPersonalidadCuatro = personalidad * 2;
            } else if (respuestaCuatro[i].value == "D") {
                entrenarSolucion++;
                resultadoPersonalidadCuatro = personalidad * (-1);
            }
        }
    }

    for (let i = 0; i < respuestaCinco.length; i++) {
        if (respuestaCinco[i].checked == true) {
            respuestaCinco[i].value;
            if (respuestaCinco[i].value == "A") {
                delegarSolucion++;
                resultadoPersonalidadCinco = personalidad * (-2);
            } else if (respuestaCinco[i].value == "B") {
                entrenarSolucion++;
                resultadoPersonalidadCinco = personalidad * (1);
            } else if (respuestaCinco[i].value == "C") {
                dirigirSolucion++;
                resultadoPersonalidadCinco = personalidad * 2;
            } else if (respuestaCinco[i].value == "D") {
                apoyarSolucion++;
                resultadoPersonalidadCinco = personalidad * (-1);
            }
        }
    }

    for (let i = 0; i < respuestaSeis.length; i++) {
        if (respuestaSeis[i].checked == true) {
            respuestaSeis[i].value;
            if (respuestaSeis[i].value == "A") {
                apoyarSolucion++;
                resultadoPersonalidadSeis = personalidad * (-1);
            } else if (respuestaSeis[i].value == "B") {
                dirigirSolucion++;
                resultadoPersonalidadSeis = personalidad * (1);
            } else if (respuestaSeis[i].value == "C") {
                delegarSolucion++;
                resultadoPersonalidadSeis = personalidad * (-2);
            } else if (respuestaSeis[i].value == "D") {
                entrenarSolucion++;
                resultadoPersonalidadSeis = personalidad * (2);
            }
        }
    }

    for (let i = 0; i < respuestaSiete.length; i++) {
        if (respuestaSiete[i].checked == true) {
            respuestaSiete[i].value;
            if (respuestaSiete[i].value == "A") {
                dirigirSolucion++;
                resultadoPersonalidadSiete = personalidad * (-2);
            } else if (respuestaSiete[i].value == "B") {
                apoyarSolucion++;
                resultadoPersonalidadSiete = personalidad * (2);
            } else if (respuestaSiete[i].value == "C") {
                entrenarSolucion++;
                resultadoPersonalidadSiete = personalidad * (-1);
            } else if (respuestaSiete[i].value == "D") {
                delegarSolucion++;
                resultadoPersonalidadSiete = personalidad * (1);
            }
        }
    }

    for (let i = 0; i < respuestaOcho.length; i++) {
        if (respuestaOcho[i].checked == true) {
            respuestaOcho[i].value;
            if (respuestaOcho[i].value == "A") {
                delegarSolucion++;
                resultadoPersonalidadOcho = personalidad * (2);
            } else if (respuestaOcho[i].value == "B") {
                entrenarSolucion++;
                resultadoPersonalidadOcho = personalidad * (-1);
            } else if (respuestaOcho[i].value == "C") {
                dirigirSolucion++;
                resultadoPersonalidadOcho = personalidad * (-2);
            } else if (respuestaOcho[i].value == "D") {
                apoyarSolucion++;
                resultadoPersonalidadOcho = personalidad * (1);
            }
        }
    }

    for (let i = 0; i < respuestaNueve.length; i++) {
        if (respuestaNueve[i].checked == true) {
            respuestaNueve[i].value;
            if (respuestaNueve[i].value == "A") {
                delegarSolucion++;
                resultadoPersonalidadNueve = personalidad * (-2);
            } else if (respuestaNueve[i].value == "B") {
                entrenarSolucion++;
                resultadoPersonalidadNueve = personalidad * (1);
            } else if (respuestaNueve[i].value == "C") {
                dirigirSolucion++;
                resultadoPersonalidadNueve = personalidad * 2;
            } else if (respuestaNueve[i].value == "D") {
                apoyarSolucion++;
                resultadoPersonalidadNueve = personalidad * (-1);
            }
        }
    }

    for (let i = 0; i < respuestaDiez.length; i++) {
        if (respuestaDiez[i].checked == true) {
            respuestaDiez[i].value;
            if (respuestaDiez[i].value == "A") {
                apoyarSolucion++;
                resultadoPersonalidadDiez = personalidad * (1);
            } else if (respuestaDiez[i].value == "B") {
                dirigirSolucion++;
                resultadoPersonalidadDiez = personalidad * (-2);
            } else if (respuestaDiez[i].value == "C") {
                delegarSolucion++;
                resultadoPersonalidadDiez = personalidad * (-1);
            } else if (respuestaDiez[i].value == "D") {
                entrenarSolucion++;
                resultadoPersonalidadDiez = personalidad * (2);
            }
        }
    }

    for (let i = 0; i < respuestaOnce.length; i++) {
        if (respuestaOnce[i].checked == true) {
            respuestaOnce[i].value;
            if (respuestaOnce[i].value == "A") {
                dirigirSolucion++;
                resultadoPersonalidadOnce = personalidad * (-2);
            } else if (respuestaOnce[i].value == "B") {
                apoyarSolucion++;
                resultadoPersonalidadOnce = personalidad * (2);
            } else if (respuestaOnce[i].value == "C") {
                entrenarSolucion++;
                resultadoPersonalidadOnce = personalidad * (-1);
            } else if (respuestaOnce[i].value == "D") {
                delegarSolucion++;
                resultadoPersonalidadOnce = personalidad * (1);
            }
        }
    }

    for (let i = 0; i < respuestaDoce.length; i++) {
        if (respuestaDoce[i].checked == true) {
            respuestaDoce[i].value;
            if (respuestaDoce[i].value == "A") {
                entrenarSolucion++;
                resultadoPersonalidadDoce = personalidad * (-1);
            } else if (respuestaDoce[i].value == "B") {
                delegarSolucion++;
                resultadoPersonalidadDoce = personalidad * (2);
            } else if (respuestaDoce[i].value == "C") {
                dirigirSolucion++;
                resultadoPersonalidadDoce = personalidad * (-2);
            } else if (respuestaDoce[i].value == "D") {
                apoyarSolucion++;
                resultadoPersonalidadDoce = personalidad * (1);
            }
        }
    }            
    

    let textoPersonalidad = "texto";
    function sumaPersonalidad(suma) {
        if (suma <= (-17)) {
            textoPersonalidad = "Infelxible";
        } else if (suma <= (-9) && suma >= (-16)) {
            textoPersonalidad = "Dificilmente Flexible";
        } else if (suma <= (-1) && suma >= (-8)) {
            textoPersonalidad = "Ocacionalmente Flexible";
        } else if (suma <= (8) && suma >= (0)) {
            textoPersonalidad = "Moderadamente Flexible";
        } else if (suma <= (16) && suma >= (9)) {
            textoPersonalidad = "Flexible";
        } else if (suma >= (17)) {
            textoPersonalidad = "Muy Flexible";
        }
    }
    let suma = resultadoPersonalidadUno + resultadoPersonalidadDos + resultadoPersonalidadTres + resultadoPersonalidadCuatro + resultadoPersonalidadCinco + resultadoPersonalidadSeis + resultadoPersonalidadSiete + resultadoPersonalidadOcho + resultadoPersonalidadNueve + resultadoPersonalidadDiez + resultadoPersonalidadOnce + resultadoPersonalidadDoce;

    sumaPersonalidad(suma);

    console.log(dirigirSolucion, apoyarSolucion, entrenarSolucion, delegarSolucion);
    console.log(suma);
    let sumaLiderazgo = dirigirSolucion + apoyarSolucion + entrenarSolucion + delegarSolucion;
    let porcentajeDirigir = ((dirigirSolucion * 100) / sumaLiderazgo).toFixed(0);
    let porcentajeEntrenar = ((entrenarSolucion * 100) / sumaLiderazgo).toFixed(0);
    let porcentajeApoyar = ((apoyarSolucion * 100) / sumaLiderazgo).toFixed(0);
    let porcentajeDelegar = ((delegarSolucion * 100) / sumaLiderazgo).toFixed(0);


    console.log(porcentajeDirigir);
    console.log(porcentajeEntrenar);
    console.log(porcentajeApoyar);
    console.log(porcentajeDelegar);


    const contenido = document.getElementById("contenido").innerHTML = (`
    <p>Hola ${nombre} ${apellido}, <br>
    gracias por contestar esta encuesta.</p>
    <p><strong>Los resultados son:</strong>
    </p>
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Dirigir
            <span class="badge rounded-pill" style="background-color: #B35751; color: #FFF !important;">${porcentajeDirigir}%</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Entrenar
            <span class="badge rounded-pill" style="background-color: #A2B966;color: #FFF !important;">${porcentajeEntrenar}%</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Apoyar
            <span class="badge rounded-pill" style="background-color: #64AAC3;color: #FFF !important;">${porcentajeApoyar}%</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Delegar
            <span class="badge rounded-pill" style="background-color: #7B669E;color: #FFF !important;">${porcentajeDelegar}%</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
        Tu Flexibilidad para Liderar es:
            <span class="badge bg-primary rounded-pill" id="perso">${textoPersonalidad}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <p style="font-size: 16px;
    color: #333;
    font-weight: bold;">Para una óptima interpretación de estos resultados, le sugerimos revisarlos con el facilitador</p>
        </li>
    </ul>
    <div class="alert alert-info mt-4" role="alert">
      <small class="info" style="font-size: 12px;">Hemos enviado los resultados al correo <strong> ${correoElectronico} </strong><br> te recomendamos revisar tu bandeja de spam si no recibes el correo</small>
    </div>
      
    `);

    const ctx = document.getElementById('myChart');

    const myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Dirigir', 'Entrenar', 'Apoyar', 'Delegar'],
            datasets: [{
                label: 'Resultados Liderazgo',
                data: [porcentajeDirigir, porcentajeEntrenar, porcentajeApoyar, porcentajeDelegar],
                backgroundColor: [
                    '#B35751',
                    '#A2B966',
                    '#64AAC3',
                    '#7B669E'
                ],
                borderColor: [
                    '#B35751',
                    '#A2B966',
                    '#64AAC3',
                    '#7B669E'
                ],
                borderWidth: 1
            }]
        },

    });

    ocultarFormulario();
    mostrarResultado();
    
let numero = document.f1.f1t1.value = textoPersonalidad;
let $dirigir = document.f1.diri.value = porcentajeDirigir;
let $entrenar = document.f1.entre.value = porcentajeEntrenar;
let $apoyar = document.f1.apoy.value = porcentajeApoyar;
let $delegar = document.f1.dele.value = porcentajeDelegar;
    
    
    const ruta ="nombre="+nombre+"&apellido="+apellido+"&email="+correoElectronico+"&personalidad="+textoPersonalidad+"&dirigir="+porcentajeDirigir+"&entrenar="+porcentajeEntrenar+"&apoyar="+porcentajeApoyar+"&delegar="+porcentajeDelegar;
        
     $.ajax({
         url: 'enviar3.php',
         type: 'POST',
         data: ruta,
     })
     .done(function(res){
         console.log("Enviado")
         $('#respuesta').html(res)
     })
     .fail(function(){
         console.log("error")
     })
    


});


//Codigo para ocultar y mostrar
function ocultarFormulario() {
    const formularioContenedor = document.getElementById('formularioContenedor');
    formularioContenedor.style.display = 'none';
}

function mostrarResultado() {
    const resultadoEncuesta = document.getElementById('resultadoEncuesta');
    resultadoEncuesta.style.display = 'block';
}