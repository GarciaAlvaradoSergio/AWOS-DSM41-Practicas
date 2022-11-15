@include('layouts.header')
@include('layouts.menushowcategory')

@section('header')
@endsection
<div class="row">
    <div class="container-fluid" style="width: 500px;">
                                   <!-- Editar User -->
                                   <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Agregar categoria</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <form class="row g-3" action="{{ route('categories.store')  }}" method="post">
                                                {!! csrf_field() !!}
                                           
                                                <div class="col-12">
                                                    <label for="inputAddress" class="form-label">Nombre de la Categoria</label>
                                                    <input type="text" name="nombreCategoria" class="form-control" id="inputAddress" placeholder="Categoria">
                                                  </div>
                                                <div class="col-md-6">
                                                </div>
                                                <div class="col-md-4">
                                                </div>
                                                <div class="col-md-2">
                                                </div>
                                                <div class="col-12">
                                                </div>
                                                <div class="col-12">
                                                    <a class="btn btn-danger m-3"  href="/categories" >Cancelar</a>
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