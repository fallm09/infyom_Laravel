<!-- Operations Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('operations_id', 'Operations Id:') !!}
    {!! Form::number('operations_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Accountnumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('accountnumber', 'Accountnumber:') !!}
    {!! Form::text('accountnumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Clerib Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clerib', 'Clerib:') !!}
    {!! Form::number('clerib', null, ['class' => 'form-control']) !!}
</div>

<!-- Typecompte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('typecompte', 'Typecompte:') !!}
    {!! Form::number('typecompte', null, ['class' => 'form-control']) !!}
</div>

<!-- Solde Field -->
<div class="form-group col-sm-6">
    {!! Form::label('solde', 'Solde:') !!}
    {!! Form::text('solde', null, ['class' => 'form-control']) !!}
</div>

<!-- Datecreation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('datecreation', 'Datecreation:') !!}
    {!! Form::text('datecreation', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('comptes.index') }}" class="btn btn-default">Cancel</a>
</div>
