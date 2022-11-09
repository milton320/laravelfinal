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
                            <a href="#" class="btn btn-outline-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button class="btn btn-outline-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button>
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
@stop