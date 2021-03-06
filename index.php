<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <title>Cuestionario Habilidades Gerenciales y Liderazgo</title>
    <link rel="stylesheet" href="assets/style.css">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@100;300;400;600;700&display=swap" rel="stylesheet">

  </head>
  <body class="bg-light">
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <img class="d-block mx-auto my-4" src="assets/brand/logo.jpeg" alt="" style="width: 130px;">
            </div>
        </div>
    </div>
</header>
<div class="container">
  <main>
    <div class="row g-5 justify-content-md-center">
        <div class="col-md-9">
            <div class="pt-5 pb-0 text-center">
            <h1>Cuestionario Habilidades Gerenciales y Liderazgo </h1>
            </div>
        </div>
    </div>

    <div id="formularioContenedor" class="row g-5 justify-content-md-center">
      <div class="col-md-9">
        <form id="formulario" class="needs-validation" method="post">
        <div class="card border-secondary my-5 p-3 p-md-5" id="contenedorDatos">  
          <h4 class="mb-3">Datos Personales</h4>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nombre <span class="text-muted">(*)</span></label>
              <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Ingrese su nombre" value="" required>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Apellido <span class="text-muted">(*)</span></label>
              <input type="text" class="form-control"  name="lastName" id="lastName" placeholder="Ingrese su Apellido" value="" required>
            </div>
            <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-muted">(*)</span></label>
                <input type="email" class="form-control" id="email" placeholder="Ejemplo: tuemail@mail.cl" value="" required>
              </div>
          </div>
          
        </div>
        <div class="card border-secondary my-5">
            <div class="card-header"><strong>Instrucciones:</strong> </div>
            <div class="card-body text-secondary">
            <p class="card-text text-md-start text-sm-center">
                
                
Para responder la siguiente encuesta, es necesario que usted imagine que est?? dirigiendo un grupo de trabajo y se encuentra involucrado en cada una de las siguientes situaciones. Cada una de ??stas tiene cuatro alternativas de posibles acciones que puede emprender.<br><br>
Lea cuidadosamente cada punto. Seleccione la alternativa que mejor describe su comportamiento habitual ante situaciones similares. No responda de acuerdo con lo que se deber??a hacer, sino <strong>???LO QUE USTED SUELE HACER???</strong>. Se trata de obtener una "fotograf??a" de su propio estilo.
            </p>
            </div>
        </div>
<!--Pregunta 1-->
        <div class="card border-secondary my-5">
            <div class="card-header"><strong>Pregunta 1</strong></div>
            <div class="card-body text-secondary">
                <h5>Situaci??n</h5>
                <p>??ltimamente sus colaboradores no responden a su trato amistoso y a su obvia preocupaci??n por el bienestar de ellos.
El rendimiento desciende r??pidamente.
                  </p>
                  <h5>ACCIONES ALTERNATIVAS</h5>
                <div class="my-3" id="pregunta1">
                  <div class="form-check">
                    <input id="A1" name="respuestaUno" type="radio" class="form-check-input" value="A" required>
                    <label class="form-check-label" for="A1"><strong>A</strong> Dar??a importancia al uso de procedimientos uniformes y a la necesidad de cumplir con la tarea.</label>
                  </div>
                  <div class="form-check">
                    <input id="B1" name="respuestaUno" type="radio" class="form-check-input" value="B"required>
                    <label class="form-check-label" for="B1"><strong>B</strong> Estar??a disponible para discutir el asunto, pero sin presionar.</label>
                  </div>
                  <div class="form-check">
                    <input id="C1" name="respuestaUno" type="radio" class="form-check-input" value="C"required>
                    <label class="form-check-label" for="C1"><strong>C</strong> Hablar??a con los colaboradores para luego fijar metas.
</label>
                  </div>
                  <div class="form-check">
                      <input id="D1" name="respuestaUno" type="radio" class="form-check-input" value="D" required>
                      <label class="form-check-label" for="D1"><strong>D</strong> No intervendr??a.</label>
                    </div>
                </div>
            </div>
        </div>
 <!--Fin pregunta 1-->
 <!--Pregunta 2-->
        <div class="card border-secondary my-5">
            <div class="card-header"><strong>Pregunta 2</strong></div>
            <div class="card-body text-secondary">
                <h5>Situaci??n</h5>
                <p>El rendimiento observable del grupo va en aumento. Se ha asegurado que todos los miembros est??n conscientes de sus responsabilidades y de los niveles de rendimiento que se espera de ellos.
           
                </p>
                <h5>ACCIONES ALTERNATIVAS</h5>
                <div class="my-3" id="pregunta2">
                    <div class="form-check">
                      <input id="A2" name="respuestaDos" type="radio" class="form-check-input" value="A" required>
                      <label class="form-check-label" for="A2"><strong>A</strong> Crear??a una relaci??n cordial, pero asegur??ndome que todos los miembros est??n conscientes de sus responsabilidades y niveles de rendimiento.</label>
                    </div>
                    <div class="form-check">
                      <input id="B2" name="respuestaDos" type="radio" class="form-check-input" value="B"required>
                      <label class="form-check-label" for="B2"><strong>B</strong> No realizar??a ninguna acci??n determinada.</label>
                    </div>
                    <div class="form-check">
                      <input id="C2" name="respuestaDos" type="radio" class="form-check-input" value="C"required>
                      <label class="form-check-label" for="C2"><strong>C</strong> Har??a lo que pudiera para que el grupo se sintiera importante.</label>
                    </div>
                    <div class="form-check">
                        <input id="D2" name="respuestaDos" type="radio" class="form-check-input" value="D" required>
                        <label class="form-check-label" for="D2"><strong>D</strong> Insistir??a en la importancia de los plazos l??mites para los trabajos y tareas.</label>
                      </div>
                  </div>
            </div>
        </div>
<!--Fin pregunta 2-->
 <!--Pregunta 3-->
        <div class="card border-secondary my-5">
            <div class="card-header"><strong>Pregunta 3</strong></div>
            <div class="card-body text-secondary">
                <h5>Situaci??n</h5>
                <p> Los miembros de su grupo no han podido solucionar un problema por s?? solos. El rendimiento del grupo y las relaciones interpersonales han sido buenas en el pasado.
           
                </p>
                <h5>ACCIONES ALTERNATIVAS</h5>
                <div class="my-3" id="pregunta3">
                    <div class="form-check">
                      <input id="A3" name="respuestaTres" type="radio" class="form-check-input" value="A" required>
                      <label class="form-check-label" for="A3"><strong>A</strong> Involucrar??a al grupo y juntos tratar??amos de solucionar los problemas.</label>
                    </div>
                    <div class="form-check">
                      <input id="B3" name="respuestaTres" type="radio" class="form-check-input" value="B"required>
                      <label class="form-check-label" for="B3"><strong>B</strong> Dejar??a que el grupo lo resuelva solo.</label>
                    </div>
                    <div class="form-check">
                      <input id="C3" name="respuestaTres" type="radio" class="form-check-input" value="C"required>
                      <label class="form-check-label" for="C3"><strong>C</strong> Actuar??a r??pida y firmemente para corregir la situaci??n y dirigir al grupo. </label>
                    </div>
                    <div class="form-check">
                        <input id="D3" name="respuestaTres" type="radio" class="form-check-input" value="D" required>
                        <label class="form-check-label" for="D3"><strong>D</strong> Estimular??a al grupo a trabajar en el problema y estar??a dispuesto a sostener cualquiera conversaci??n.</label>
                      </div>
                  </div>
            </div>
        </div>
<!--Fin pregunta 3-->
 <!--Pregunta 4-->
 <div class="card border-secondary my-5">
    <div class="card-header"><strong>Pregunta 4</strong></div>
    <div class="card-body text-secondary">
        <h5>Situaci??n</h5>
        <p>
            Est?? considerando un cambio. Sus colaboradores tienen excelentes antecedentes por sus logros. Ellos respetan la necesidad del cambio.
            </p>
        <h5>ACCIONES ALTERNATIVAS</h5>
        <div class="my-3" id="pregunta4">
            <div class="form-check">
              <input id="A4" name="respuestaCuatro" type="radio" class="form-check-input" value="A" required>
              <label class="form-check-label" for="A4"><strong>A</strong> Permitir??a que el grupo se involucre en el desarrollo del cambio, acompa??ando el proceso. </label>
            </div>
            <div class="form-check">
              <input id="B4" name="respuestaCuatro" type="radio" class="form-check-input" value="B"required>
              <label class="form-check-label" for="B4"><strong>B</strong> Comunicar??a los cambios y luego har??a que se cumplieran bajo una estricta supervisi??n. </label>
            </div>
            <div class="form-check">
              <input id="C4" name="respuestaCuatro" type="radio" class="form-check-input" value="C"required>
              <label class="form-check-label" for="C4"><strong>C</strong> Permitir??a que el grupo formule su propia direcci??n.  </label>
            </div>
            <div class="form-check">
                <input id="D4" name="respuestaCuatro" type="radio" class="form-check-input" value="D" required>
                <label class="form-check-label" for="D4"><strong>D</strong> Incorporar??a a la soluci??n las recomendaciones del grupo, pero dirigiendo personalmente todo.
                </label>
              </div>
          </div>
    </div>
</div>
<!--Fin pregunta 4-->
 <!--Pregunta 5-->
 <div class="card border-secondary my-5">
    <div class="card-header"><strong>Pregunta 5</strong></div>
    <div class="card-body text-secondary">
        <h5>Situaci??n</h5>
        <p>
            El rendimiento del grupo ha estado bajando en los ??ltimos meses. Sus miembros no se preocupan por lograr los objetivos. La redefinici??n de roles y responsabilidades ha ayudado en el pasado. Siempre ha tenido que recordarles que deben cumplir sus tareas a tiempo.</p>
        <h5>ACCIONES ALTERNATIVAS</h5>
        <div class="my-3" id="pregunta5">
            <div class="form-check">
              <input id="A5" name="respuestaCinco" type="radio" class="form-check-input" value="A" required>
              <label class="form-check-label" for="A5"><strong>A</strong> Permitir??a que el grupo formule su propia direcci??n.</label>
            </div>
            <div class="form-check">
              <input id="B5" name="respuestaCinco" type="radio" class="form-check-input" value="B"required>
              <label class="form-check-label" for="B5"><strong>B</strong> Incorporar??a a la soluci??n las recomendaciones del grupo, pero vigilando que se alcancen los objetivos.</label>
            </div>
            <div class="form-check">
              <input id="C5" name="respuestaCinco" type="radio" class="form-check-input" value="C"required>
              <label class="form-check-label" for="C5"><strong>C</strong> Redefinir??a los roles y responsabilidades y supervisar??a estrictamente.  </label>
            </div>
            <div class="form-check">
                <input id="D5" name="respuestaCinco" type="radio" class="form-check-input" value="D" required>
                <label class="form-check-label" for="D5"><strong>D</strong> Permitir??a que el grupo se involucre en la fijaci??n de metas, sin imponer mi punto de vista.

                </label>
              </div>
          </div>
    </div>
</div>
<!--Fin pregunta 5-->
 <!--Pregunta 6-->
 <div class="card border-secondary my-5">
    <div class="card-header"><strong>Pregunta 6</strong></div>
    <div class="card-body text-secondary">
        <h5>Situaci??n</h5>
        <p>Se ha incorporado a una organizaci??n donde las operaciones son eficientes. Su antecesor controlaba muy de cerca la situaci??n. Usted quiere mantener una situaci??n productiva, pero le gustar??a comenzar a humanizar el ambiente.</p>
        <h5>ACCIONES ALTERNATIVAS</h5>
        <div class="my-3" id="pregunta6">
            <div class="form-check">
              <input id="A6" name="respuestaSeis" type="radio" class="form-check-input" value="A" required>
              <label class="form-check-label" for="A6"><strong>A</strong> Har??a lo que pudiera para que el grupo se sintiera importante e involucrado en los asuntos. </label>
            </div>
            <div class="form-check">
              <input id="B6" name="respuestaSeis" type="radio" class="form-check-input" value="B"required>
              <label class="form-check-label" for="B6"><strong>B</strong> Dar??a importancia a los plazos l??mites para trabajos y tareas. </label>
            </div>
            <div class="form-check">
              <input id="C6" name="respuestaSeis" type="radio" class="form-check-input" value="C"required>
              <label class="form-check-label" for="C6"><strong>C</strong> No intervendr??a intencionalmente.</label>
            </div>
            <div class="form-check">
                <input id="D6" name="respuestaSeis" type="radio" class="form-check-input" value="D" required>
                <label class="form-check-label" for="D6"><strong>D</strong> Tratar??a que el grupo se involucre en la toma de decisiones, pero vigilar??a que se alcancen los objetivos. </label>
              </div>
          </div>
    </div>
</div>
<!--Fin pregunta 6-->
 <!--Pregunta 7-->
 <div class="card border-secondary my-5">
    <div class="card-header"><strong>Pregunta 7</strong></div>
    <div class="card-body text-secondary">
        <h5>Situaci??n</h5>
        <p>Est?? considerando algunos cambios importantes en la estructura organizativa. Los miembros del grupo han hecho sugerencias sobre la necesidad de cambio. El grupo ha sido productivo y ha demostrado flexibilidad en sus operaciones.</p>
        <h5>ACCIONES ALTERNATIVAS</h5>
        <div class="my-3" id="pregunta7">
            <div class="form-check">
              <input id="A7" name="respuestaSiete" type="radio" class="form-check-input" value="A" required>
              <label class="form-check-label" for="A7"><strong>A</strong> Definir??a el cambio y lo supervisar??a estrictamente. </label>
            </div>
            <div class="form-check">
              <input id="B7" name="respuestaSiete" type="radio" class="form-check-input" value="B"required>
              <label class="form-check-label" for="B7"><strong>B</strong>  Participar??a con el grupo en el desarrollo del cambio y dejar??a que los miembros organizaran su realizaci??n.</label>
            </div>
            <div class="form-check">
              <input id="C7" name="respuestaSiete" type="radio" class="form-check-input" value="C"required>
              <label class="form-check-label" for="C7"><strong>C</strong> Me mostrar??a dispuesto a hacer los cambios recomendados, pero mantendr??a el control de la realizaci??n de los mismos.</label>
            </div>
            <div class="form-check">
                <input id="D7" name="respuestaSiete" type="radio" class="form-check-input" value="D" required>
                <label class="form-check-label" for="D7"><strong>D</strong> Evitar??a la confrontaci??n, dejando las cosas como est??n. </label>
              </div>
          </div>
    </div>
</div>
<!--Fin pregunta 7-->
 <!--Pregunta 8-->
 <div class="card border-secondary my-5">
    <div class="card-header"><strong>Pregunta 8</strong></div>
    <div class="card-body text-secondary">
        <h5>Situaci??n</h5>
        <p>El rendimiento del grupo y sus relaciones interpersonales son buenas. Pero usted se siente algo inseguro por la supuesta falta de direcci??n del grupo. Tiene la impresi??n de que lo est?? dirigiendo poco.
        </p>
        <h5>ACCIONES ALTERNATIVAS</h5>
        <div class="my-3" id="pregunta8">
            <div class="form-check">
              <input id="A8" name="respuestaOcho" type="radio" class="form-check-input" value="A" required>
              <label class="form-check-label" for="A8"><strong>A</strong>  Dejar??a al grupo solo. </label>
            </div>
            <div class="form-check">
              <input id="B8" name="respuestaOcho" type="radio" class="form-check-input" value="B"required>
              <label class="form-check-label" for="B8"><strong>B</strong> Discutir??a la situaci??n con el grupo y luego iniciar??a yo mismo los cambios necesarios. </label>
            </div>
            <div class="form-check">
              <input id="C8" name="respuestaOcho" type="radio" class="form-check-input" value="C"required>
              <label class="form-check-label" for="C8"><strong>C</strong> Tomar??a medidas para dirigir a los colaboradores para que trabajen de una manera determinada.  </label>
            </div>
            <div class="form-check">
                <input id="D8" name="respuestaOcho" type="radio" class="form-check-input" value="D" required>
                <label class="form-check-label" for="D8"><strong>D</strong> Mostrar??a que respaldo al grupo en la discusi??n de la situaci??n. </label>
              </div>
          </div>
    </div>
</div>
<!--Fin pregunta 8-->
 <!--Pregunta 9-->
 <div class="card border-secondary my-5">
    <div class="card-header"><strong>Pregunta 9</strong></div>
    <div class="card-body text-secondary">
        <h5>Situaci??n</h5>
        <p>Ha sido nombrado por su superior, jefe de un comit?? que ha tardado bastante en presentar sus recomendaciones con respecto a la ejecuci??n de ciertos cambios. El grupo adem??s no sabe con claridad cu??les son sus objetivos. La asistencia a las sesiones ha sido escasa. Sus reuniones se han convertido casi en tertulias sociales. Potencialmente tienen el talento necesario para ayudar.</p>
        <h5>ACCIONES ALTERNATIVAS</h5>
        <div class="my-3" id="pregunta9">
            <div class="form-check">
              <input id="A9" name="respuestaNueve" type="radio" class="form-check-input" value="A" required>
              <label class="form-check-label" for="A9"><strong>A</strong> Dejar??a que el grupo busque solo las soluciones a sus problemas. </label>
            </div>
            <div class="form-check">
              <input id="B9" name="respuestaNueve" type="radio" class="form-check-input" value="B"required>
              <label class="form-check-label" for="B9"><strong>B</strong> Incorporar??a a la soluci??n las recomendaciones del grupo, para vigilar que se alcancen los objetivos. 
              </label>
            </div>
            <div class="form-check">
              <input id="C9" name="respuestaNueve" type="radio" class="form-check-input" value="C"required>
              <label class="form-check-label" for="C9"><strong>C</strong> Redefinir??a los niveles de calidad y supervisar??a cuidadosamente. </label>
            </div>
            <div class="form-check">
                <input id="D9" name="respuestaNueve" type="radio" class="form-check-input" value="D" required>
                <label class="form-check-label" for="D9"><strong>D</strong>  Permitir??a que el grupo intervenga en la determinaci??n de los objetivos. </label>
              </div>
          </div>
    </div>
</div>
<!--Fin pregunta 9-->
 <!--Pregunta 10-->
 <div class="card border-secondary my-5">
    <div class="card-header"><strong>Pregunta 10</strong></div>
    <div class="card-body text-secondary">
        <h5>Situaci??n</h5>
        <p>Sus colaboradores, normalmente capaces de responsabilizarse, no est??n respondiendo a su reciente redefinici??n de niveles de calidad.</p>
        <h5>ACCIONES ALTERNATIVAS</h5>
        <div class="my-3" id="pregunta10">
            <div class="form-check">
              <input id="A10" name="respuestaDiez" type="radio" class="form-check-input" value="A" required>
              <label class="form-check-label" for="A10"><strong>A</strong> Permitir??a que el grupo intervenga en la redefinici??n de los niveles de calidad, aportando puntos de vista. 
              </label>
            </div>
            <div class="form-check">
              <input id="B10" name="respuestaDiez" type="radio" class="form-check-input" value="B"required>
              <label class="form-check-label" for="B10"><strong>B</strong> Redefinir??a los niveles de calidad y supervisar??a cuidadosamente.  
              </label>
            </div>
            <div class="form-check">
              <input id="C10" name="respuestaDiez" type="radio" class="form-check-input" value="C"required>
              <label class="form-check-label" for="C10"><strong>C</strong>  Evitar??a la confrontaci??n no aplicando presi??n y sin intervenir.  </label>
            </div>
            <div class="form-check">
                <input id="D10" name="respuestaDiez" type="radio" class="form-check-input" value="D" required>
                <label class="form-check-label" for="D10"><strong>D</strong> Incorporar??a a la soluci??n las recomendaciones del grupo, vigilando que se alcancen los niveles de calidad. </label>
              </div>
          </div>
    </div>
</div>
<!--Fin pregunta 10-->
 <!--Pregunta 11-->
 <div class="card border-secondary my-5">
    <div class="card-header"><strong>Pregunta 11</strong></div>
    <div class="card-body text-secondary">
        <h5>Situaci??n</h5>
        <p>Informaci??n reciente indica que existen algunas dificultades internas entre sus colaboradores. El grupo tiene antecedentes notables por sus logros. Los miembros han logrado efectivamente objetivos de largo alcance. Han trabajado en armon??a durante el a??o anterior. Todos est??n bien capacitados para la tarea.</p>
        <h5>ACCIONES ALTERNATIVAS</h5>
        <div class="my-3" id="pregunta11">
            <div class="form-check">
              <input id="A11" name="respuestaOnce" type="radio" class="form-check-input" value="A" required>
              <label class="form-check-label" for="A11"><strong>A</strong>  Tomar??a medidas para conseguir que los colaboradores trabajen de una manera determinada.
              </label>
            </div>
            <div class="form-check">
              <input id="B11" name="respuestaOnce" type="radio" class="form-check-input" value="B"required>
              <label class="form-check-label" for="B11"><strong>B</strong> Har??a que los colaboradores se vieran involucrados en la toma de decisiones y reforzar??a las buenas contribuciones.
              </label>
            </div>
            <div class="form-check">
              <input id="C11" name="respuestaOnce" type="radio" class="form-check-input" value="C"required>
              <label class="form-check-label" for="C11"><strong>C</strong>  Discutir??a el rendimiento previo con el grupo y luego examinar??a la necesidad de pr??cticas nuevas.   </label>
            </div>
            <div class="form-check">
                <input id="D11" name="respuestaOnce" type="radio" class="form-check-input" value="D" required>
                <label class="form-check-label" for="D11"><strong>D</strong> Continuar??a dejando libre al grupo. </label>
              </div>
          </div>
    </div>
</div>
<!--Fin pregunta 11-->
 <!--Pregunta 12-->
 <div class="card border-secondary my-5">
    <div class="card-header"><strong>Pregunta 12</strong></div>
    <div class="card-body text-secondary">
        <h5>Situaci??n</h5>
        <p>Ha sido ascendido a un nuevo puesto. El jefe anterior no interfer??a en los asuntos del grupo. El grupo ha manejado bien sus tareas y la direcci??n. Las interrelaciones del grupo son buenas.</p>
        <h5>ACCIONES ALTERNATIVAS</h5>
        <div class="my-3" id="pregunta12">
            <div class="form-check">
              <input id="A12" name="respuestaDoce" type="radio" class="form-check-input" value="A" required>
              <label class="form-check-label" for="A12"><strong>A</strong>  Probar??a con los colaboradores la soluci??n propuesta por m?? mismo y examinar??a la necesidad de nuevas pr??cticas.
              </label>
            </div>
            <div class="form-check">
              <input id="B12" name="respuestaDoce" type="radio" class="form-check-input" value="B"required>
              <label class="form-check-label" for="B12"><strong>B</strong> Permitir??a que los propios miembros del grupo encuentren las soluciones.
              </label>
            </div>
            <div class="form-check">
              <input id="C12" name="respuestaDoce" type="radio" class="form-check-input" value="C"required>
              <label class="form-check-label" for="C12"><strong>C</strong>  Actuar??a r??pida y firmemente para corregir y dirigir.   </label>
            </div>
            <div class="form-check">
                <input id="D12" name="respuestaDoce" type="radio" class="form-check-input" value="D" required>
                <label class="form-check-label" for="D12"><strong>D</strong> Participar??a en la discusi??n del problema proporcionando apoyo a los colaboradores.
                </label>
              </div>
          </div>
    </div>
</div>
<!--Fin pregunta 12-->
        <div class="warning"></div>
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <button class="w-100 btn btn-primary btn-lg" type="submit" id="botonAgregar">Ver Resultado</button>
            </div>
        </div>
       </form>
      
      </div>
    </div>
  </main>
  <div id="resultadoEncuesta" style="display: none;">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="card border-primary my-5 col-8 p-0">
          <div class="card-header"><strong>Resultado</strong></div>
          <div class="card-body">
            <div class="container">
              <div class="row">
                <div class="col-12 col-md-6">
                  <canvas id="myChart" width="400" height="400"></canvas>
                </div>
                <div class="col-12 col-md-6">
                  <div id="contenido"></div>
                </div>
              </div> 
            </div>
          </div>
      </div>
    </div>
    
  </div>

 
  <form name="f1" id="f1" style="display: none;" method="post">
          <input type="text" name="f1t1" id="f1t1" value="">
          <input type="text" name="diri" id="diri" value="">
          <input type="text" name="entre" id="entre" value="">
          <input type="text" name="apoy" id="apoy" value="">
          <input type="text" name="dele" id="dele" value="">
  </form>

  
  </div>
  <div class="container text-center" id="respuesta" style="display:none;">
      
  </div>
  
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2022 Proyecto Humano</p>
  </footer>
  
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="app.js?version=1.0.4"></script>

 </body>
</html>

