@extends('template.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">

            <!-- 1. CAMBIADA LA RUTA A MODULO.STORE -->
            <form action="{{ route('modulo.store') }}" method="post">
                @csrf
                
                <!-- CAMPO NOMBRE -->
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del Módulo</label>
                    <input type="text" value="{{ old('nombre') }}" class="form-control" id="nombre" name="nombre" required placeholder="Introduce el nombre del módulo">
                    @error('nombre')
                    <div class="alert alert-danger" role="alert" style="margin-top: 6px;">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <!-- CAMPO ABREVIATURA -->
                <div class="mb-3">
                    <label for="abreviatura" class="form-label">Abreviatura</label>
                    <input type="text" value="{{ old('abreviatura') }}" class="form-control" id="abreviatura" name="abreviatura" required placeholder="Introduce la abreviatura">
                    @error('abreviatura')
                    <div class="alert alert-danger" role="alert" style="margin-top: 6px;">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <!-- CAMPO HORAS -->
                <div class="mb-3">
                    <label for="horas" class="form-label">Horas</label>
                    <input type="number" value="{{ old('horas') }}" class="form-control" id="horas" name="horas" required min="1" placeholder="Introduce el número de horas">
                    @error('horas')
                    <div class="alert alert-danger" role="alert" style="margin-top: 6px;">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <!-- CAMPO CRÉDITOS -->
                <div class="mb-3">
                    <label for="creditos" class="form-label">Créditos</label>
                    <input type="number" value="{{ old('creditos') }}" class="form-control" id="creditos" name="creditos" required min="1" placeholder="Introduce los créditos">
                    @error('creditos')
                    <div class="alert alert-danger" role="alert" style="margin-top: 6px;">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <!-- BOTÓN DE ENVÍO -->
                <button type="submit" class="btn btn-secondary">
                    Crear módulo
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
