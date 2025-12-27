


<h1> login </h1>

<form action="{{route('login')}}" method="POST" >
@csrf
<div>
    <label for="email"> correo </label>
    <input type="email" id="email" name="email">
</div>
<div>
    <label for="password"> contraseña </label>
    <input type="password" id="password" name="password">
</div>
<button type="submit"> Iniciar Session </button>


</form>




