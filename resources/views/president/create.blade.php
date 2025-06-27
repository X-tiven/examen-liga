<form action="{{ route('president.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
<h1>CREAR PRESIDENTE</h1>
        <label for="title">DNI:</label>
        <input type="text" id="title" name="dni" placeholder="dni">
        <br>

        <label for="title">Nombre:</label>
        <input type="text" id="title" name="nombre" placeholder="nombre">
        <br>

        <label for="title">Año:</label>
        <input type="date" id="title" name="año" placeholder="año">
        <br>
        
        <label for="title">Fecha de nacimiento:</label>
        <input type="date" id="title" name="fecha_nacimiento" placeholder="fecha de nacimiento">
        <br>

        <label for="title">Apellidos:</label>
        <input type="text" id="title" name="apellidos" placeholder="apellidos">
        <br>
        <button type="submit" class="btn btn-outline-success mb-4 ">Crear</button>
        <a href="{{ route('president.index') }}" class="btn btn-primary mb-4 ms-2">Listar Áreas</a>
    </form>