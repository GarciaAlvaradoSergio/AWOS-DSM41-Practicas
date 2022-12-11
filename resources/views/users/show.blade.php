@include('layouts.header')
@include('layouts.menushowuser')

@section('header')
@endsection

<!-- Content Row -->
<div class="row">
    <div class="container-fluid">
            <!-- Page Heading -->
        <div class="alert alert-secondary" role="alert">
        Inicio/Tablas/<a href="/users" class="alert-link">Estudiantes/ </a>{{ $user->name }}.
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
                <a href="{{ route('users.index') }}" class="btn btn-sm btn-success mr-0 boton" style="margin-left: 120px;
                                                                                                      margin-top:50px;"> Volver </a>
            </div>
            <p class="card__position">Estudiante</p>
            <h5 class="card__name">{{$user->name }}</h5>
            <p class="card__position">Correo:</p>
            <p class="card__position">{{$user->email}}</p>
            <div class="button-container">
            </div>
        </section>

</div>
</div>

@include('layouts.footer')