@include('layouts.header')
@include('layouts.menushowevent')

@section('header')
@endsection
<div class="row">
  <div class="container-fluid" style="width: 500px;">
    <!-- Editar User -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Agregar evento</h6>
      </div>
      <div class="card-body">
        <div class="text-center">
          <form class="row g-3" action="{{ route('events.store')  }}" method="post">
            {!! csrf_field() !!}

            <div class="col-md-12">
              <label for="inputEmail4" class="form-label">Titulo</label>
              <input type="text" name="nombreEvento" class="form-control" id="inputEmail4" autofocus required>
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Fecha</label>
              <input type="date" name="fecha" class="form-control" id="inputPassword4" required>
            </div>
            <div class="col-6">
              <label for="inputCategories" class="form-label">Categoria</label>
              <select class="form-control" name='categoria_id' id="" required>
                @foreach ($categories as $category )
                <option class="form-control" value="{{$category->id}}">{{$category->nombreCategoria}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-12">
              <label for="inputStatuses" class="form-label">Estado</label>
              <select class="form-control" name='estado_id' id="" required>
                @foreach ($statuses as $status )
                <option class="form-control" value="{{$status->id}}">{{$status->nombreEstado}}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-6">
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Permitir
                </label required>
              </div>
            </div>
            <div class="col-12">
              <a class="btn btn-danger m-3" href="/events">Cancelar</a>
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