<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('categoria') }}
            {{ Form::select('categoria_id',$categorias, $caso->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Id']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('abogado') }}
            {{ Form::select('abogado_id',$abogados,$caso->abogado_id, ['class' => 'form-control' . ($errors->has('abogado_id') ? ' is-invalid' : ''), 'placeholder' => 'Abogado Id']) }}
            {!! $errors->first('abogado_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::select('estado_id',$estados, $caso->estado_id, ['class' => 'form-control' . ($errors->has('estado_id') ? ' is-invalid' : ''), 'placeholder' => 'Estado Id']) }}
            {!! $errors->first('estado_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_completo_del_cliente') }}
            {{ Form::text('nombre_completo_del_cliente', $caso->nombre_completo_del_cliente, ['class' => 'form-control' . ($errors->has('nombre_completo_del_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Completo Del Cliente']) }}
            {!! $errors->first('nombre_completo_del_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $caso->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('documento_de_indetidad') }}
            {{ Form::text('documento_de_indetidad', $caso->documento_de_indetidad, ['class' => 'form-control' . ($errors->has('documento_de_indetidad') ? ' is-invalid' : ''), 'placeholder' => 'Documento De Indetidad']) }}
            {!! $errors->first('documento_de_indetidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $caso->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('expediente') }}
            {{ Form::text('expediente', $caso->expediente, ['class' => 'form-control' . ($errors->has('expediente') ? ' is-invalid' : ''), 'placeholder' => 'Expediente']) }}
            {!! $errors->first('expediente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_inicio') }}
            {{ Form::date('fecha_inicio', $caso->fecha_inicio, ['class' => 'form-control' . ($errors->has('fecha_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio']) }}
            {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_fin') }}
            {{ Form::date('fecha_fin', $caso->fecha_fin, ['class' => 'form-control' . ($errors->has('fecha_fin') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin']) }}
            {!! $errors->first('fecha_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>