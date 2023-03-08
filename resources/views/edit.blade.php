@extends('layouts/main')
@section('contenido')
<div class="container">
    <h2>
        Actualizar persona
    </h2>
    <div class="row">
        <div class="col">
            <a href="/" class="btn btn-info"> Regresar</a>
            <hr>
            <form action="{{route('update', $items->id)}}" method="post">
                @csrf
                @method('PUT')
                <label for="nombre">Escribe el nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{$items->nombre}}">
                <label for="marca">Escribe el marca</label>
                <input type="text" name="marca" id="marca" class="form-control" value="{{$items->marca}}">
                <label for="modelo">Escribe el modelo</label>
                <input type="text" name="modelo" id="modelo" class="form-control" value="{{$items->modelo}}">
                <label for="RAM">Escribe la RAM</label>
                <input type="text" name="RAM" id="RAM" class="form-control" value="{{$items->RAM}}">
                <label for="procesador">Escribe el procesador</label>
                <input type="text" name="procesador" id="procesador" class="form-control" value="{{$items->procesador}}">
                <label for="discoduro">Escribe el discoduro</label>
                <input type="text" name="discoduro" id="discoduro" class="form-control" value="{{$items->discoduro}}">
                <label for="descripcion">Escribe la descripcion</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{$items->descripcion}}">
                <label for="imagen">Escribe la imagen</label>
                <input type="text" name="imagen" id="imagen" class="form-control" value="{{$items->imagen}}">
                <button class="btn btn-warning mt-3">
                    Actualizar
                </button>
            </form>
        </div>
    </div>
</div>
@endsection