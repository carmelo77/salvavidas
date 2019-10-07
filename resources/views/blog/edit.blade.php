@extends('dashboard')

@section('title') Editar Entrada a un blog @endsection

@section('ct')

    <script>
        tinymce.init({selector:'textarea'});
    </script>

   <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
             <header class="panel-heading">
                <strong> Editar Entrada blog </strong>
             </header>
        
        <div class="panel-body">
            <form class="form-horizontal tasi-form" action="{{ url('/dashboard/blog/'.$blog->id) }}" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><strong>Título</strong></label>
	                    <div class="col-sm-10">
	                         <input type="text" class="form-control" name="title" value="{{$blog->title}}">
	                         <input type="hidden" name="_token" id="token" value="<?php echo csrf_token(); ?>">
                             <input type="hidden" name="_method" value="PUT">
	                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><strong>Contenido</strong></label>
                       <div class="col-sm-10">
                            <textarea name="content" class="form-control" id="" cols="20" rows="5">{{$blog->content}}</textarea>
                          <!--  <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span> -->
                       </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><strong>Imagen</strong></label>
	                    <div class="col-sm-10">
	                         <input type="file" class="form-control" name="image">
	                    </div>
                </div>

                <div class="form-group">
	                    <div class="col-sm-10">
	                         <button class="btn btn-info">Actualizar</button>
	                    </div>
                </div>
            </form>
        </div>
        </section>
   </div>

@endsection