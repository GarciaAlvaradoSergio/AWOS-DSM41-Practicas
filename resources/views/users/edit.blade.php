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
                                                <div class="col-md-12">
                                                  <label for="correo" class="form-label">Correo</label>
                                                  <input type="email" name="email" class="form-control" value="{{$user->email}}">
                                                  @if ($errors->has('email'))
                                                  <span class="error text-danger" for="input-correo">{{ $errors->first('email') }}</span>
                                                  @endif
                                                </div>
                                                <div class="col-md-6">
                                                  <label for="" class="form-label">Contraseña</label>
                                                  <input type="password" name="password" class="form-control" id="inputPassword4">
                                                </div>
                                                <div class="col-6">
                                                  <label for="" class="form-label">Nombre</label>
                                                  <input type="text" name="name" class="form-control"  value="{{$user->name}}">
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