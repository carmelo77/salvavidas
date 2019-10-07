@extends('dashboard')

@section('title') Listado de Preguntas y Respuestas - @endsection

@section('ct')
    
    <div class="row">
        <div class="col-lg-6"><h3>Listado de Preguntas y Respuestas</h3></div>
        <div class="col-lg-6"><a data-toggle="modal" data-target="#create-question" class="btn btn-success pull-right">Nueva Entrada preguntas y respuestas</a></div>
    </div>

    <br>

	<div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <strong>Listado de Preguntas y Respuestas</strong>
                </header>

                <table id="form" class="table table-striped table-advance table-hover" >
                    <thead>
                        <tr>
                            <th><i class="fa fa-bullhorn"></i> Pregunta</th>
                            <th class="hidden-phone"><i class="fa fa-bars"></i> Respuesta</th>
                            <th><i class="fa fa-cog"></i> Acciones</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                       @foreach($question as $q)
                            <tr>
                            <th>{{$q->question}}</th>
                            <th>{{substr($q->answer, 0,30)}}..</th>
                            <th>
                                <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#update-question">
                                    <i class="fa fa-pencil"></i>
                                </a>

                                <form action="{{url('/dashboard/questions/'.$q->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger btn-xs" ><i class="fa fa-trash-o "></i></button>
                                </form>
                            </th>


							<div class="modal fade" id="update-question" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
              								<form action="{{ url('/dashboard/questions/'.$q->id) }}" method="POST">
												
													{{ csrf_field() }}
													{{ method_field('PUT') }}

													<div class="form-group">
														<label>Pregunta</label>
														<textarea name="question" id="question"  class="form-control">{{$q->question}}</textarea>
													</div>

													<div class="form-group">
														<label>Respuesta</label>
														<textarea name="answer" id="answer"  class="form-control">{{$q->answer}}</textarea>
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

    <div class="modal fade" id="create-question" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
        			<form action="{{ url('/dashboard/questions') }}" method="POST">
					
						{{ csrf_field() }}

						<div class="form-group">
							<label>Pregunta</label>
							<textarea name="question" id="question"  class="form-control"></textarea>
						</div>

						<div class="form-group">
							<label>Respuesta</label>
							<textarea name="answer" id="answer" class="form-control"></textarea>
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