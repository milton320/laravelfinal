@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="card">
        <div class="card-body">
            <strong>REGISTRO</strong>
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
        <form method="POST" action="{{ route('personal.store')}}">
            @csrf
            <div class="mb-3">
                <label for="primer_nombre" class="form-label">Primer Nombre</label>
                <input type="text" class="form-control" id="primer_nombre" name="pnombre" aria-descr>
            </div>
            <div class="mb-3">
                <label for="segundo_nombre" class="form-label">Segundo Nombre</label>
                <input type="text" class="form-control" id="segundo_nombre" name="snombre" aria-descr>
            </div>
            <div class="mb-3">
                <label for="primer_apellido" class="form-label">Primer Apellido</label>
                <input type="text" class="form-control" id="primer_apellido" name="papellido" aria-descr>
            </div>
            <div class="mb-3">
                <label for="segundo_apellido" class="form-label">Segundo Apellido</label>
                <input type="text" class="form-control" id="segundo_apellido" name="sapellido" aria-descr>
            </div>
            <div class="mb-3">
                <label for="ci" class="form-label">ci</label>
                <input type="text" class="form-control" id="ci" name="ci" aria-descr>
            </div>
            <div class="mb-3">
                <label for="extension" class="form-label">extension</label>
                <input type="text" class="form-control" id="extension" name="extension" aria-descr>
            </div>
            <div class="mb-3">
                <label for="complemento" class="form-label">complemento</label>
                <input type="text" class="form-control" id="complemento" name="complemento" aria-descr>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion" aria-descr>
            </div>
        
            <div class="mb-3">
                <label for="usuario" class="form-label">usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" value="{{ auth()->user()->id }}" aria-descr hidden>
            </div>
            <br>
            
            <button type="submit" class="btn btn-success">REGISTRAR</button>
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