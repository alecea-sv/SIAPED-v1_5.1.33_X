<?php /* @extends('layouts.app') */ ?>
@extends('app')

@section('content')
<div class="container">
	<a href="{!! route('empleados.index') !!}"><i class="glyphicon glyphicon-circle-arrow-left"></i></a>
	 @include('empleados.show_fields')
	<a href="{!! route('empleados.index') !!}"><i class="glyphicon glyphicon-circle-arrow-left"></i></a>
</div>
@endsection
