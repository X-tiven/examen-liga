<div class="container my-5">
    <h2 class="mb-4 text-success">Detalles de president</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-success">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">dni</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Año</th>
                    <th scope="col">Fecha de Nacimiento</th>
                    <th scope="col">Apellidos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $president['id'] }}</td>
                    <td>{{ $president['dni'] }}</td>
                    <td>{{ $president['nombre'] }}</td>
                    <td>{{ $president['año'] }}</td>
                    <td>{{ $president['fecha_nacimiento'] }}</td>
                    <td>{{ $president['apellidos'] }}</td>
                </tr>
                
            </tbody>
        </table>
        <a href="{{ route('president.index', $president->id) }}" class="btn btn-info btn-sm">Regresar</a>
    </div>
</div>