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
        <form method="POST" action="{{ route('externo.store')}}">
            @csrf
            <div class="mb-3">
                <label for="titulo" class="form-label">titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" aria-descr>
            </div>
            <div class="mb-3">
                <label for="institucion_remitente" class="form-label">institucion remitente</label>
                <input type="text" class="form-control" id="institucion_remitente" name="institucion_remitente" aria-descr>
            </div>
            <div class="mb-3">
                <label for="persona_firmante" class="form-label">persona firmante</label>
                <input type="text" class="form-control" id="persona_firmante" name="persona_firmante" aria-descr>
            </div>
            <div class="mb-3">
                <label for="asunto" class="form-label">asunto</label>
                <input type="text" class="form-control" id="asunto" name="asunto" aria-descr>
            </div>
            <div class="mb-3">
                <label for="fecha_documento" class="form-label">fecha documento</label>
                <input type="date" class="form-control" id="fecha_documento" name="fecha_documento" aria-descr>
            </div>
            <div class="mb-3">
                <label for="tipo_documento" class="form-label">tipo documento</label>
                <input type="text" class="form-control" id="tipo_documento" name="tipo_documento" aria-descr>
            </div>
            <div class="mb-3">
                <label for="cite" class="form-label">cite</label>
                <input type="text" class="form-control" id="cite" name="cite" aria-descr>
            </div>
            <div class="mb-3">
                <label for="via" class="form-label">via</label>
                <input type="text" class="form-control" id="via" name="via" aria-descr>
            </div>
            <div class="mb-3">
                <label for="responsable" class="form-label">responsable</label>
                <input type="text" class="form-control" id="responsable" name="responsable" aria-descr>
            </div>
            <div class="mb-3">
                <label for="deriva" class="form-label">deriva</label>
                <select class="form-control" name="deriva">
                    @foreach ($personal as $item)
                        <option value="{{ $item->id }}"  >{{ $item->primer_nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="fecha_ingreso" class="form-label">fecha ingreso</label>
                <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" aria-descr>
            </div>

            <div class="mb-3">
                
                <input type="text" class="form-control" id="personal_id" name="personal_id" value="3" hidden aria-descr>
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