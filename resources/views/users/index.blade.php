@include('layouts.header')
@include('layouts.menu')

@section('header')
@endsection

                    <!-- Content Row -->

                    <div class="row">
                        <div class="container-fluid">

                            <!-- Page Heading -->
                            <div class="alert alert-secondary" role="alert">
                                Inicio/Tablas/<a href="#" class="alert-link">Estudiantes</a>.
                              </div>
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tabla de datos de los estudiantes</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <div class="card mb-3 border-left-primary" style="width: 5px 15px;">
                                            <div class="card-body" style="display: inline-flex;">
                                                <p style="margin: auto 20px;">Agregar estudiante</p>
                                                <button type="button" class="btn btn-primary">Agregar</button>
                                            </div>
                                        </div>
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>

                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nombre</th>
                                                    <th>Correo</th>
                                                    <th>Contraseña</th>
                                                    <th>Registro</th>
                                                    <th>Operaciónes</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $item)
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td>{{ $item-> name}}</td>
                                                    <td>{{ $item-> email}}</td>
                                                    <td>{{ $item-> password}}</td>
                                                    <td>{{ $item-> created_at}}</td>
                                                    <td>
                                                        <div class="btn-gruop" style="padding-inline: 20px;
                                                                                    margin:5px auto;
                                                                                    display:inline-flex;
                                                                                    width: auto 50px;">
                                                            <a href="users/{{$item->id}}" class="btn btn-info btn-circle" style="margin: 5px 5px;">
                                                                <i class="fas fa-info-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-warning btn-circle" style="margin: 5px 5px;">
                                                                <i class="fas fa-exclamation-triangle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger btn-circle" style="margin: 5px 5px;">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                @endforeach
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    </div>
@include('layouts.footer')