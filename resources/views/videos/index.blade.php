@extends('dashboard')

@section('title')
    Lista de Videos -
@stop

@section('ct')
    @include('messages.messages')
    <div class="row">
        <div class="col-md-12">
            <h3>
                Vídeos
                <a class="btn btn-success pull-right" data-toggle="modal" data-target="#create">
                    Nuevo Vídeo
                </a>
            </h3>
        </div>
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-advance table-hover">
                            <thead>
                                <tr>
                                    <th><i class="fa fa-bullhorn"></i> Título</th>
                                    <th class="hidden-phone"><i class="fa fa-bars"></i> Video</th>
                                    <th><i class="fa fa-cog"></i> Acciones</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($videos as $v)
                                    <tr>
                                        <td>{{$v->title}}</td>
                                        <td class="hidden-phone"><button class="btn btn-info" data-toggle="modal" data-target="#video{{$v->id}}">Video</button></td>
                                        <td>
                                            <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit{{$v->id}}">
                                                <i class="fa fa-pencil"></i>
                                            </a>

                                            <form action="{{url('/dashboard/videos/'.$v->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger btn-xs" ><i class="fa fa-trash-o "></i></button>
                                            </form>

                                            <div class="modal fade" id="edit{{$v->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Actualizar video</h4>
                                                  </div>
                                                  <div class="modal-body">
                                                    <form class="form-horizontal tasi-form" action="{{ url('/dashboard/videos/'.$v->id) }}" method="POST" enctype="multipart/form-data">

                                                        <div class="form-group">
                                                            <label class="col-sm-2 col-sm-2 control-label"><strong>Título</strong></label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" name="title" value="{{$v->title}}">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('PUT') }}
                                                                </div>

                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-info">Actualizar</button>
                                                </div>
                                                </form>
                                              </div>
                                            </div>
                                        </td>

                                         <div class="modal fade" id="video{{ $v->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Video {{ $v->title }}</h4>
                                              </div>
                                              <div class="modal-body">
                                                @if($v->type == 0)
                                                    <embed src="{{ url('/video/'.$v->video) }}" width="100%" height="400" autostart="false" loop="false" /></embed>
                                                @else
                                                    <iframe width="560" height="315" src="{{ $v->video }}"  allowfullscreen></iframe>
                                                @endif
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Crear Video</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal tasi-form" action="{{ url('/dashboard/videos') }}" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><strong>Título</strong></label>
                        <div class="col-sm-10">
                             <input type="text" class="form-control" name="title" required>
                             <input type="hidden" name="_token" id="token" value="<?php echo csrf_token(); ?>">
                        </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><strong>Vídeo</strong></label>
                        <div class="col-sm-10 video">
                        <button class="btn btn-info" id="upload">Subir video</button>
                        <button class="btn btn-primary" id="link">Incluir enlace</button>
                             <!--<input type="file" class="form-control" name="video" required> -->
                        </div>
                </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-info" id="saveVideo" disabled>Guardar</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#upload').on('click', function(){
                $('.video').html('<input type="file" class="form-control" name="upload" required>');
                $('#saveVideo').attr('disabled', false);
            });

            $('#link').on('click', function(){
                $('.video').html('<input type="text" class="form-control" name="link" required>');
                $('#saveVideo').attr('disabled', false);
            });
        });
    </script>

@stop