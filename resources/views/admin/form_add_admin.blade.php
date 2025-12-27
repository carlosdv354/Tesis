

<h1>
    add admin form
</h1>

<form action="{{route('add_admin')}}" method="POST">
    <div>
        <label for="name">nombre</label>
        <input type="text" id="name" value="" name="name">
    </div>
    <div>
        <label for="mail"> correo </label>
        <input type="email" id="mail" value="" name="email">
    </div>
    <div>
        <label for=password> contraseña </label>
        <input type="password" id="password" value="" name="password">
    </div>
    <div>
        <button type="submit"> Crear Admin </button>
    </div>
    
    
    
@csrf

</form>