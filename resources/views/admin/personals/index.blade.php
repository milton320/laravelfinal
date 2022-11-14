@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
        <div class="card-body">
            <strong>Personal</strong>
            <a href="{{ route('personal.create') }}" class="btn btn-outline-success float-right">
                Nuevo Personal
            </a>
        </div>
    </div>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDOS</th>
                    <th scope="col">CI</th>
                    <th scope="col">DIRECCION</th>
                    <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($personal as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->primer_nombre }} {{ $item->segundo_nombre }}</td>
                        <td>{{ $item->primer_apellido }} {{ $item->segundo_apellido }}</td>
                        <td>{{ $item->ci }}</td>
                        <td>{{ $item->direccion }}</td>
                        <td>
                            <a href="{{ route('personal.edit', $item) }}" class="btn btn-outline-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('personal.destroy', $item) }}" method="POST" class="form-eliminar">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
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
@stop