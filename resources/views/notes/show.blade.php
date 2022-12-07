@include('layouts.header')
@include('layouts.menushownotes')

@section('header')
@endsection


<div class="row">
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="alert alert-secondary" role="alert">
      Inicio/Tablas/<a href="/notes" class="alert-link">Notas/ </a>{{ $note->titulo }}.
    </div>
    <div class="container-fluid" style="width: 500px;">
      <!-- Editar User -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Vista de la nota {{$note->titulo}}</h6>
        </div>
        <div class="card-body">
          <div class="text-center">

            <table class="table table-bordered table-striped">
              <tbody>
                <tr>
                  <th>ID</th>
                  <td>{{ $note->id }}
                  </td>
                </tr>
                <tr>
                  <th>Titulo</th>
                  <td>{{ $note->titulo }}</td>
                </tr>
                <tr>
                  <th>Contenido</th>
                  <td style="height:30px;">{{ $note->contenido }}</td>
                </tr>
                <tr>
                  <th>Categoria</th>
                  <td><span class="badge badge-primary">{{ $note->categoria->nombreCategoria }}</span></td>
                </tr>
                <tr>
                  <th>Fecha</th>
                  <td><a href="#" target="_blank">{{ $note->fecha }}</a></td>
                </tr>
              </tbody>
            </table>
            <div class="button-container">
              <a href="{{ route('notes.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
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