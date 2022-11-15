@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
        <div class="card-body">
            <strong>ACTUALIZAR {{ $personal->primer_nombre }}</strong>
        </div>
    </div>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach 
                    </ul>
                </div>
            @endif
        <form method="POST" action="{{ route('personal.update', $personal) }}">
            @csrf
            @method('PUT')
            <h1>{!! csrf_field() !!}</h1>
            <div class="mb-3">
                <label for="primer_nombre" class="form-label">Primer Nombre</label>
                <input type="text" class="form-control" id="primer_nombre" name="primer_nombre" value="{{ $personal->primer_nombre }}" >
            </div>
            <div class="mb-3">
                <label for="segundo_nombre" class="form-label">Segundo Nombre</label>
                <input type="text" class="form-control" id="segundo_nombre" value="{{ $personal->segundo_nombre }}" name="segundo_nombre" aria-descr>
            </div>
            <div class="mb-3">
                <label for="primer_apellido" class="form-label">Primer Apellido</label>
                <input type="text" class="form-control" id="primer_apellido" value="{{ $personal->primer_apellido }}" name="primer_apellido" aria-descr>
            </div>
            <div class="mb-3">
                <label for="segundo_apellido" class="form-label">Segundo Apellido</label>
                <input type="text" class="form-control" id="segundo_apellido" value="{{ $personal->segundo_apellido }}" name="segundo_apellido" aria-descr>
            </div>
            <div class="mb-3">
                <label for="ci" class="form-label">ci</label>
                <input type="text" class="form-control" id="ci" value="{{ $personal->ci }}" name="ci" aria-descr>
            </div>
            <div class="mb-3">
                <label for="extension" class="form-label">extension</label>
                <input type="text" class="form-control" id="extension" value="{{ $personal->extension }}" name="extension" aria-descr>
            </div>
            <div class="mb-3">
                <label for="complemento" class="form-label">complemento</label>
                <input type="text" class="form-control" id="complemento" value="{{ $personal->complemento }}" name="complemento" aria-descr>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $personal->direccion }}" aria-descr>
            </div>
            <div class="mb-3">
                <label for="usuario" class="form-label">usuario</label>
                <input type="text" class="form-control" id="usuario" value="{{ $personal->usuario_id }}" name="usuario_id" aria-descr>
            </div>
            <br>
            
            <button type="submit" class="btn btn-success">ACTIALIZAR</button>
            <button type="submit" class="btn btn-primary">CANCELA</button>
            <button class="btn btn-primary" onclick="window.print()">Print this page</button>
        </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('hola mundo'); </script>
@stop