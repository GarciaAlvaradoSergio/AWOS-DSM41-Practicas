@include('layouts.header')
@include('layouts.menushowimage')

@section('header')
@endsection


<div class="row">
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="alert alert-secondary" role="alert">
      Inicio/Tablas/<a href="/categories" class="alert-link">Imagenes/ </a>{{ $image->nombre }}.
    </div>
    <div class="container-fluid" style="width: 500px;">
      <!-- Editar User -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Vista de la imagen {{$image->nombre}}</h6>
        </div>
        <div class="card-body">
          <div class="text-center">

            <table class="table table-bordered table-striped">
              <tbody>
                <tr>
                  <th>ID</th>
                  <td>{{ $image->id }}</td>
                </tr>
                <tr>
                  <th>{{ $image->nombre}}</th>
                  <td><span class="badge badge-primary">{{ $image->nombre }}</span></td>
                  <td  class="border px-14 py-1">
                     <img src="/imagen/{{$image->imagen}}" width="60%">
                   </td>   
                </tr>
                
              </tbody>
            </table>
            <div class="button-container">
              <a href="{{ route('images.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
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