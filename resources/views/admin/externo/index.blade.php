@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
        <div class="card-body">
            <strong>Correspondecia Externa <h4>Bienvenido . {{ auth()->user()->name }} </h4></strong>
            <a href="{{ route('externo.create') }}" class="btn btn-outline-success float-right">
                Nuevo Correspondecia Externa
            </a>
            @if(auth()->user()->name =='admin')
                <h1>{{auth()->user()->name}}</h1>
            @else
                <h1>no es el usuario </h1>
            @endif

        </div>
    </div>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="externo">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">titulo</th>
                    <th scope="col">institucion_remitente</th>
                    <th scope="col">persona_firmante</th>
                    <th scope="col">asunto</th>
                    <th scope="col">fecha_documento</th>
                    <th scope="col">tipo_documento</th>
                    <th scope="col">cite</th>
                    <th scope="col">via</th>
                    <th scope="col">responsable</th>
                    <th scope="col">deriva</th>
                    <th scope="col">fecha ingreso</th>
                    @if(auth()->user()->name =='admin')
                    <th scope="col">ACCIONES</th>
                    @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach($externos as $item)
                    <tr>
                        <th scope="row"></th>
                        <td>{{ $item->titulo }}</td>
                        <td>{{ $item->institucion_remitente }}</td>
                        <td>{{ $item->persona_firmante }}</td>
                        <td>{{ $item->asunto }}</td>
                        <td>{{ $item->fecha_documento }}</td>
                        <td>{{ $item->tipo_documento }}</td>
                        <td>{{ $item->cite }}</td>
                        <td>{{ $item->via }}</td>
                        <td>{{ $item->responsable }}</td>
                        <td>{{ $item->deriva }}</td>
                        <td>{{ $item->fecha_ingreso }}</td>
                        @if(auth()->user()->name =='admin')
                        <td>
                            <a href="" class="btn btn-outline-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="" method="POST" class="form-eliminar">
                                
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    {{--Datatable css--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
@stop

@section('js')
    <script> console.log('hola mundo'); </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('eliminar')=='ok')
    <script>
        Swal.fire(
                'Eliminado!',
                'la Persona ha sido eliminada.',
                'success'
                )
    </script>    
    @endif
    <script>
        $('.form-eliminar').submit(function(e){
            e.preventDefault();
            Swal.fire({
            title: 'estas seguro?',
            text: "los datos de la persona, se eliminaran!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar!',
            cancelButtonText:'Cancelar'
            }).then((result) => {
            if (result.isConfirmed) {
                
                this.submit()
            }
            })
        })
    </script>
    {{--Datatables--}}
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script><script>
            $('#externo').DataTable({
            responsive: true,
            autowidth: false,
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "El registro no existe - disculpe",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate":{
                    "next":"Siguiente",
                    "previous":"Anterior"
                }
            }
        });
    </script>@stop