@extends('dashboard')

@section('title') Lista de Entradas - @endsection

@section('ct')
    
    <div class="row">
        <div class="col-lg-6"><h3>{{ucfirst($type)}}</h3></div>
        <div class="col-lg-6"><a href="{{url('dashboard/formations/create/'.$type)}}" class="btn btn-success pull-right">Nueva Entrada {{ucfirst($type)}}</a></div>
    </div>

    <br>

	<div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <strong>Entradas de {{ucfirst($type)}}</strong>
                </header>

                <table id="form" class="table table-striped table-advance table-hover" >
                    <thead>
                        <tr>
                            <th><i class="fa fa-bullhorn"></i> Título</th>
                            <th class="hidden-phone"><i class="fa fa-bars"></i> Bandera</th>
                            <th><i class="fa fa-picture-o"></i> PDF</th>
                            <th><i class="fa fa-cog"></i> Acciones</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($legislacion as $l)
                    	   <tr>
                            <td>{{$l->title}}</td> 
                            <td><img style="width: 80px; height: 50px; border-radius: 50%;" alt="" src="{{ url('/images') }}/{{$l->image}}"></td> 
                           <td><a href="{{url('pdf/'.$l->pdf)}}" class="btn btn-success">Descargar PDF</a></td>
                            <td>
                                <a class="btn btn-primary btn-xs" href="{{url('/dashboard/formations/'.$l->id.'/edit/'.$type)}}">
                                    <i class="fa fa-pencil"></i>
                                </a>

                                <form action="{{url('/dashboard/formations/'.$type.'/'.$l->id.'/delete')}}" method="GET">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-xs" ><i class="fa fa-trash-o "></i></button>
                                </form>
                            </td>
                           </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </div>
			
    @include('messages.messages')

@endsection