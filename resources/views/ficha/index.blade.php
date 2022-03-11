@extends('layouts.app')

@section('template_title')
    Ficha
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ficha') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('fichas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Ficha') }}
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
                                        <th>Id Ficha</th>
                                        
										<th>Nombre</th>
										<th>Coordinacion</th>
										<th>F Inicio</th>
										<th>F Fin</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fichas as $ficha)
                                        <tr>
                                            <td>{{ $ficha->id  }}</td>
                                            
											<td>{{ $ficha->nombre }}</td>
											<td>{{ $ficha->coordinacion }}</td>
											<td>{{ $ficha->f_inicio }}</td>
											<td>{{ $ficha->f_fin }}</td>

                                            <td>
                                                <form action="{{ route('fichas.destroy',$ficha->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-outline-primary  " href="{{ route('fichas.show',$ficha->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('fichas.edit',$ficha->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $fichas->links() !!}
            </div>
        </div>
    </div>
@endsection
