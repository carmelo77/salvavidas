@extends('dashboard')

@section('title') Listado de Infografías - @endsection

@section('ct')
    
    <div class="row">
        <div class="col-lg-6">
            <h3>
                Listado de Infografías
            </h3>
        </div>
        <div class="col-lg-6"><a data-toggle="modal" data-target="#create-infographic" class="btn btn-success pull-right">Nueva Entrada Infografía</a></div>
    </div>

    <br>

	<div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <strong>Listado de Infografía</strong>
                </header>

                <table id="form" class="table table-striped table-advance table-hover" >
                    <thead>
                        <tr>
                            <th><i class="fa fa-bullhorn"></i> Miniatura</th>
                            <th><i class="fa fa-cog"></i> Acciones</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($infografias as $i)
                        <tr>
                            <th>
                                <img style="width: 80px; height: 50px; border-radius: 50%;"  src="{{url('/images/thumbnails/')}}/{{$i->thumbnail}}" data-toggle="modal" data-target=".image">
                            </th>
                            <th>
                                <form action="{{url('/dashboard/infographic/'.$i->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger btn-xs" >
                                    <i class="fa fa-trash-o "></i>
                                </button>

                                </form>
                            </th>

            

                            <div class="modal fade image" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                              <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                  <img  src="{{url('/images/')}}/{{$i->image}}">
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

    <div class="modal fade" id="create-infographic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            &times;
                        </span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Agregar Infografía</h4>
                </div>
                <div class="modal-body">
                <form action="{{ url('/dashboard/infographic') }}" method="POST" enctype="multipart/form-data">
                    
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Imagen</label>
                            <input type="file" name="image" class="form-control" />
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