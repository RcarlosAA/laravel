@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        
        <div class="d-flex justify-content-between">
            <h2>Lista Personas</h2>
            <a href="{{ route('persona.create') }}" class="btn btn-primary text-center mt-2">Crear</a>
        </div>
    </div>
    @if (Session:: get('success'))
    <div class="alert alert-success mt-2">
        {{ Session::get('success') }}
        <br>
    </div>
    @endif
    <div class="col-12 mt-4">
        <table class="table table-bordered ">
            <tr class="text-secondary">
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>CI</th>
                <th>Edad</th>
                <th>Celular</th>
                <th>Acción</th>
            </tr>
            
            @foreach ($persona as $item)
            <tr>
                <td >{{ $item->nombres }}</td>
                <td >{{ $item->apellidos }}</td>
                <td >{{ $item->ci }}</td>
                <td >{{ $item->edad }}</td>
                <td >{{ $item->celular }}</td>
                <td>
                    <a href="{{ route('persona.edit',$item->id) }}" class="btn btn-warning">Editar</a>
                    
                    <form action="{{ route('persona.destroy',$item) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td> 
            </tr>
            @endforeach
            
            
        </table>
    </div>
</div>
@endsection