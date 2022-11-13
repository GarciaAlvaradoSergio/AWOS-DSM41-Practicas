@include('layouts.header')
@include('layouts.menushowactivity')

@section('header')
@endsection


<div class="row">
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="alert alert-secondary" role="alert">
      Inicio/Tablas/<a href="/activities" class="alert-link">Actividad/ </a>{{ $activity->titulo }}.
    </div>
    <div class="container-fluid" style="width: 500px;">
      <!-- Editar User -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Vista del actividad {{$activity->titulo}}</h6>
        </div>
        <div class="card-body">
          <div class="text-center">

            <table class="table table-bordered table-striped">
              <tbody>
                <tr>
                  <th>ID</th>
                  <td>{{ $activity->id }}
                  </td>
                </tr>
                <tr>
                  <th>Titulo</th>
                  <td>{{ $activity->titulo }}</td>
                </tr>
                <tr>
                  <th>Categoria</th>
                  <td><span class="badge badge-primary">{{ $activity->categoria->nombreCategoria }}</span></td>
                </tr>
                <tr>
                  <th>Estado</th>
                  <td>{!! $activity->estado->nombreEstado !!}</td>
                </tr>
                <tr>
                  <th>Fecha</th>
                  <td><a href="#" target="_blank">{{ $activity->created_at }}</a></td>
                </tr>
              </tbody>
            </table>
            <div class="button-container">
              <a href="{{ route('activities.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
              <a href="#" class="btn btn-sm btn-twitter"> Editar </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



</div>
@include('layouts.footer')