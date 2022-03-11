<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $ficha->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('coordinacion') }}
            {{ Form::text('coordinacion', $ficha->coordinacion, ['class' => 'form-control' . ($errors->has('coordinacion') ? ' is-invalid' : ''), 'placeholder' => 'Coordinacion']) }}
            {!! $errors->first('coordinacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('f_inicio') }}
            {{ Form::date('f_inicio', $ficha->f_inicio, ['class' => 'form-control' . ($errors->has('f_inicio') ? ' is-invalid' : ''), 'placeholder' => 'F Inicio']) }}
            {!! $errors->first('f_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('f_fin') }}
            {{ Form::date('f_fin', $ficha->f_fin, ['class' => 'form-control' . ($errors->has('f_fin') ? ' is-invalid' : ''), 'placeholder' => 'F Fin']) }}
            {!! $errors->first('f_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>