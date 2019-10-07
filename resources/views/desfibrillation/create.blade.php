@extends('dashboard')

@section('ct')
    <div class="row">
        <div class="col-md-12">
            <h3>
                Agregar Desfibrilador
            </h3>
        </div>
        <div class="col-md-6">
            <div class="panel">
                <form action="{{ url('/dashboard/desfibrillation') }}" method="POST" enctype="multipart/form-data">
                    <div class="panel-body">
                    
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Nombre Desfibrilador</label>
                            <input type="text" name="name" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="photo" class="form-control" />
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