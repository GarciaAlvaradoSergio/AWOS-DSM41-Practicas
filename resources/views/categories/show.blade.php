@include('layouts.header')
@include('layouts.menushowcategory')

@section('header')
@endsection


<div class="row">
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="alert alert-secondary" role="alert">
      Inicio/Tablas/<a href="/categories" class="alert-link">Categoria/ </a>{{ $category->nombreCategoria }}.
    </div>
    <div class="container-fluid" style="width: 500px;">
      <!-- Editar User -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Vista de la categoria {{$category->nombreCategoria}}</h6>
        </div>
        <div class="card-body">
          <div class="text-center">

            <table class="table table-bordered table-striped">
              <tbody>
                <tr>
                  <th>ID</th>
                  <td>{{ $category->id }}
                  </td>
                </tr>
                <tr>
                  <th>Categoria</th>
                  <td><span class="badge badge-primary">{{ $category->nombreCategoria }}</span></td>
                </tr>
              </tbody>
            </table>
            <div class="button-container">
              <a href="{{ route('categories.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
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