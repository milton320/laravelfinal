@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
    <p>Bienvenido Usuario</p>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">ROL</th>
                    <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $item)
        
                    
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>Administrador</td>
                        <td>@mdo</td>
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
    <script> console.log('Hi!'); </script>
@stop