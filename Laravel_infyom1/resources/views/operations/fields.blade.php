<!-- Numoperation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numoperation', 'Numoperation:') !!}
    {!! Form::number('numoperation', null, ['class' => 'form-control']) !!}
</div>

<!-- Typeoperation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('typeoperation', 'Typeoperation:') !!}
    {!! Form::number('typeoperation', null, ['class' => 'form-control']) !!}
</div>

<!-- Dateoperation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateoperation', 'Dateoperation:') !!}
    {!! Form::text('dateoperation', null, ['class' => 'form-control']) !!}
</div>

<!-- Montantoperation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('montantoperation', 'Montantoperation:') !!}
    {!! Form::text('montantoperation', null, ['class' => 'form-control']) !!}
</div>

<!-- Etats Field -->
<div class="form-group col-sm-6">
    {!! Form::label('etats', 'Etats:') !!}
    {!! Form::text('etats', null, ['class' => 'form-control']) !!}
</div>

<!-- Agence Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agence', 'Agence:') !!}
    {!! Form::text('agence', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('operations.index') }}" class="btn btn-default">Cancel</a>
</div>
