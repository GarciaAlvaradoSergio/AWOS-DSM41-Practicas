@include('layouts.header')
@include('layouts.menushowsubactivity')
@section('header')
@endsection

                    <!-- Content Row -->

                    <div class="row">
                        <div class="container-fluid">

                            <!-- Page Heading -->
                            <div class="alert alert-secondary" role="alert">
                                Inicio/Tablas/<a href="#" class="alert-link">Sub-Actividades</a>.
                              </div>
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tabla de datos de sub-actividades</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <div class="card mb-3 border-left-primary" style="width: 5px 15px;">
                                            <div class="card-body" style="display: inline-flex;">
                                                <p style="margin: auto 20px;">Agregar actividad</p><a href="subactivities/create"
                                                type="button" class="btn btn-primary">Agregar</a>
                                            </div>
                                        </div>
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>

                                                <tr>
                                                    <th>ID</th>
                                                    <th>Actividad</th>
                                                    <th>Estado</th>
                                                    <th>Nombre</th>
                                                    <th>Fecha</th>
                                                    <th>Operaciónes</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($subactivities as $item)
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td>{{ $item-> actividad->titulo}}</td>
                                                    <td>{{ $item-> estado->nombreEstado}}</td>
                                                    <td>{{ $item-> nombre}}</td>
                                                    <td>{{ $item-> created_at}}</td>
                                                    <td>
                                                        <div class="btn-gruop" style="padding-inline: 20px;
                                                                                    margin:5px auto;
                                                                                    display:inline-flex;
                                                                                    width: auto 50px;">
                                                            <a href="{{route ('subactivities.show',$item->id)}}" class="btn btn-info btn-circle" style="margin: 5px 5px;">
                                                                <i class="fas fa-info-circle"></i>
                                                            </a>
                                                            <a href="{{route('subactivities.edit',$item->id)}}" class="btn btn-warning btn-circle" style="margin: 5px 5px;">
                                                                <i class="fas fa-exclamation-triangle"></i>
                                                            </a>
                                                            <button type="submit" data-toggle="modal" data-target="#deleteModal{{$item->id}}" class="btn btn-danger btn-circle" style="margin: 5px 5px;">
                                                                <i class="fas fa-trash"></i>
                                                            </button>                                            
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- delete Modal-->
                                                <div class="modal fade" id="deleteModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">¿Listo para eliminar?</h5>
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">Seleccione "Aceptar" si está listo para eliminar registro.</div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                                                <form action="{{route('subactivities.destroy', $item->id)}}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit">Aceptar</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- delete Modal termina-->
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </div> 

@include('layouts.footer')