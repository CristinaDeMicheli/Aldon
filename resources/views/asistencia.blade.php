@extends('adminlte::page')

@section('title', 'Inicio')
@section('content_header')
<h1>Tablero</h1>
@stop
@section('content')

<div class="card">
    <div class="card-header">
        <h1 class="card-title">Asistencia: </h1>
    </div>
      <!-- Begin Page Content -->
                <div class="container-fluid">
                  <div class="card-body">
              <div class="form-group">
                <label for="inputName">Nombre Obra Social</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Razón Social del prestador: </label>
                <textarea id="inputDescription" class="form-control" rows="1"></textarea>
              </div>
                            <div class="form-group">
                <label for="inputClientCompany">Afiliado: </label>
                <input type="text" id="inputClientCompany" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">DNI: </label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div>
          <div class="form-group">
                <label for="inputProjectLeader">Tratamiento: </label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div>
           <div class="form-group">
                <label for="inputProjectLeader">Mes: </label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div>
         <div class="form-group">
                <label for="inputProjectLeader">Dias y Hs de atención: </label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div>
            </div>
           <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div> 
                   <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Ejemplo Tabla Asistencia Assitencia/Día</h6>
              <p>P: Presente . A: Ausente</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                            <th>6</th>
                       <th>7</th>
                                            <th>8</th>
                                            <th>9</th>
                       <th>...</th>
                                            <th>22</th>
                       <th>23</th>
                                            <th>24</th>
                                            <th>25</th>
                       <th>26</th>
                                            <th>27</th>
                                            <th>28</th>
                       <th>29</th>
                                            <th>30</th>
                                         
                                        </tr>
                                    </thead>
                                  
                                        <tr>
                                            <th>p</th>
                                            <th>a</th>
                                            <th>a</th>
                                            <th>p</th>
                                           
                                            <th>a</th>
                       <th>p</th>
                                            <th>p</th>
                                            <th>p</th>
                       <th>...</th>
                                        
                                            <th>p</th>
                                            <th>p</th>
                                           <th>p</th>
                                            <th>p</th>
                                           <th>p</th>
                                            <th>p</th>
                                            <th>p</th>
                                            <th>p</th>
                                            <th>a</th>
                                            <th>p</th>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
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




            
