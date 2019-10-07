@extends('dashboard')

@section('title') 
    Lista de Entradas Blog - Salvavidas
@stop

@section('ct')
    <script>
        tinymce.init({selector:'textarea'});
    </script>

    <div class="row">
        <div class="col-md-12">
            <h3>
                Entradas del Blog
                <a class="btn btn-success pull-right" data-toggle="modal" data-target="#blog">
                    Nueva Entrada
                </a>
            </h3>
        </div>
        <br>

        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-advance table-hover">
                            <thead>
                                <tr>
                                    <th><i class="fa fa-bullhorn"></i> Título</th>
                                    <th class="hidden-phone"><i class="fa fa-bars"></i> Contenido</th>
                                    <th><i class="fa fa-picture-o"></i> Imagen</th>
                                    <th><i class="fa fa-clock-o"></i> Fecha de publicación</th>
                                    <th><i class="fa fa-cog"></i> Acciones</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($blogs as $b)
                                <tr>
                                    <td>{{$b->title}}</td>
                                    <td class="hidden-phone">{{substr(strip_tags($b->content), 0,150)}}...</td>
                                    <td><img style="width: 80px; height: 50px; border-radius: 50%;" alt="" src="{{ url('/images') }}/{{$b->image}}"></td>
                                    <td>{{$b->date}}</td>
                                    <td>
                                        <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit{{$b->id}}">
                                            <i class="fa fa-pencil"></i>
                                        </a>

                                        <form action="{{url('/dashboard/blog/'.$b->id)}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger btn-xs" ><i class="fa fa-trash-o "></i></button>
                                        </form>

                                        <div class="modal fade" id="edit{{$b->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Actualizar Entrada Blog</h4>
                                                </div>
                                                <div class="modal-body">
                                                     <form class="form-horizontal tasi-form" action="{{ url('/dashboard/blog/'.$b->id) }}" method="POST" enctype="multipart/form-data">

                                                        <div class="form-group">
                                                            <label class="col-sm-2 col-sm-2 control-label"><strong>Título</strong></label>
                                                                <div class="col-sm-10">
                                                                     <input type="text" class="form-control" name="title" value="{{$b->title}}">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('PUT') }}
                                                                </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 col-sm-2 control-label"><strong>Contenido</strong></label>
                                                               <div class="col-sm-10">
                                                                    <textarea name="content" class="form-control" id="" cols="20" rows="5">{{$b->content}}</textarea>
                                                                  <!--  <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
                                                               </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-sm-2 col-sm-2 control-label"><strong>Imagen</strong></label>
                                                                <div class="col-sm-10">
                                                                     <input type="file" class="form-control" name="image">
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-info">Actualizar</button>
                                                </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        </div> 
                                    </td>  
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @include('messages.messages')

        <div class="modal fade" id="blog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Nueva Entrada Blog</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal tasi-form" action="{{ url('/dashboard/blog') }}" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label"><strong>Título</strong></label>
                                <div class="col-sm-10">
                                     <input type="text" class="form-control" name="title" required>
                                     {{ csrf_field() }}
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label"><strong>Contenido</strong></label>
                               <div class="col-sm-10">
                                    <textarea class="form-control" name="content" cols="20" rows="5"></textarea>
                                  <!--  <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
                               </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label"><strong>Imagen</strong></label>
                                <div class="col-sm-10">
                                     <input type="file" class="form-control" name="image" required>
                                </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info">Guardar</button>
                    </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        
@stop