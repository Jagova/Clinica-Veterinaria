<h2>Crear clinica</h2>
<form action="/clinicas" method="POST">
    @csrf
    @method('POST')
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="">
    <button type="submit">Crear</button>
</form>