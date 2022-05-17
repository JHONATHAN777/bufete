@extends('layouts.app')

@section('template_title')
    Caso
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Caso') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('casos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Categoria</th>
										<th>Abogado</th>
										<th>Estado</th>
										<th>Nombre Completo Del Cliente</th>
										<th>Telefono</th>
										<th>Documento De Indetidad</th>
										<th>Direccion</th>
										<th>Expediente</th>
										<th>Fecha De Inicio</th>
										<th>Fecha De Fin</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($casos as $caso)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caso->categoria->categoria }}</td>
											<td>{{ $caso->abogado->abogado }}</td>
											<td>{{ $caso->estado->estado }}</td>
											<td>{{ $caso->nombre_completo_del_cliente }}</td>
											<td>{{ $caso->telefono }}</td>
											<td>{{ $caso->documento_de_indetidad }}</td>
											<td>{{ $caso->direccion }}</td>
											<td>{{ $caso->expediente }}</td>
											<td>{{ $caso->fecha_inicio }}</td>
											<td>{{ $caso->fecha_fin }}</td>

                                            <td>
                                                   
                                                <form action="{{ route('casos.destroy',$caso->id) }}" method="POST">
                                                   
                                                    <a class="btn btn-sm btn-primary " href="{{ route('casos.show',$caso->id) }}"><i class="fa fa-fw fa-eye"></i>INFO</a>
                                                    
                                                   
                                                    <a class="btn btn-sm btn-success" href="{{ route('casos.edit',$caso->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>BORRAR</button>
                                                </form>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $casos->links() !!}
            </div>
        </div>
    </div>
@endsection
