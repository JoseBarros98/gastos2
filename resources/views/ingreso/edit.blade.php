<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <title>Añadir Ingreso</title>
  <style>
  * {
    margin: 0;
    padding: 0;
  }
  
  body {
    background: white;
    color: #435160;
    font-family: "Open Sans", sans-serif;
  }
  
  h3 {
    color: #6D7781;
    font-family: "Sofia", cursive;
    font-size: 15px;
    font-weight: bold;
    font-size: 3.6em;
    text-align: center;
    margin-bottom: 20px;
  }
  
  a {
    color: #435160;
    text-decoration: none;
  }
  .nav{
    font-size:1.5em;
    font-family:"Sofia";
  }
  
  .login {
    width: 350px;
    position: absolute;
    top: 10%;
    left: 50%;
    margin-left: -175px;
  }
  
  
  input[type="text"], input[type="date"] {
    width: 350px;
    padding: 20px 0px;
    background: transparent;
    border: 0;
    border-bottom: 1px solid #435160;
    outline: none;
    color: #6D7781;
    font-size: 16px;
  }
  input[type=checkbox] {
    display: none;
  }
  
  label {
    display: block;
    position: absolute;
    margin-right: 10px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: transparent;
    content: "";
    transition: all 0.3s ease-in-out;
    cursor: pointer;
    border: 3px solid #435160;
  }
  
  #agree:checked ~ label[for=agree] {
    background: #435160;
  }
  
  input[type="submit"] {
    background: #1FCE6D;
    border: 0;
    width: 350px;
    height: 40px;
    border-radius: 3px;
    color: #fff;
    font-size: 12px;
    cursor: pointer;
    transition: background 0.3s ease-in-out;
  }
  input[type="submit"]:hover {
    background: #16aa56;
    animation-name: shake;
  }
  
  .forgot {
    margin-top: 30px;
    display: block;
    font-size: 11px;
    text-align: center;
    font-weight: bold;
  }
  .forgot:hover {
    margin-top: 30px;
    display: block;
    font-size: 11px;
    text-align: center;
    font-weight: bold;
    color: #6D7781;
  }
  
  
  ::-webkit-input-placeholder {
    color: #435160;
    font-size: 12px;
  }
  
  .animated {
    animation-fill-mode: both;
    animation-duration: 1s;
  }
  
  @keyframes shake {
    0%, 100% {
      transform: translateX(0);
    }
    10%, 30%, 50%, 70%, 90% {
      transform: translateX(-10px);
    }
    20%, 40%, 60%, 80% {
      transform: translateX(10px);
    }
  }
  #menu{
  background-color: #000;
 }

 #menu ul{
  list-style: none;
  margin: 0;
  padding: 0;clip-path: 
 }

 #menu ul li{
  display: inline-block;
 }

 #menu ul li a{
  color: white;
  display: block;
  padding: 20px 20px;
  text-decoration: none;
 }

 #menu ul li a:hover{
  background-color: #42B881;
 }
  
  </style>
</head>
<body>


<div class='login'>    
  <h3>Añadir Ingreso</h3>

  @if ($errors->any())
         <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
               @endforeach
           </ul>
         </div><br />
       @endif

  <form method="POST" action="{{ route('ingreso.update',$ingreso->id) }}">
  @csrf
  @method('PUT')
    <input name='nombre' placeholder='Nombre' type='text' value="{{$ingreso->nombre}}">
    <input  name='descripcion' placeholder='Descripcion' type='text' value="{{$ingreso->descripcion}}">
    Fecha <input name='fecha' placeholder='Fecha' type='date' value="{{$ingreso->fecha}}">
    <input  name='monto' placeholder='Monto' type='text' value="{{$ingreso->monto}}">


    <input class='animated' type='submit' value='Actualizar Ingreso'>
  </form>
</div>

<div id="menu">
 <ul>
  
   <li><a href="/">Inicio</a></li>
   <li><a href="/gasto">Gastos</a></li>
   <li><a href="/ingreso">Ingresos</a></li>
   <li><a href="/contacto">Contacto</a></li>
  </li>
 </ul>
</div>


</body>
</html>