@extends("menu")

@section("titulo", "COLEGIO SAN LUIS")

@section("contenido")
<style>
    h1 {
        text-align: center;
    }
</style>
<div class="container mt-3">
    <header>
        <h1>REGISTRAR ESTUDIANTE</h1>
        <hr />
    </header>
    <nav>
        <a href="{{ route('estudiantes') }}" class="btn btn-outline-secondary btn-sm">
            <i class="fas fa-arrow-alt-circle-left"></i> VOLVER
        </a>
    </nav>
    <section class="mt-3">
        <form method="post" action="{{ route('estudiantes') }}">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Estudiante</label>
                <input type="text" class="form-control " id="nombre" name="nombre" value="{{ old('nombre', $estudiantes->nombre) }}" />
            </div>
            @if ($errors->first('nombre'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ $errors->first('nombre') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido del Estudiante</label>
                <input type="text" class="form-control" id="apelllido" name="apellido" value="{{ old('apellido', $estudiantes->apellido) }}" />
            </div>
            @if ($errors->first('apellido'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ $errors->first('apellido') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección del Estudiante</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion', $estudiantes->direccion) }}" />
            </div>
            @if ($errors->first('direccion'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ $errors->first('direccion') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="mb-3">
                <label for="grado" class="form-label">Grado del Estudiante</label>
                <select class="form-select" id="grado" name="grado">
                    <option disabled selected>Seleccionar</option>
                    <option value="Primero" {{ old('grado', $estudiantes->grado) == 'Primero' ? 'selected' : '' }}>Primero</option>
                    <option value="Segundo" {{ old('grado', $estudiantes->grado) == 'Segundo' ? 'selected' : '' }}>Segundo</option>
                    <option value="Tercero" {{ old('grado', $estudiantes->grado) == 'Tercero' ? 'selected' : '' }}>Tercero</option>
                    <option value="Cuarto" {{ old('grado', $estudiantes->grado) == 'Cuarto' ? 'selected' : '' }}>Cuarto</option>
                    <option value="Quinto" {{ old('grado', $estudiantes->grado) == 'Quinto' ? 'selected' : '' }}>Quinto</option>
                </select>
            </div>

            @if ($errors->first('grado'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ $errors->first('grado') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="mb-3">
                <label for="genero" class="form-label">Genero del Estudiante</label>
                <select class="form-select" id="genero" name="genero">
                    <option disabled selected>Seleccionar</option>
                    <option value="Masculino" {{ old('genero', $estudiantes->genero) == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="Femenino" {{ old('genero', $estudiantes->genero) == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                </select>
            </div>

            @if ($errors->first('genero'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ $errors->first('genero') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <button type="submit" class="btn btn-outline-primary btn-sm">
                <i class="fas fa-save"></i> Registrar Datos</button>
        </form>
    </section>
</div>
@endsection