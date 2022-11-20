@include('layouts.header')
@include('layouts.menushowsubactivity')

@section('header')
@endsection
<div class="row">
  <div class="container-fluid" style="width: 500px;">
    <!-- Editar User -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Agregar Subactividad</h6>
      </div>
      <div class="card-body">
        <div class="text-center">
          <form class="row g-3" action="{{ route('subactivities.store')  }}" method="post">
            {!! csrf_field() !!}

            <div class="col-md-12">
              <label for="inputEmail4" class="form-label">Nombre</label>
              <input type="text" name="nombre" class="form-control" id="inputEmail4" autofocus required>
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Fecha</label>
              <input type="date" name="created_at" class="form-control" id="inputPassword4" required>
            </div>
            <div class="col-6">
              <label for="inputCategories" class="form-label">Actividad</label>
              <select class="form-control" name='actividad_id' id="" required>
                @foreach ($activities as $activity )
                <option class="form-control" value="{{$activity->id}}">{{$activity->titulo}}</option>
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
            </div>
            <div class="col-12">
              <a class="btn btn-danger m-3" href="/subactivities">Cancelar</a>
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