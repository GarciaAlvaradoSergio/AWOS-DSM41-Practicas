@include('layouts.header')
@include('layouts.menu')

@section('header')
@endsection
<div class="row">
    <div class="container-fluid" style="width: 500px;">
                                   <!-- Editar User -->
                                   <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Agregar Imagen</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <form class="row g-3" action="{{ route('images.store')  }}" method="post" enctype="multipart/form-data">
                                                {!! csrf_field() !!}
                                                <div class="col-12">
                                                    <img id="imagenSeleccionada" style="max-height: 100px;">           
                                                </div>
                                                <div class="col-md-6">
                                                  <label for="" class="form-label">Titulo</label>
                                                  <input type="text" name="nombre" class="form-control" id="" autofocus required>
                                                </div>
                                                <div class="col-md-6">
                                                  <label for="" class="form-label">Descripcion</label>
                                                  <input type="text" name="descripcion" class="form-control" id="" required>
                                                </div>
                                                <div class="col-12">  
                                                </div>
                                                <div class="col-12">
                                                    <input name="imagen" id="imagen" type='file' class="hidden" />
                                                </div>
                                                <div class="col-12">
                                                    <a class="btn btn-danger m-3"  href="/images" >Cancelar</a>
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