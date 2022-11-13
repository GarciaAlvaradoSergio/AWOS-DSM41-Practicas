@include('layouts.header')
@include('layouts.menushowevent')

@section('header')
@endsection

<div class="row">
  <div class="container-fluid" style="width: 500px;">
    <!-- Editar User -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Vista del evento {{$event->nombreEvento}}</h6>
      </div>
      <div class="card-body">
        <div class="text-center">

          <table class="table table-bordered table-striped">
            <tbody>
              <tr>
                <th>ID</th>
                <td>{{ $event->id }}
                </td>
              </tr>
              <tr>
                <th>Titulo</th>
                <td>{{ $event->nombreEvento }}</td>
              </tr>
              <tr>
                <th>Categoria</th>
                <td><span class="badge badge-primary">{{ $event->categoria->nombreCategoria }}</span></td>
              </tr>
              <tr>
                <th>Estado</th>
                <td>{!! $event->estado->nombreEstado !!}</td>
              </tr>
              <tr>
                <th>Fecha</th>
                <td><a href="#" target="_blank">{{ $event->created_at }}</a></td>
              </tr>
            </tbody>
          </table>
          <div class="button-container">
            <a href="{{ route('events.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
            <a href="#" class="btn btn-sm btn-twitter"> Editar </a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>



</div>
@include('layouts.footer')