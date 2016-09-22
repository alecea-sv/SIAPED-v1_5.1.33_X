<?php /* @extends('layouts.app') */ ?>
@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    <a href="{!! route('empleados.index') !!}"><i class="glyphicon glyphicon-circle-arrow-left"></i></a>
    <?php /*
    {!! Form::model($empleado, ['route' => ['empleados.update', $empleado->id], 'method' => 'patch']) !!}
    */ ?>
    {!! Form::model($empleado, ['route' => ['empleados.update', $empleado->dui], 'method' => 'patch']) !!}

        @include('empleados.fields')

    {!! Form::close() !!}
    <a href="{!! route('empleados.index') !!}"><i class="glyphicon glyphicon-circle-arrow-left"></i></a>
</div>
@endsection
