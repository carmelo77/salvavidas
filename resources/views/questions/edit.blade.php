@extends('dashboard')

@section('title') Editar Preguntas y Respuestas @endsection

@section('ct')

   <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
             <header class="panel-heading">
                <strong> Editar Preguntas y Respuestas </strong>
             </header>
        
        <div class="panel-body">
            <form class="form-horizontal tasi-form" action="{{ url('/dashboard/questions/'.$q->id) }}" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><strong>Pregunta</strong></label>
	                    <div class="col-sm-10">
	                         <textarea name="question" id="question"  class="form-control">{{$q->question}}</textarea>
	                         <input type="hidden" name="_token" id="token" value="<?php echo csrf_token(); ?>">
                             <input type="hidden" name="_method" value="PUT">
	                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><strong>Respuesta</strong></label>
                        <div class="col-sm-10">
                             <textarea name="answer" id="answer"  class="form-control">{{$q->answer}}</textarea>
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
        @include('messages.messages')
   </div>


@endsection