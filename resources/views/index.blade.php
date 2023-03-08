@extends('layouts/main')
@section('contenido')
    
<div class="container">
    <h2>
        Crud basico con laravel 8
    </h2>
    <div class="row">
        <div class="col">
            <a href="/create" class="btn btn-primary">
                Nombre nuevo
            </a>
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Ram</th>
                        <th>Procesador</th>
                        <th>Disco duro</th>
                        <th>Descripcion</th>
                        <th>Imagen</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->marca}}</td>
                        <td>{{$item->modelo}}</td>
                        <td>{{$item->RAM}}</td>
                        <td>{{$item->procesador}}</td>
                        <td>{{$item->discoduro}}</td>
                        <td>{{$item->descripcion}}</td>
                        <td><img src="{{URL::asset($item->imagen)}}" style="width :10em"></td>
                        <td>
                            <a href="{{route('edit',$item->id)}}" class="btn btn-warning">Editar</a>
                        </td>
                        <td><a href="{{route('show',$item->id)}}" class="btn btn-danger">Eliminar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection