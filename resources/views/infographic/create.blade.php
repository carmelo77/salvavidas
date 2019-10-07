@extends('dashboard')

@section('ct')
    <div class="row">
        <div class="col-md-12">
            <h3>
                Agregar Infografía
            </h3>
        </div>
        <div class="col-md-6">
            <div class="panel">
                <form action="{{ url('/dashboard/infographic') }}" method="POST" enctype="multipart/form-data">
                    <div class="panel-body">
                    
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Imagen</label>
                            <input type="file" name="image" class="form-control" />
                        </div>

                        @include('messages.messages')

                    </div>
                    <div class="panel-footer text-center">
                        <button class="btn btn-success">
                            Agregar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop