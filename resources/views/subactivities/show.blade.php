@include('layouts.header')
@include('layouts.menushowsubactivity')

@section('header')
@endsection


<div class="row">
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="alert alert-secondary" role="alert">
      Inicio/Tablas/<a href="/activities" class="alert-link">Sub-Actividad/ </a>{{ $subactivity->nombre }}.
    </div>
    <div class="container-fluid" style="width: 500px;">
      <!-- Editar User -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Vista del actividad {{$subactivity->nombre}}</h6>
        </div>
        <div class="card-body">
          <div class="text-center">

            <table class="table table-bordered table-striped">
              <tbody>
                <tr>
                  <th>ID</th>
                  <td>{{ $subactivity->id }}
                  </td>
                </tr>
                <tr>
                  <th>Sub-Actividad</th>
                  <td>{{ $subactivity->nombre }}</td>
                </tr>
                <tr>
                  <th>Actividad</th>
                  <td><span class="badge badge-primary">{{ $subactivity->actividad->titulo }}</span></td>
                </tr>
                <tr>
                  <th>Estado</th>
                  <td>{!! $subactivity->estado->nombreEstado !!}</td>
                </tr>
                <tr>
                  <th>Fecha</th>
                  <td><a href="#" target="_blank">{{ $subactivity->created_at }}</a></td>
                </tr>
              </tbody>
            </table>
            <div class="button-container">
              <a href="{{ route('subactivities.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
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