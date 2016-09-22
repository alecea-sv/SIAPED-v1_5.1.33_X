<!-- Dui Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('dui', 'Dui:') !!}
	{!! Form::text('dui', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Escuela Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('id_escuela', 'Id Escuela:') !!}
	{!! Form::select('id_escuela', [ 'escuela1' => 'escuela1', 'escuela2' => 'escuela2', 'escuelaN' => 'escuelaN' ], null, ['class' => 'form-control']) !!}
</div>

<!-- Nombres Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nombres', 'Nombres:') !!}
	{!! Form::text('nombres', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellidos Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('apellidos', 'Apellidos:') !!}
	{!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
</div>

<!-- Sexo Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('sexo', 'Sexo:') !!}
	<div class="radio-inline">
		<label>
			{!! Form::radio('sexo', 'Masculino', null) !!} Masculino
		</label>
	</div>
	<div class="radio-inline">
		<label>
			{!! Form::radio('sexo', 'Femenino', null) !!} Femenino
		</label>
	</div>
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('direccion', 'Direccion:') !!}
	{!! Form::textarea('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('telefono', 'Telefono:') !!}
	{!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Nit Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nit', 'Nit:') !!}
	{!! Form::text('nit', null, ['class' => 'form-control']) !!}
</div>

<!-- Isss Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('isss', 'Isss:') !!}
	{!! Form::text('isss', null, ['class' => 'form-control']) !!}
</div>

<!-- Nup Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nup', 'Nup:') !!}
	{!! Form::text('nup', null, ['class' => 'form-control']) !!}
</div>

<!-- Dui Ext Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('dui_ext', 'Dui Ext:') !!}
	{!! Form::text('dui_ext', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Exp Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('fecha_exp', 'Fecha Exp:') !!}
	{!! Form::date('fecha_exp', null, ['class' => 'form-control']) !!}
</div>

<!-- Nom Afp Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nom_afp', 'Nom Afp:') !!}
  {!! Form::text('nom_afp', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('email', 'Email:') !!}
	{!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Nac Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('fecha_nac', 'Fecha Nac:') !!}
	{!! Form::date('fecha_nac', null, ['class' => 'form-control']) !!}
</div>

<!-- Nacionalidad Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nacionalidad', 'Nacionalidad:') !!}
	{!! Form::text('nacionalidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Civil Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('estado_civil', 'Estado Civil:') !!}
	{!! Form::text('estado_civil', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Conyugue Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nombre_conyuge', 'Nombre Conyuge:') !!}
	{!! Form::text('nombre_conyuge', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
