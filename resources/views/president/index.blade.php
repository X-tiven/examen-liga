<div class="container mt-4">
    <table>
        <tr>
            <th>id</th>
            <th>dni</th>
            <th>nombre</th>
            <th>año</th>
            <th>fecha de nacimiento</th>
            <th>apellidos</th>
        </tr>
        @foreach ($presidents as $president)
    <tr>
        <td>{{ $president['id'] }}</td>
        <td>{{ $president['dni'] }}</td>
        <td>{{ $president['nombre'] }}</td>
        <td>{{ $president['año'] }}</td>
        <td>{{ $president['fecha_nacimiento'] }}</td>
        <td>{{ $president['apellidos'] }}</td>
        <td>
            <form action="{{ route('president.destroy', $president->id) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger d-flex align-items-center gap-2">
                    <i class="bi bi-trash-fill"></i> Eliminar
                </button>
            </form>
        </td>
        <td>
            <a href="{{ route('president.edit', $president->id) }}" class="btn btn-success btn-sm">Editar</a>
        </td>
        <td><a href="{{ route('president.show', $president->id) }}" class="btn btn-info btn-sm">Ver más</a></td>
    </tr>
@endforeach
</div>
