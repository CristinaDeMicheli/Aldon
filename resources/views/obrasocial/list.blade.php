@extends('adminlte::page')

@section('title', 'Inicio')
@section('content_header')
<h1>Tablero</h1>

@section('content')

    <div class="row">
        <div class="col-lg-11">
                <h2>Listado de Obras Sociales</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ route('obrasocial.create') }}">Agregar</a>
        </div>
    </div>
 <table class="table table-bordered">
        <tr>
            <th>N°</th>
            <th>Nombre</th>
             <th>CUIT</th>
              <th>Domicilio</th>
               <th>iva</th>
                <th>factura</th>
         
            <th width="280px">Acción</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($obrasocial as $obrasocial)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $obrasocial->nombre }}</td>   
                <td>{{ $obrasocial->CUIT }}</td>          
                  <td>{{ $obrasocial->Domicilio }}</td>
                   <td>{{ $obrasocial->iva }}</td>
                    <td>{{ $obrasocial->factura }}</td>

                
                <td>
                    <form action="{{ route('obrasocial.destroy',$obrasocial->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('obrasocial.show',$obrasocial->id) }}">Mostrar</a>
                        <a class="btn btn-primary" href="{{ route('obrasocial.edit',$obrasocial->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>

            </tr>
        @endforeach
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
