@include('layouts.header')
@include('layouts.menushowuser')

@section('header')
@endsection

<div class="row">
    <div class="container-fluid" style="width: 500px;">
                                   <!-- Editar User -->
                                   <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Editar estudiante</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <form class="row g-3" action="{{route ('users.update',$user->id)}}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="col-md-6">
                                                  <label for="correo" class="form-label">Correo</label>
                                                  <input type="email" name="correo" class="form-control" value="{{$user->correo}}">
                                                  @if ($errors->has('correo'))
                                                  <span class="error text-danger" for="input-correo">{{ $errors->first('correo') }}</span>
                                                  @endif
                                                </div>
                                                <div class="col-md-6">
                                                  <label for="contraseña" class="form-label">Contraseña</label>
                                                  <input type="password" name="contraseña" class="form-control" id="inputPassword4" value="{{$user->contraseña}}">
                                                </div>
                                                <div class="col-6">
                                                  <label for="nombre" class="form-label">Nombre</label>
                                                  <input type="text" name="nombre" class="form-control"  value="{{$user->nombre}}">
                                                </div>
                                                <div class="col-6">
                                                  <label for="apellido" class="form-label">Apellido</label>
                                                  <input type="text" name="apellido" class="form-control" value="{{$user->apellido}}">
                                                </div>
                                                <div class="col-md-6">
                                                </div>
                                                <div class="col-md-4">
                                                </div>
                                                <div class="col-md-2">
                                                </div>
                                                <div class="col-12">
                                                  <label for="usuario" class="form-label">Usuario</label>
                                                  <input type="text" name="usuario" class="form-control" value="{{$user->usuario}}">
                                                </div>
                                                <div class="col-12">
                                                  <a class="btn btn-danger m-3"  href="/users" >Cancelar</a>
                                                  <button type="submit" class="btn btn-primary">Editar</button>
                                                </div>
                                              </form>
                                        </div>
                                    </div>
                                </div>
    </div>
</div>
</div>
<!-- End of Main Content -->

@include('layouts.footer')