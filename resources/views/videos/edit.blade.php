@extends('dashboard')

@section('title') Editar Entrada a un video @endsection

@section('ct')

   <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
             <header class="panel-heading">
                <strong> Editar Entrada video </strong>
             </header>
        
        <div class="panel-body">
            <form class="form-horizontal tasi-form" action="{{ url('/dashboard/videos/'.$videos->id) }}" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"><strong>Título</strong></label>
	                    <div class="col-sm-10">
	                         <input type="text" class="form-control" name="title" value="{{$videos->title}}">
	                         <input type="hidden" name="_token" id="token" value="<?php echo csrf_token(); ?>">
                             <input type="hidden" name="_method" value="PUT">
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