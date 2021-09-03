@extends('adminlte::page')

@section('title', 'Inicio')
@section('content_header')
<h1>Tablero</h1>
@stop
@section('content')

<div class="card">
    <div class="card-header">
        <h1 class="card-title">Historia Clinica</h1>
    </div>
   
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"></h1>
             <form role="form">
                <div class="card-body">
           <div class="form-group">
                    <label for="exampleInputEmail1">Apellido y Nombre del paciente</label>
                     <br>
                <input class="form-control" type="text" placeholder="Apellido y Nombre">
                <br>
                  </div>
        <div class="form-group">
                    <label for="exampleInputPassword1">Fecha de evaluación</label>
                    <br>
           <input type="date" name="fecha" class="form-control">
              
                <br>
                  </div>
               
                       <div class="form-group">
                    <label for="exampleInputPassword1">Edad</label>
                    <br>
                <input class="form-control" type="text" placeholder="Edad">
                <br>
                  </div>
                       <div class="form-group">
                    <label for="exampleInputPassword1">DNI</label>
                    <br>
                <input class="form-control" type="text" placeholder="NI">
                <br>
                  </div>
            <div class="form-group">
                    <label for="exampleInputPassword1">Fecha de Nacimiento</label>
                    <br>
           <input type="date" name="fecha" class="form-control">
              
                <br>
                  </div>
 <div class="form-group">
                    <label for="exampleInputPassword1">Sexo</label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
                
            <div class="form-group">
                    <label for="exampleInputPassword1">Grado Escolar</label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
              <div class="form-group">
                    <label for="exampleInputPassword1">Nombre Evaluador</label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
            <p>Datos de La Madre</p>
           
          <div class="form-group">
                    <label for="exampleInputPassword1">Apellido y Nombre</label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
            <div class="form-group">
                    <label for="exampleInputPassword1">DNI</label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
              <div class="form-group">
                    <label for="exampleInputPassword1">Fecha de Nacimiento</label>
                    <br>
           <input type="date" name="fecha" class="form-control">
              
                <br>
                  </div>
          
            <div class="form-group">
                    <label for="exampleInputPassword1">Lugar</label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
             <div class="form-group">
                    <label for="exampleInputPassword1">Provincia</label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
            <div class="form-group">
                    <label for="exampleInputPassword1">Pais</label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
           <div class="form-group">
                    <label for="exampleInputPassword1">Dirección</label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
           <div class="form-group">
                    <label for="exampleInputPassword1">Tel:</label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
            <div class="form-group">
                    <label for="exampleInputPassword1">Ocupación de la Madre</label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
           <p>Datos delPadre</p>
           
          <div class="form-group">
                    <label for="exampleInputPassword1">Apellido y Nombre</label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
            <div class="form-group">
                    <label for="exampleInputPassword1">DNI</label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
              <div class="form-group">
                    <label for="exampleInputPassword1">Fecha de Nacimiento</label>
                    <br>
           <input type="date" name="fecha" class="form-control">
              
                <br>
                  </div>
          
            <div class="form-group">
                    <label for="exampleInputPassword1">Lugar</label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
             <div class="form-group">
                    <label for="exampleInputPassword1">Provincia</label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
            <div class="form-group">
                    <label for="exampleInputPassword1">Pais</label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
           <div class="form-group">
                    <label for="exampleInputPassword1">Dirección</label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
           <div class="form-group">
                    <label for="exampleInputPassword1">Tel:</label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
            <div class="form-group">
                    <label for="exampleInputPassword1">Ocupación del Padre</label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
          <div class="form-group">
                    <label for="exampleInputPassword1">Motivo de consulta</label>
<textarea id="inputDescription" class="form-control" rows="4"></textarea>
            
                <br>
                  </div>
          <p>Examen Físico</p>
          <div class="form-group">
                    <label for="exampleInputPassword1">peso</label>
                    <br>
                <input class="form-control" type="text" >
                <br>
                  </div>
           <div class="form-group">
                    <label for="exampleInputPassword1">Talla</label>
                    <br>
                <input class="form-control" type="text" >
                <br>
                  </div>
          <div class="form-group">
                    <label for="exampleInputPassword1">Perímetro Cefálico</label>
                    <br>
                <input class="form-control" type="text" >
                <br>
                  </div>
          <div class="form-group">
                    <label for="exampleInputPassword1">Visión</label>
                    <br>
                <input class="form-control" type="text" >
                <br>
                  </div>
          <div class="form-group">
                    <label for="exampleInputPassword1">Audición</label>
                    <br>
                <input class="form-control" type="text" >
                <br>
                  </div>
          <div class="form-group">
                    <label for="exampleInputPassword1">Medicamentos</label>
                    <br>
                <input class="form-control" type="text" >
                <br>
                  </div>
          <p>Historia Familiar</p>
           <div class="form-group">
                    <label for="exampleInputPassword1">Enfermedades o trastornos en familiares colaterales (Padres y Hermanos)</label>
                    <br>
                <input class="form-control" type="text" >
                <br>
                  </div>
          <div class="form-group clearfix">
          Algún familiar con problemas Semejantes?
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                        <label for="exampleInputPassword1">¿Quien?</label>
                 <textarea id="inputDescription" class="form-control" rows="2"></textarea>
                    </div>
           <div class="form-group clearfix">
          Problema de lenguaje
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                        <label for="exampleInputPassword1">Familiar que lo presenta</label>
                 <textarea id="inputDescription" class="form-control" rows="2"></textarea>
                    </div>
          <div class="form-group clearfix">
          Deficiencia sensorial
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                        <label for="exampleInputPassword1">Familiar que lo presenta</label>
                 <textarea id="inputDescription" class="form-control" rows="2"></textarea>
                    </div>
          <div class="form-group clearfix">
          Paralisis Cerebral
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                        <label for="exampleInputPassword1">Familiar que lo presenta</label>
                 <textarea id="inputDescription" class="form-control" rows="2"></textarea>
                    </div>
          <div class="form-group clearfix">
          Epilepsia
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r2" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r2">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                        <label for="exampleInputPassword1">Familiar que lo presenta</label>
                 <textarea id="inputDescription" class="form-control" rows="2"></textarea>
                    </div>
          <div class="form-group clearfix">
          Deficit de la Atención
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                        <label for="exampleInputPassword1">Familiar que lo presenta</label>
                 <textarea id="inputDescription" class="form-control" rows="2"></textarea>
                    </div>
          <div class="form-group clearfix">
          Problemas de coordinación motriz
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                        <label for="exampleInputPassword1">Familiar que lo presenta</label>
                 <textarea id="inputDescription" class="form-control" rows="2"></textarea>
                    </div>
          <div class="form-group clearfix">
          Drogadicción
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                        <label for="exampleInputPassword1">Familiar que lo presenta</label>
                 <textarea id="inputDescription" class="form-control" rows="2"></textarea>
                    </div>
          <div class="form-group clearfix">
          Alcoholismo
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                        <label for="exampleInputPassword1">Familiar que lo presenta</label>
                 <textarea id="inputDescription" class="form-control" rows="2"></textarea>
                    </div>
          <div class="form-group clearfix">
          Enfermedad psiquiatrica
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                        <label for="exampleInputPassword1">Familiar que lo presenta</label>
                 <textarea id="inputDescription" class="form-control" rows="2"></textarea>
                    </div>
          <div class="form-group clearfix">
          Síndrome de Down
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                        <label for="exampleInputPassword1">Familiar que lo presenta</label>
                 <textarea id="inputDescription" class="form-control" rows="2"></textarea>
                    </div>
          <div class="form-group clearfix">
          Retardo mental
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                        <label for="exampleInputPassword1">Familiar que lo presenta</label>
                 <textarea id="inputDescription" class="form-control" rows="2"></textarea>
                    </div>
          <div class="form-group clearfix">
          Problemas de aprendizaje
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                        <label for="exampleInputPassword1">Familiar que lo presenta</label>
                 <textarea id="inputDescription" class="form-control" rows="2"></textarea>
                    </div>
          <div class="form-group clearfix">
          Retraso escolar
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                        <label for="exampleInputPassword1">Familiar que lo presenta</label>
                 <textarea id="inputDescription" class="form-control" rows="2"></textarea>
                    </div>
            <div class="form-group">
                    <label for="exampleInputPassword1">Otro: </label>
                    <br>
                <input class="form-control" type="text" >
                <br>
                  </div>
          <p>Antecedentes Prenatales</p>
           <div class="form-group">
                    <label for="exampleInputPassword1">¿Producto de la gesta numero?</label>
                    <br>
                <input class="form-control" type="text" >
                <br>
                  </div>
          <div class="form-group clearfix">
          Embarazo no deseado
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                        <label for="exampleInputPassword1">Comentarios</label>
                 <textarea id="inputDescription" class="form-control" rows="2"></textarea>
                    </div>
            <div class="form-group clearfix">
          ¿La madre durante el embarazo consumió alcohol o drogas? (cocaína, marihuana, crack, etc)
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                        <label for="exampleInputPassword1">Especificar</label>
                 <textarea id="inputDescription" class="form-control" rows="2"></textarea>
                    </div>
          <p>La madre padeció durante el embarazo:</p>
             <div class="form-group clearfix">
          Rubeola
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                         </div>
              <div class="form-group clearfix">
          Varicela
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                         </div>
              <div class="form-group clearfix">
          Edema
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                         </div>
             <div class="form-group clearfix">
          Traumatismo
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                         </div>
              <div class="form-group clearfix">
          Amenaza de aborto
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                         </div>
              <div class="form-group clearfix">
          Sífilis
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                         </div>
              <div class="form-group clearfix">
          Toxoplasmosis
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                         </div>
              <div class="form-group clearfix">
          VIH
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                         </div>
              <div class="form-group clearfix">
          Hipertensión
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                         </div>
              <div class="form-group clearfix">
          Toxemia
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                         </div>
              <div class="form-group clearfix">
          Otros
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">no
                        <label for="radioPrimary2">
                        </label>
                      </div>
                         </div>
             <p>La madre durante el embarazo estuvo expuesta a: Detallar Cual? Mes?</p>
              <div class="form-group">
                    <label for="exampleInputPassword1">Vacunas</label>
<textarea id="inputDescription" class="form-control" rows="4"></textarea>
            
                <br>
                  </div>
              <div class="form-group">
                    <label for="exampleInputPassword1">Rayos X</label>
<textarea id="inputDescription" class="form-control" rows="4"></textarea>
            
                <br>
                  </div>
              <div class="form-group">
                    <label for="exampleInputPassword1">Ingesta de Medicamentos</label>
<textarea id="inputDescription" class="form-control" rows="4"></textarea>
            
                <br>
                  </div>
              <div class="form-group">
                    <label for="exampleInputPassword1">Otro</label>
<textarea id="inputDescription" class="form-control" rows="4"></textarea>
            
                <br>
                  </div>
          <div class="form-group clearfix">
          Alimentación durante el embarazo: 
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Buena
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">Mala
                        <label for="radioPrimary2">
                        </label>
                      </div>
            <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">Regular
                        <label for="radioPrimary2">
                        </label>
                      </div>
                         </div>
        <p>Antecedentes Natales</p>
        
                  </div>
           
        </form>
          <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                </div>
                <!-- /.card-body -->

                </div>
                <!-- /.container-fluid -->
   </div>
    </div>

   @stop
   @section('css')
   <link rel="styesheet" href="/css/admin_custom.css">
   @stop
    @section('js')
   <script> console.log('Hi');
   Swal.fire(
    'Listo!','Se refresco con exito la pantalla','Boton')
    </script>
   @stop




            
