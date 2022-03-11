@extends('layouts.app')

@section('template_title')
    {{ $ficha->name ?? 'Show Ficha' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ficha</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('fichas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $ficha->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Coordinacion:</strong>
                            {{ $ficha->coordinacion }}
                        </div>
                        <div class="form-group">
                            <strong>F Inicio:</strong>
                            {{ $ficha->f_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>F Fin:</strong>
                            {{ $ficha->f_fin }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
