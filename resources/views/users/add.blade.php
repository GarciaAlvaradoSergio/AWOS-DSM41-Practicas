@include('layouts.header')
@include('layouts.menushowuser')

@section('header')
@endsection
<div class="row">
    <div class="container-fluid" style="width: 500px;">
                                   <!-- Editar User -->
                                   <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Agregar estudiante</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <form class="row g-3" action="{{ route('users.store')  }}" method="post">
                                                {!! csrf_field() !!}

                                                <div class="col-md-6">
                                                  <label for="inputEmail4" class="form-label">Correo</label>
                                                  <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="ejemplo@ejemplo.com"autofocus required>
                                                </div>
                                                <div class="col-md-6">
                                                  <label for="inputPassword4" class="form-label">Contraseña</label>
                                                  <input type="password" name="password" class="form-control" id="inputPassword4" required>
                                                </div>
                                                <div class="col-6">
                                                  <label for="inputAddress" class="form-label">Nombre</label>
                                                  <input type="text" name="name" class="form-control" id="inputAddress" placeholder="Estudiante" required>
                                                </div>
                                                <div class="col-12">
                                                    <a class="btn btn-danger m-3"  href="/users" >Cancelar</a>
                                                  <button type="submit" class="btn btn-primary">Agregar</button>
                                                </div>
                                              </form>
                                        </div>
                                    </div>
                                </div>
    </div>
</div>
</div>
@include('layouts.footer')