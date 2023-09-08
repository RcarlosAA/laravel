@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-between">
            <h2>Editar Persona</h2>
            <a href="{{ route('persona.index') }}" class="btn btn-primary text-center mt-2">Volver</a>
        </div>
        
    </div>

    <form action="{{ route('persona.update',$person)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Nombres:</strong>
                    <input type="text" name="nombres" class="form-control" placeholder="Tarea" value="{{ $person->nombres }}" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Apellidos:</strong>
                    <input type="text" name="apellidos" class="form-control" placeholder="Tarea" value="{{ $person->apellidos }}" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>CI:</strong>
                    <input type="text" name="ci" class="form-control" placeholder="Tarea" value="{{ $person->ci }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Edad:</strong>
                    <input type="text" name="edad" class="form-control" placeholder="Tarea" value="{{ $person->edad }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Celular:</strong>
                    <input type="text" name="celular" class="form-control" placeholder="Tarea" value="{{ $person->celular }}">
                </div>
            </div>
            
            
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </form>
</div>
@endsection