@extends("menu")

@section("titulo", "COLEGIO SAN LUIS")

@section("contenido")
<div class="container mt-3">
    <header>
        <h1>Editar Datos del Estudiante</h1>
        <hr />
    </header>
    <nav>
        <a href="{{ route('estudiantes') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-alt-circle-left"></i> VOLVER
        </a>
    </nav>
    <section class="mt-3">
        <form method="post" action="{{ route('estudiantes.update', $estudiantes) }}">
            @csrf
            @method("put")
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Estudiante</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $estudiantes->nombre) }}" />
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
                <input type="text" class="form-control" id="grado" name="grado" value="{{ old('grado', $estudiantes->grado) }}"/>
            </div>
            @if ($errors->first('grado'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ $errors->first('grado') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            

            <div class="mb-3">
                <label for="genero" class="form-label">Genero del Estudiante</label>
                <input type="text" class="form-control" id="genero" name="genero" value="{{ old('genero', $estudiantes->genero) }}" />
            </div>
            @if ($errors->first('genero'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ $errors->first('genero') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <button type="submit" class="btn btn-outline-primary">
                <i class="fas fa-save"></i> Actualizar Datos</button>
        </form>
    </section>
</div>
@endsection