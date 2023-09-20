@extends("menu")

@section("titulo", "COLEGIO SAN LUIS")

@section("contenido")
<style>
    h1 {
        text-align: center;
    }
    h5 {
        text-align: center;
    }
</style>
<div class="container mt-3">
    <header>
        <h1>Datos del Alumno → {{ $estudiantes->apellido }} {{ $estudiantes->nombre }}</h1>
        <hr />
    </header>
    <nav>
        <a href="{{ route('estudiantes') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-alt-circle-left"></i> VOLVER
        </a>
    </nav>
    <section>
        <div class="alert alert-info mt-3" role="alert">
            <h5>Nombres: {{ $estudiantes->nombre }}</h5>

            <h5>Apellidos: {{ $estudiantes->apellido }}</h5>

            <h5>Dirección: {{ $estudiantes->direccion }}</h5>

            <h5>Grado: {{ $estudiantes->grado }}</h5>

            <h5>Genero: {{ $estudiantes->genero }}</h5>
        </div>
    </section>
</div>
@endsection