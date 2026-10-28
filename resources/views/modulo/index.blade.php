@extends('template.base')

@section('before-content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <a class="btn btn-secondary" href="{{ route('modulo.create') }}">Crear Modulo</a>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <table class="table table-hover">
                @foreach($modulos as $modulo)
                    <tr>
                        <td>{{ $modulo->id }}</td>
                        <td>{{ $modulo->nombre }}</td>
                        <td>{{ $modulo->abreviatura }}</td>
                        <td>{{ $modulo->horas}}</td>
                        <td>{{ $modulo->creditos}}</td>
                        <td>
                            <!-- 1. CORREGIDO: De alumno.show a modulo.show -->
                            <a href="{{ route('modulo.show', $modulo) }}" class="btn btn-secondary">View</a>
                            
                            <!-- 2. CORREGIDO: De alumno.edit a modulo.edit -->
                            <a href="{{ route('modulo.edit', $modulo) }}" class="btn btn-secondary">Edit</a>
                            
                            <!-- 3. CORREGIDO: De $alumno a $modulo en el action -->
                            <form data-message="{{ $modulo->nombre }}" class="confirm-dialog" action="{{ route('modulo.destroy', $modulo) }}" method="post" style="display : inline;">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="btn btn-secondary">
                             </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    document.querySelectorAll('form.confirm-dialog').forEach (
        form => {
            form.addEventListener('submit' , e => {
                // Pequeño ajuste estético: cambiado 'asignatura' por 'el módulo'
                const message = '¿Seguro que quieres borrar el módulo ' + form.dataset.message + '?';
                if(!confirm(message)) {
                    e.preventDefault();
                }
            });
        }
    );
</script>
@endsection
