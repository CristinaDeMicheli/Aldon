@extends('adminlte::page')

@section('title', 'Inicio')
@section('content_header')
<h1>Tablero</h1>

@section('content')
<div class="row">
        <div class="col-lg-11">
            <h2>Agregar nueva obra social</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('obrasocial') }}"> Volver</a>
        </div>
    </div>
 
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Hubo algunos problemas con su entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('obrasocial.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" placeholder="Enter " name="nombre">
        </div>
       
       <div class="form-group">
            <label for="nombre">CUIT:</label>
            <input type="text" class="form-control" id="CUIT" placeholder="Enter " name="CUIT">
        </div>
        <div class="form-group">
            <label for="nombre">Domicilio:</label>
            <input type="text" class="form-control" id="Domicilio" placeholder="Enter " name="Domicilio">
        </div>
        <div class="form-group">
            <label for="nombre">iva:</label>
            <input type="text" class="form-control" id="iva" placeholder="Enter " name="iva">
        </div>
        <div class="form-group">
            <label for="nombre">factura:</label>
            <input type="text" class="form-control" id="nombre" placeholder="Enter " name="factura">
        </div>
       
        <button type="submit" class="btn btn-default">Guardar</button>
    </form>
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
