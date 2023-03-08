@extends('layouts/main')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col">
            <h2>El dato a eliminar</h2>
            <ul>
                <li>El nombre es:{{$items->nombre}}</li>
                <li>la marca es:{{$items->marca}}</li>
                <li>El modelo es:{{$items->modelo}}</li>
                <li>La Ram es:{{$items->RAM}}</li>
                <li>El procesador es:{{$items->procesador}}</li>
                <li>El disco duro es:{{$items->discoduro}}</li>
                <li>El comentario es:{{$items->descripcion}}</li>
                <li>La imagen es:<img src="{{URL::asset($items->imagen)}}" style="width :10em"></li>
                
            </ul>
            <form action="{{route('destroy',$items->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button href="" class="btn btn-danger mt-3">Eliminar definitivamente</button>
            </form>
        </div>
    </div>
</div>
@endsection