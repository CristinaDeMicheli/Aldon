@extends('adminlte::page')

@section('title', 'Inicio')
@section('content_header')
<h1>Tablero</h1>

@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>Obra Sociales</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('obrasocial') }}"> Volver</a>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>First Name:</th>
            <td>{{ $obrasocial->nombre }}</td>
        </tr>
       <tr>
            <th>CUIT:</th>
            <td>{{ $obrasocial->CUIT }}</td>
        </tr>
         <tr>
            <th>Domicilio:</th>
            <td>{{ $obrasocial->Domicilio }}</td>
        </tr>
        <tr>
            <th>Iva:</th>
            <td>{{ $obrasocial->iva }}</td>
        </tr>
         <tr>
            <th>Factura:</th>
            <td>{{ $obrasocial->factura }}</td>
        </tr>
 
    </table>
@endsection

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
