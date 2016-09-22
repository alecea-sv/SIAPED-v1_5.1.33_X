<?php /* @extends('layouts.app') */ ?>
@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    <a href="{!! route('empleados.index') !!}"><i class="glyphicon glyphicon-circle-arrow-left"></i></a>
    {!! Form::open(['route' => 'empleados.store']) !!}

        @include('empleados.fields')

    {!! Form::close() !!}
    <a href="{!! route('empleados.index') !!}"><i class="glyphicon glyphicon-circle-arrow-left"></i></a>
</div>
@endsection
