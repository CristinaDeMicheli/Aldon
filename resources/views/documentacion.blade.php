@extends('adminlte::page')

@section('title', 'Inicio')
@section('content_header')
<h1>Tablero</h1>
@stop
@section('content')

<div class="card">
    <div class="card-header">
        <h1 class="card-title">Documentación: </h1>
    </div>
      <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"></h1>
             <form role="form">
                <div class="card-body">
        <p>Seleccionar el niño: </p>
          <div class="form-group">
                    <label for="exampleInputPassword1">DNI niño: </label>
                    <br>
                <input class="form-control" type="text" placeholder="DNI">
                
                  </div>
      <button type="submit" class="btn btn-primary">Seleccionar</button>
        </form>
        </div>
         
                </div>
          <form role="form">
         <div class="container-fluid">
                    <!-- Page Heading -->
            
                <div class="card-body">
        
       <div class="row">
         <div class="cell label">FOTO niño:   </div>
        <div class="cell"><input type="file" name="file"/></div>
       </div>
       
        </div>
          <div class="card-body">
        
       <div class="row">
         <div class="cell label">FOTO DNI niño:   </div>
        <div class="cell"><input type="file" name="file"/></div>
       </div>
       
        </div>
        
         <div class="card-body">
        
       <div class="row">
         <div class="cell label">CUD niño:</div>
        <div class="cell"><input type="file" name="file"/></div>
       </div>
       
        </div>
        <div class="card-body">
        
       <div class="row">
         <div class="cell label">Libreta de salud niño:</div>
        <div class="cell"><input type="file" name="file"/></div>
       </div>
       
        </div>
        
        <div class="card-body">
        
       <div class="row">
         <div class="cell label">Cuil niño:</div>
        <div class="cell"><input type="file" name="file"/></div>
       </div>
       
        </div>
        
        <div class="card-body">
        
       <div class="row">
         <div class="cell label">Foto DNI TUTOR:</div>
        <div class="cell"><input type="file" name="file"/></div>
       </div>
       
        </div>
        <div class="card-body">
        
       <div class="row">
         <div class="cell label">Cuil Tutor:</div>
        <div class="cell"><input type="file" name="file"/></div>
       </div>
       
        </div>
        
        <div class="card-body">
        
       <div class="row">
         <div class="cell label">Carnet obra social niño:</div>
        <div class="cell"><input type="file" name="file"/></div>
       </div>
       
        </div>
        
        <div class="card-body">
        
       <div class="row">
         <div class="cell label">Carnet obra social tutor:</div>
        <div class="cell"><input type="file" name="file"/></div>
       </div>
       
        </div>
        <div class="card-body">
        
       <div class="row">
         <div class="cell label">3 Recibo de sueldo tutor(Juntos):</div>
        <div class="cell"><input type="file" name="file"/></div>
       </div>
       
        </div>
        
          <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Subir</button>
                </div>
                </div>
          </form>
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




            
