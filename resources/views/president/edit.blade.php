  <h1 class="mb-4">EDITAR PRESIDENTE</h1>

  <form action="{{ route('president.update', $president->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="mb-3">
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre"
              placeholder="nombre"value="{{ old('nombre', $president->nombre) }}">
          <br>

          <label for="año">Año:</label>
          <input type="date" id="año" name="año"
              placeholder="año"value="{{ old('año', $president->año) }}">
          <br>

          <label for="fecha_nacimiento">Fecha de nacimiento:</label>
          <input type="date" id="fecha_nacimiento" name="fecha_nacimiento"
              placeholder="fecha de nacimiento"value="{{ old('fecha_nacimiento', $president->fecha_nacimiento) }}">
          <br>

          <label for="apellidos">Apellidos:</label>
          <input type="text" id="apellidos" name="apellidos"
              placeholder="apellidos"value="{{ old('apellidos', $president->apellidos) }}">

      </div>

      <button type="submit" class="btn btn-primary">
          <i class="bi bi-save"></i> ACEPTAR
      </button>
  </form>
