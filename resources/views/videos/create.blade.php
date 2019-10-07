@extends('dashboard')

@section('title') Crear Entrada a un Video @endsection

@section('ct')

   <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
             <header class="panel-heading">
                <strong> Nueva Entrada Video </strong>
             </header>
        
        <div class="panel-body">
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

                <div class="form-group">
	                    <div class="col-sm-10">
	                         <button class="btn btn-info" id="saveVideo" disabled>Guardar</button>
	                    </div>
                </div>
            </form>
        </div>
        </section>
        @include('messages.messages')
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

@endsection