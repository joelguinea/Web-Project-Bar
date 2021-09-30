<!-- Productname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Productname', 'Productname:') !!}
    {!! Form::text('Productname', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Price', 'Price:') !!}
    {!! Form::text('Price', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>