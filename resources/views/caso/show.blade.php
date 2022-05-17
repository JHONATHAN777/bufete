@extends('layouts.app')

@section('template_title')
    {{ $caso->name ?? 'Show Caso' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Caso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('casos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $caso->categoria->categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Abogado Id:</strong>
                            {{ $caso->abogado->abogado }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Id:</strong>
                            {{ $caso->estado->estado}}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Completo Del Cliente:</strong>
                            {{ $caso->nombre_completo_del_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $caso->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Documento De Indetidad:</strong>
                            {{ $caso->documento_de_indetidad }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $caso->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Expediente:</strong>
                            {{ $caso->expediente }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $caso->fecha_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin:</strong>
                            {{ $caso->fecha_fin }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
