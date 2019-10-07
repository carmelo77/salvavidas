@extends('dashboard')

@section('title') Listado de playas - @endsection

@section('ct')
    
    <div class="row">
        <div class="col-lg-6">
            <h3>
                Listado de Playas
            </h3>
        </div>
        <div class="col-lg-6"><a data-toggle="modal" data-target="#create-beach"  class="btn btn-success pull-right">Nueva Entrada Playa</a></div>
    </div>

    <br>

	<div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <strong>Listado de Playas</strong>
                </header>

                <table id="form" class="table table-striped table-advance table-hover" >
                    <thead>
                        <tr>
                            <th><i class="fa fa-bullhorn"></i> Nombre Playa</th>
                            <th class="hidden-phone"><i class="fa fa-bars"></i> Localidad</th>
                            <th><i class="fa fa-cog"></i> Acciones</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($beach as $b)
                        <tr>
                            <th>{{$b->name}}</th>
                            <th>{{$b->location}}</th>
                            <th>
                                <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#update-beach" >
                                    <i class="fa fa-pencil"></i>
                                </a>

                                <form action="{{url('/dashboard/beach/'.$b->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger btn-xs" ><i class="fa fa-trash-o "></i></button>
                                </form>
                            </th>

                                 <div class="modal fade" id="update-beach" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">
                                                        &times;
                                                    </span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel">Actualizar Playa</h4>
                                            </div>
                                            <div class="modal-body">
                                            <form action="{{ url('/dashboard/beach/'.$b->id) }}" method="POST">
                                                
                                                    {{ csrf_field() }}
                                                    {{ method_field('PUT') }}

                                                    <div class="form-group">
                                                        <label>Playa</label>
                                                        <input type="text" class="form-control" name="name" value="{{$b->name}}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Localidad</label>
                                                        <input type="text" class="form-control" name="location" value="{{$b->location}}">
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-success">
                                                    Actulizar
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

        <div class="modal fade" id="create-beach" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                &times;
                            </span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Agregar Playa</h4>
                    </div>
                    <div class="modal-body">
                    <form action="{{ url('/dashboard/beach') }}" method="POST">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label>Playa</label>
                                <input type="text" name="name" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label>Localidad</label>
                                <input type="text" name="location" class="form-control" />
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success">
                            Agregar
                        </button>
                    </form>
                    </div>
                </div>
            </div>
        </div>

@endsection