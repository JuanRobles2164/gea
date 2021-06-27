@extends('layouts.master_container')

@section('styles')

@endsection

@section('contents')

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#guardarPermiso">
    Crear
</button>

<table class="table mt-2">
    <thead class="thead-dark">
        <tr>
            <th>Nro.</th>
            <th>Id_ruta</th>
            <th>Id_rol</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($permisos_roles as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->id_ruta}}</td>
                <td>{{$p->id_rol}}</td>
            </tr>
        @endforeach
    </tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="guardarPermiso" tabindex="-1" aria-labelledby="crearModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="crearModalLabel">Guardar permiso</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('roles_usuario.crear')}}" method="post">
            <div class="modal-body">
                    @csrf
                    <label class="form-check-label" for="rolesSelect">
                        Rol:
                    </label>
                    <select class="form-control" id="rolesSelect">
                        <option value="-1">Seleccione...</option>
                    @foreach ($roles as $rol)
                        <option value="{{$rol->id}}">{{$rol->nombre}}</option>
                    @endforeach
                    </select>

                    <label class="form-check-label" for="permisosSelect">
                        Nivel de permiso
                    </label>
                    <select class="form-control" id="permisosSelect">
                            <option value="-1">Seleccione..</option>
                        @foreach ($permisos_niveles as $permiso)
                            <option value="{{$permiso->getId()}}">{{$permiso->getNombre()}}</option>
                        @endforeach
                    </select>

                    <label class="form-check-label" for="rutasSelect">
                        Ruta
                    </label>
                    <select class="form-control" id="rutasSelect">
                        <option value="-1">Seleccione...</option>
                    @foreach ($rutas as $ruta)
                        <option value="{{$ruta->id}}">{{$ruta->ruta_completa}} - {{$ruta->verbo_http}}</option>
                    @endforeach
                    </select>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
      </div>
    </div>
  </div>

@endsection

@section('scripts')

@endsection
