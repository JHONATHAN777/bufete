@extends('layouts.app')

@section('template_title')
    Abogado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Abogado') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('abogados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Abogado</th>
										<th>Telefono</th>
										<th>Direccion</th>
										<th>Documento De Indentidad</th>
										<th>Correo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($abogados as $abogado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $abogado->abogado }}</td>
											<td>{{ $abogado->telefono }}</td>
											<td>{{ $abogado->direccion }}</td>
											<td>{{ $abogado->documento_de_indentidad }}</td>
											<td>{{ $abogado->correo }}</td>

                                            <td>
                                              
                                                <form action="{{ route('abogados.destroy',$abogado->id) }}" method="POST">
                                                    @can('abogados.show')                                                                                                                                                           
                                                    <a class="btn btn-sm btn-primary " href="{{ route('abogados.show',$abogado->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    @endcan
                                                    <a class="btn btn-sm btn-success" href="{{ route('abogados.edit',$abogado->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $abogados->links() !!}
            </div>
        </div>
    </div>
@endsection
