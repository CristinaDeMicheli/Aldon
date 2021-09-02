@extends('adminlte::page')

@section('title', 'Inicio')
@section('content_header')
<h1>Tablero</h1>
@stop
@section('content')

<div class="card">
    <div class="card-header">
        <h1 class="card-title">Ficha de Ingreso</h1>
    </div>
   
  
     <!-- Begin Page Content -->
                <div class="container-fluid">

                  <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"></h1>
                       <form role="form">
                <div class="card-body">
                <p>Datos personales del niño: </p>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Apellido y Nombre: </label>
                     <br>
                <input class="form-control" type="text" placeholder="Apellido y Nombre">
                <br>
                  </div>
            <div class="form-group">
                    <label for="exampleInputPassword1">Fecha de nacimiento: </label>
                    <br>
                     <input type="date" name="fecha" class="form-control">
              
                <br>
                  </div>
               
                                     <div class="form-group">
                    <label for="exampleInputPassword1">DNI niño: </label>
                    <br>
                <input class="form-control" type="text" placeholder="DNI">
                <br>
                  </div>
                    
 <div class="form-group">
                    <label for="exampleInputPassword1">Domicilio: </label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
                
                    <div class="form-group">
                    <label for="exampleInputPassword1">Telefono: </label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
                      <div class="form-group clearfix">
                    Posee obra social?
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">No
                        <label for="radioPrimary2">
                        </label>
                      </div>
                        <label for="exampleInputPassword1">Número de afiliado: </label>
                         <input class="form-control" type="text" >
                    </div>
                      <div class="form-group">
                    <label for="exampleInputPassword1">Médico Pediatra</label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Médico Psiquiatra</label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
                      <div class="form-group">
                    <label for="exampleInputPassword1">Médico Neurologo</label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Diagnostico: </label>
                    <br>
                    <textarea id="inputDescription" class="form-control" rows="2"></textarea>
               
                <br>
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Medicación: </label>
                    <br>
                <textarea id="inputDescription" class="form-control" rows="2"></textarea>
              
                <br>
                  </div>
                  <div class="form-group clearfix">
                    Escolaridad?
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">No
                        <label for="radioPrimary2">
                        </label>
                      </div>
                        <label for="exampleInputPassword1">Turno: </label>
                         <input class="form-control" type="text" >
                    </div>
                    <div class="form-group clearfix">
                    Integración?
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">No
                        <label for="radioPrimary2">
                        </label>
                      </div>
                     
                    </div>
                      <div class="form-group">
                    <label for="exampleInputPassword1">Colegio: </label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Domicilio del Colegio</label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
                  <div class="form-group clearfix">
                    Hermanos?
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">No
                        <label for="radioPrimary2">
                        </label>
                      </div>
                      <label for="exampleInputPassword1">Cuantos: </label>
                         <input class="form-control" type="text" >
                    </div>
                    <div class="form-group clearfix">
                    Posee CUD?
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Si
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">No
                        <label for="radioPrimary2">
                        </label>
                      </div>
                        
                    </div>
                    <p>Datos de La Madre</p>
                   
                  <div class="form-group">
                    <label for="exampleInputPassword1">Apellido y Nombre: </label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">DNI madre: </label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
                 
                   
                   <div class="form-group">
                    <label for="exampleInputPassword1">Profeción: </label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Telefono: </label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Domicilio Laboral: </label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Telefono Laboral: </label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
                   <p>Datos delPadre</p>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Apellido y Nombre: </label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">DNI padre: </label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
                 
                   
                   <div class="form-group">
                    <label for="exampleInputPassword1">Profeción: </label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Telefono: </label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Domicilio Laboral: </label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Telefono Laboral: </label>
                    <br>
                 <input class="form-control" type="text" >
                <br>
                  </div>
                 
                
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




            
