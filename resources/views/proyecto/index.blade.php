@php
    use App\Enums\EEncapsulamientoRutas;
@endphp
@extends('layouts.master_container')

@section('contents')
<br>
<h3>Lista de proyectos</h3>
<br>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>DESCRIPCION</th>
                <th>FECHA INICIO</th>
                <th>FECHA FIN</th>
                <th> ACTIVO </th>
                <th> EDITAR </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyectos as $p)
                <tr>
                    <th>{{$p->id}}</th>
                    <th>{{$p->nombre}}</th>
                    <th>{{$p->descripcion}}</th>
                    <th>{{$p->fecha_inicio}}</th>
                    <th>{{$p->fecha_limite}}</th>
                    <th>{{$p->est_activo == 1 ? 'Si' : 'No'}}</th>
                    <th>
                        <a href="{{route('proyecto.cargar', 'id='.$p->id)}}" a class="btn btn-success btn-sm">
                            <i class="far fa-edit"></i>
                        </a>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

