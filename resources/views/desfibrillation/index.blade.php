@extends('dashboard')

@section('title') Listado de desfibrilador - @endsection

@section('ct')
    
    <div class="row">
        <div class="col-lg-6">
            <h3>
                Listado de Desfibrilador
            </h3>
        </div>
        <div class="col-lg-6"><a data-toggle="modal" data-target="#create-desfibrilation" class="btn btn-success pull-right">Nueva Entrada Desfibrilador</a></div>
    </div>

    <br>

	<div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <strong>Listado de Desfibrilador</strong>
                </header>

                <table id="form" class="table table-striped table-advance table-hover" >
                    <thead>
                        <tr>
                            <th><i class="fa fa-bullhorn"></i> Nombre desfibrilador</th>
                            <th class="hidden-phone"><i class="fa fa-bars"></i> Foto</th>
                            <th><i class="fa fa-cog"></i> Acciones</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($desfibrillation as $d)
                       <tr>
                           <th>{{$d->name}}</th>
                           <th><img style="width: 80px; height: 50px; border-radius: 50%;" alt="" src="{{ url('/images/desfibrillation') }}/{{$d->photo}}"></th> 
                           <th>
                                <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#update-desfibrilation">
                                    <i class="fa fa-pencil"></i>
                                </a>

                                <form action="{{url('/dashboard/desfibrillation/'.$d->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger btn-xs" ><i class="fa fa-trash-o "></i></button>
                                </form>
                           </th>

                           <div class="modal fade" id="update-desfibrilation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">
                                                    &times;
                                                </span>
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel">Actualizar Preguntas y Respuestas</h4>
                                        </div>
                                        <div class="modal-body">

                                        <form action="{{ url('/dashboard/desfibrillation/'.$d->id) }}" method="POST" enctype="multipart/form-data">
                                        
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}

                                            <div class="form-group">
                                                <label>Nombre Desfibrilador</label>
                                                <input type="text" name="name" class="form-control" value="{{$d->name}}" />
                                            </div>

                                            <div class="form-group">
                                                <label>Foto</label>
                                                <input type="file" name="photo" class="form-control" />
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-success">
                                                Actualizar
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                       </tr>
                    @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </div>
			
    @include('messages.messages')

    <div class="modal fade" id="create-desfibrilation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            &times;
                        </span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Agregar Preguntas y Respuestas</h4>
                </div>
                <div class="modal-body">
                <form action="{{ url('/dashboard/desfibrillation') }}" method="POST" enctype="multipart/form-data">
                    
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Nombre Desfibrilador</label>
                            <input type="text" name="name" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="photo" class="form-control" />
                        </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-success">
                        Agregar
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection