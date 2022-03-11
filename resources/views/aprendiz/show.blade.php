@extends('layouts.app')

@section('template_title')
    {{ $aprendiz->name ?? 'Show Aprendiz' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Aprendiz</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('aprendiz.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $aprendiz->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $aprendiz->Apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $aprendiz->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $aprendiz->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $aprendiz->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Fichas Id:</strong>
                            {{ $aprendiz->fichas_id }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $aprendiz->edad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
