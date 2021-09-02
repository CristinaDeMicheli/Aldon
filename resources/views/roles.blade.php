@extends('adminlte::page')

@section('title', 'Inicio')
@section('content_header')
<h1>Tablero</h1>
@stop
@section('content')

<div class="card">
    <div class="card-header">
        <h1 class="card-title">Roles</h1>
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
                    <label for="exampleInputEmail1">Usuario</label>
                     <br>
                <input class="form-control" type="text" placeholder="Seleccionar Usuario">
                <br>
                  </div>
     
            
           <div class="form-group clearfix">
          Rol: 
          </br></br>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked>Root
                        <label for="radioPrimary1">
                        </label>
                      </div></br>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">Dirección
                        <label for="radioPrimary2">
                        </label>
                      </div></br>
            <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">Administración
                        <label for="radioPrimary3">
                        </label>
                      </div></br>
              <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">CoordinadorPsicologia
                        <label for="radioPrimary4">
                        </label>
                      </div></br>
              <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="r1">CoordinadorIntegración
                        <label for="radioPrimary5">
                        </label>
                      </div></br>
                       
        
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




            
