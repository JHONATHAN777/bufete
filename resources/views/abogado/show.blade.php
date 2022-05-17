@extends('layouts.app')

@section('template_title')
    {{ $abogado->name ?? 'Show Abogado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Abogado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('abogados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Abogado:</strong>
                            {{ $abogado->abogado }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $abogado->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $abogado->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Documento De Indentidad:</strong>
                            {{ $abogado->documento_de_indentidad }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $abogado->correo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
