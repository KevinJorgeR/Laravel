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
        <h1>ESTUDIANTES REGISTRADOS</h1>
        <hr />
    </header>
    <nav>
        <a href="{{ route('estudiantes.create') }}" class="btn btn-outline-primary btn-sm">
            <i class="fas fa-arrow-alt-circle-left"></i> REGISTRAR
        </a>
    </nav>
    <section>
        @if ($estudiantes)
        <table class="table table-striped mt-3">
            <tr>
                <th style="font-size: 20px;">Código de Alumno</th>
                <th style="font-size: 20px;">Nombres</th>
                <th style="font-size: 20px;">Apellidos</th>
                <th colspan="3" style="font-size: 20px;">Detalles
                </th>
                @foreach ($estudiantes as $arr_estudiantes)
            <tr>
                <td style="font-size: 19px;">{{ $arr_estudiantes->id }}</td>
                <td style="font-size: 19px;">{{ $arr_estudiantes->nombre }}</td>
                <td style="font-size: 19px;">{{ $arr_estudiantes->apellido }}</td>
                <td><a href="{{ route('estudiantes.show', $arr_estudiantes) }}" class="btn btn-outline-info btn-sm"><i class="fas fa-arrow-alt-circle-left"></i> Ver mas..</a></td>
                <td><a href="{{ route('estudiantes.edit', $arr_estudiantes) }}" class="btn btn-outline-success btn-sm"><i class="fas fa-arrow-alt-circle-left"></i> Editar</a></td>
                <td>
                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal_{{ $arr_estudiantes->id}}">
                    <i class="fas fa-arrow-alt-circle-left"></i> Borrar
                    </button>
                </td>
                <!-- Modal -->
                <div class="modal fade" id="modal_{{ $arr_estudiantes->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Borrar registro del estudiante</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>¿Seguro de borrar el registro?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                                <form method="post" action="{{ route('estudiantes.destroy', $arr_estudiantes) }}">
                                    @csrf
                                    @method("delete")
                                    <button type="sudmit" class="btn btn-primary">Borrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
            @endforeach
            </tr>
        </table>
        @else
        <div class="alert alert-danger" role="alert">
            No existen registros en la tabla
        </div>
        @endif
    </section>
</div>
@endsection