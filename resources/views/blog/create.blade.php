@extends('dashboard')

@section('title') Crear Entrada a un blog @endsection

@section('ct')

    <script>
        tinymce.init({selector:'textarea'});
    </script>

   <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
             <header class="panel-heading">
                <strong> Nueva Entrada blog </strong>
             </header>
        
        <div class="panel-body">
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

                <div class="form-group">
	                    <div class="col-sm-10">
	                         <button class="btn btn-info">Guardar</button>
	                    </div>
                </div>
            </form>
        </div>
        </section>
   </div>

                    @if(count($errors) > 0)
                        <div class="col-lg-6 col-lg-offset-3">
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach($errors->all() as $e)
                                        {{ $e }}.<br />
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

@endsection