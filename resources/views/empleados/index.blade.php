<?php /* @extends('layouts.app') */ ?>
@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Empleados</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('empleados.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($empleados->isEmpty())
                <div class="well text-center">No Empleados found.</div>
            @else
                @include('empleados.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $empleados])


    </div>
@endsection
