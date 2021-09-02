@extends('adminlte::page')

@section('title', 'Inicio')
@section('content_header')
<h1>Tablero</h1>

@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Actualizar Obra Social</h2>
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
    <form method="post" action="{{ route('obrasocial.update',$obrasocial->id) }}" >
        @method('PATCH')
       @csrf
        <div class="form-group">
            <label for="country_name">Nombre:</label>
              <input type="text" class="form-control" name="nombre" value="{{ $obrasocial->nombre }}"/>
        </div>
       
       <div class="form-group">
            <label for="nombre">CUIT:</label>
            <input type="text" class="form-control" name="CUIT" value="{{ $obrasocial->CUIT }}"/>
        </div>
        <div class="form-group">
            <label for="nombre">Domicilio:</label>
            <input type="text" class="form-control" name="Domicilio" value="{{ $obrasocial->Domicilio }}"/>
        </div>
        <div class="form-group">
            <label for="nombre">iva:</label>
            <input type="text" class="form-control" name="iva" value="{{ $obrasocial->iva }}"/>
        </div>
        <div class="form-group">
            <label for="nombre">factura:</label>
            <input type="text" class="form-control" name="factura" value="{{ $obrasocial->factura }}"/>
        </div>
       
        <button type="submit" class="btn btn-default">Guardar</button>
    </form>
@endsection

 @stop
   @section('css')
   <link rel="styesheet" href="/css/admin_custom.css">
   @stop
    
