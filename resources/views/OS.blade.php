@extends('adminlte::page')

@section('title', 'Inicio')
@section('content_header')
<h1>Tablero</h1>
@stop
@section('content')

<div class="card">
    <div class="card-header">
        <h1 class="card-title">Obra Social</h1>
    </div>
    <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Begin Page Content -->
                <div class="container-fluid">
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Nombre Obra Social</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">CUIT</label>
                <textarea id="inputDescription" class="form-control" rows="1"></textarea>
              </div>
                            <div class="form-group">
                <label for="inputClientCompany">Domicilio Fiscal</label>
                <input type="text" id="inputClientCompany" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Condicion frente a iva</label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div>
          <div class="form-group">
                <label for="inputProjectLeader">Tipo de factura</label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div>
          
            </div>
          <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>  
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




            
