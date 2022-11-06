@include('layouts.header')
@include('layouts.menu')

@section('header')
@endsection

<div id="main-container">
    <h1>Usuarios</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th><th>Nombre</th><th>Correo</th><th>Contraseña</th><th>Registro </th><th>Operaciones</th>
            </tr>
        </thead>
            @foreach ($users as $item)
                
            
        <tr>
            <td>{{$item->id}}</td>
            <td>{{ $item-> name}}</td>
            <td>{{ $item-> email}}</td>
            <td>{{ $item-> password}}</td>
            <td>{{ $item-> created_at}}</td>
            <td>
<!--Boton-->
<div class="boton-modal">
    <label for="btn-modal">
        <i class="fa-solid fa-gear"></i>
    </label>
</div>
<!--Fin de Boton-->
            @endforeach
        </tr>
    </table>
</div>
<!--Ventana Modal-->
<input type="checkbox" id="btn-modal">
<div class="container-modal">
    <div class="content-modal">
        <h2>¡Bienvenido!</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, nostrum!</p>
        <div class="btn-cerrar">
            <label for="btn-modal">Cerrar</label>
        </div>
    </div>
    <label for="btn-modal" class="cerrar-modal"></label>
</div>
<!--Fin de Ventana Modal-->

@include('layouts.footer')