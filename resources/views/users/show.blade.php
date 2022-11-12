@include('layouts.header')
@include('layouts.menushowuser')

@section('header')
@endsection

<!-- Content Row -->
<div class="row">
    <div class="container-fluid">
            <!-- Page Heading -->
        <div class="alert alert-secondary" role="alert">
        Inicio/Tablas/<a href="/users" class="alert-link">Estudiantes/ </a>{{ $user->nombre }}.
        </div>
    </div>
              <!--body-->
              <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success" role="success">
                  {{ session('success') }}
                </div>
                @endif

        <section class="tarjeta">
            <div class="card__person">
            </div>
            <h5 class="card__name">{{$user->nombre }} {{ $user->apellido}}</h5>
            <p class="card__position">Estudiante</p>
            <p class="card__position">Correo:</p>
            <p class="card__position">{{$user->correo}}</p>
            <div class="button-container">
                <p class="card__position">Usuario:</p>
                <p class="card__position">{{$user->usuario}}</p>
                <a href="{{ route('users.index') }}" class="btn btn-sm btn-success mr-0"> Volver </a>
            </div>
        </section>

</div>
</div>

@include('layouts.footer')