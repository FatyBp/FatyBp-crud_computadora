@extends('layouts/main')
@section('contenido')
<div class="container">
    <h2>
        Agregar nuevo nombre
    </h2>
    <div class="row">
        <div class="col">
            <a href="/" class="btn btn-info"> Regresar</a>
            <hr>
            <form action="/store" method="post">
                @csrf
                @method('POST')
                <label for="nombre">Escribe el nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
                <label for="marca">Escribe el marca</label>
                <input type="text" name="marca" id="marca" class="form-control" required>
                <label for="modelo">Escribe el modelo</label>
                <input type="text" name="modelo" id="modelo" class="form-control" required>
                <label for="RAM">Escribe la RAM</label>
                <input type="text" name="RAM" id="RAM" class="form-control" required>
                <label for="procesador">Escribe el procesador</label>
                <input type="text" name="procesador" id="procesador" class="form-control" required>
                <label for="discoduro">Escribe el discoduro</label>
                <input type="text" name="discoduro" id="discoduro" class="form-control" required>
                <label for="descripcion">Escribe la descripcion</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control">
                <label for="imagen">Escribe el url de la imagen</label>
                <input type="text" name="imagen" id="imagen" class="form-control">
                <button class="btn btn-primary mt-3">
                    Guardar
                </button>
            </form>
        </div>
    </div>
</div>
@endsection