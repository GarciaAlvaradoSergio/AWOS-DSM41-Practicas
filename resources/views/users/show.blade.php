@include('layouts.header')
@include('layouts.menu')

@section('header')
@endsection

<!-- Content Row -->
<div class="row">
    <div class="container-fluid">
            <!-- Page Heading -->
        <div class="alert alert-secondary" role="alert">
        Inicio/Tablas/<a href="/users" class="alert-link">Estudiantes/ </a>{{ $item->name }}.
        </div>
    </div>

        <section class="tarjeta">
            <div class="card__person">
            </div>
            <h5 class="card__name">{{$item->name}}</h5>
            <p class="card__position">Estudiante</p>
            <p class="card__position">Correo:</p>
            <p class="card__position">{{$item->email}}</p>
            <div class="button-container">
                <a href="{{ route('users.index') }}" class="btn btn-sm btn-success mr-0"> Volver </a>
            </div>
        </section>

</div>

@include('layouts.footer')