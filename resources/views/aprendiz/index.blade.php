@extends('layouts.app')

@section('template_title')
    Aprendiz
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Aprendiz') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('aprendiz.create') }}" class="btn btn-outline-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Aprendiz') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-dark">
                                <thead class="thead">
                                    <tr>
                                        <th>Id Aprendiz</th>
                                        
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Direccion</th>
										<th>Correo</th>
										<th>Telefono</th>
										<th>Fichas Id</th>
                                        <th>Ficha Nombre</th>
										<th>Edad</th>

                                        <th></th>
                                    </tr>

                                    {{-- mostramos la edad  --}}
                                    <div class="col-1 mb-3">
                                        <label class=" fw-bold form-label ">Suma Edad:</label>
                                        <input class="form-control col-5" disabled="disabled" value="{{$suma}}">
                                       </div>
                                </thead>
                                <tbody>
                                    @foreach ($aprendizs as $aprendiz)
                                        <tr>
                                            <td>{{ $aprendiz->id }}</td>
                                            
											<td>{{ $aprendiz->Nombre }}</td>
											<td>{{ $aprendiz->Apellido }}</td>
											<td>{{ $aprendiz->Direccion }}</td>
											<td>{{ $aprendiz->correo }}</td>
											<td>{{ $aprendiz->telefono }}</td>
											<td>{{ $aprendiz->fichas_id }}</td>
                                            <td>{{ $aprendiz->ficha->nombre }}</td>
											<td>{{ $aprendiz->edad }}</td>

                                            <td>
                                                <form action="{{ route('aprendiz.destroy',$aprendiz->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-outline-primary " href="{{ route('aprendiz.show',$aprendiz->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('aprendiz.edit',$aprendiz->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $aprendizs->links() !!}
            </div>
        </div>
    </div>
@endsection
